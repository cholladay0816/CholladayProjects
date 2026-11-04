import test from 'node:test';
import assert from 'node:assert/strict';
import { readFile, readdir, stat } from 'node:fs/promises';
import { join } from 'node:path';
import { assets } from '../scripts/assets.mjs';

const html = await readFile('dist/index.html', 'utf8');
async function files(directory, prefix = '') {
    const found = [];
    for (const entry of await readdir(directory, { withFileTypes: true })) {
        const path = `${prefix}${entry.name}`;
        if (entry.isDirectory()) found.push(...await files(join(directory, entry.name), `${path}/`));
        else found.push(path);
    }
    return found.sort();
}

test('publish output contains only the public asset allowlist', async () => {
    assert.deepEqual(await files('dist'), [...assets].sort());
    for (const file of assets) assert.ok((await stat(join('dist', file))).size > 0, file);
    assert.ok(assets.every(file => !/\.(php|sqlite|env|map)$/.test(file)));
});

test('homepage preserves content, metadata and static-only behavior', () => {
    for (const text of ['Christian Holladay', 'Elevato', 'Missouri', 'play Quake',
        'My GitHub Stats', 'id="creatorcore"', '<title>Cholladay Projects</title>',
        'name="description"', 'property="og:title"', 'property="og:description"',
        'property="og:image"', 'rel="canonical"', 'lang="en"', 'name="viewport"']) {
        assert.ok(html.includes(text) || html.includes(text.replaceAll('"', "'")), text);
    }
    const origin = new URL(process.env.SITE_URL || 'https://cholladayprojects.com').origin;
    assert.ok(html.includes(`${origin}/img/profile_picture.png`));
    assert.ok(html.includes(`href="${origin}/"`));
    assert.doesNotMatch(html, /<script|<form|csrf-token|\{\{|__SITE_URL__|x-data|wire:/i);
    assert.doesNotMatch(html, /[\x00-\x08\x0b\x0c\x0e-\x1f]/);
    assert.equal((html.match(/<main>/g) || []).length, 1);
});

test('every local HTML link and image resolves to a published asset or anchor', async () => {
    for (const page of ['index.html', '404.html']) {
        const content = await readFile(`dist/${page}`, 'utf8');
        for (const [, value] of content.matchAll(/(?:href|src)=["']([^"']+)["']/g)) {
            if (value.startsWith('#')) assert.ok(html.includes(`id="${value.slice(1)}"`), value);
            else if (value.startsWith('/')) assert.ok(value === '/' || assets.includes(value.slice(1)), value);
            else assert.ok(/^(https:\/\/|mailto:)/.test(value), value);
        }
    }
    for (const url of ['https://www.elevatodigital.com', 'mailto:cholladay0816@gmail.com',
        'https://github.com/cholladay0816', 'https://linkedin.com/in/christian-holladay',
        'https://twitter.com/cholladay0816']) assert.ok(html.includes(url), url);
});

test('verification files and 404 behavior are preserved', async () => {
    assert.equal((await readFile('dist/google3a097465f7217520.html', 'utf8')).trim(),
        'google-site-verification: google3a097465f7217520.html');
    assert.match(await readFile('dist/.well-known/brave-rewards-verification.txt', 'utf8'), /Domain: cholladayprojects\.com/);
    assert.match(await readFile('dist/404.html', 'utf8'), /name="robots" content="noindex"/);
    const config = JSON.parse(await readFile('wrangler.json', 'utf8'));
    assert.equal(config.assets.directory, './dist');
    assert.equal(config.assets.not_found_handling, '404-page');
    assert.equal(config.routes, undefined);
    assert.equal(config.account_id, undefined);
});
