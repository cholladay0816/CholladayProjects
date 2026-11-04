import { copyFile, mkdir, readFile, realpath, rm, writeFile, lstat } from 'node:fs/promises';
import { dirname, resolve, join } from 'node:path';
import { fileURLToPath } from 'node:url';
import { assets } from './assets.mjs';

const root = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const output = join(root, 'dist');
// Historical hostname from the public Brave verification file; override for
// another hostname. Building does not provision an account or change DNS.
const siteUrl = new URL(process.env.SITE_URL || 'https://cholladayprojects.com');
if (siteUrl.protocol !== 'https:' || siteUrl.username || siteUrl.password ||
    siteUrl.pathname !== '/' || siteUrl.search || siteUrl.hash) {
    throw new Error('SITE_URL must be an HTTPS origin without credentials, path, query or fragment');
}
await mkdir(output, { recursive: true });
if ((await lstat(output)).isSymbolicLink() || await realpath(output) !== join(await realpath(root), 'dist')) {
    throw new Error('Refusing to clear a dist directory outside this checkout');
}
await rm(output, { recursive: true });
for (const asset of assets) {
    const source = join(root, 'site', asset);
    const target = join(output, asset);
    await mkdir(dirname(target), { recursive: true });
    if ((await lstat(source)).isSymbolicLink()) throw new Error(`Symlink is not a publishable asset: ${asset}`);
    if (asset.endsWith('.html')) {
        const html = (await readFile(source, 'utf8')).replaceAll('__SITE_URL__', siteUrl.origin);
        await writeFile(target, html);
    } else {
        await copyFile(source, target);
    }
}
console.log(`Built ${assets.length} allowlisted assets into dist (metadata origin: ${siteUrl.origin})`);
