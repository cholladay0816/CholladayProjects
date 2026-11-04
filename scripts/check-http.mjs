import assert from 'node:assert/strict';
import { spawn, execFileSync } from 'node:child_process';
import { createServer } from 'node:net';
import { setTimeout } from 'node:timers/promises';
import { assets } from './assets.mjs';

// Ask the OS for an unused local port; never attach to an existing user's server.
const probe = createServer();
await new Promise(resolve => probe.listen(0, '127.0.0.1', resolve));
const port = probe.address().port;
await new Promise(resolve => probe.close(resolve));
const child = spawn(process.execPath, ['node_modules/wrangler/bin/wrangler.js', 'dev',
    '--local', '--ip', '127.0.0.1', '--port', String(port)], {
    env: { ...process.env, WRANGLER_SEND_METRICS: 'false' }, windowsHide: true,
    stdio: ['ignore', 'pipe', 'pipe'],
});
let logs = '';
child.stdout.on('data', data => { logs += data; });
child.stderr.on('data', data => { logs += data; });
const origin = `http://127.0.0.1:${port}`;
try {
    let ready = false;
    for (let attempt = 0; attempt < 120; attempt++) {
        if (child.exitCode !== null) throw new Error(logs);
        try { ready = (await fetch(origin, { signal: AbortSignal.timeout(500) })).ok; } catch {}
        if (ready) break;
        await setTimeout(250);
    }
    assert.ok(ready, `Wrangler failed to start: ${logs}`);
    const home = await fetch(origin);
    assert.match(await home.text(), /Christian Holladay/);
    assert.match(home.headers.get('content-security-policy'), /default-src 'none'/);
    assert.equal(home.headers.get('set-cookie'), null);
    for (const asset of assets.filter(file => !['_headers', 'index.html', '404.html'].includes(file))) {
        assert.equal((await fetch(`${origin}/${asset}`)).status, 200, asset);
    }
    const retired = [
        ['GET', '/login'], ['POST', '/login'], ['GET', '/register'], ['POST', '/register'],
        ['POST', '/logout'], ['GET', '/forgot-password'], ['POST', '/forgot-password'],
        ['GET', '/reset-password/example'], ['POST', '/reset-password'],
        ['GET', '/two-factor-challenge'], ['POST', '/two-factor-challenge'],
        ['GET', '/api/user'], ['GET', '/sanctum/csrf-cookie'], ['GET', '/user/profile'],
        ['PUT', '/user/password'], ['PUT', '/user/profile-information'],
        ['GET', '/user/confirm-password'], ['POST', '/user/confirm-password'],
        ['GET', '/user/confirmed-password-status'], ['POST', '/user/confirmed-two-factor-authentication'],
        ['POST', '/user/two-factor-authentication'], ['DELETE', '/user/two-factor-authentication'],
        ['GET', '/user/two-factor-qr-code'], ['GET', '/user/two-factor-secret-key'],
        ['GET', '/user/two-factor-recovery-codes'], ['POST', '/user/two-factor-recovery-codes'],
        ['GET', '/livewire/livewire.js'], ['GET', '/livewire/livewire.js.map'],
        ['POST', '/livewire/message/example'], ['POST', '/en/livewire/message/example'],
        ['POST', '/livewire/upload-file'], ['GET', '/livewire/preview-file/example'],
        ['HEAD', '/login'], ['GET', '/login/'], ['GET', '/login?next=/'],
    ];
    for (const [method, path] of retired) {
        const response = await fetch(origin + path, { method, headers: { 'Sec-Fetch-Mode': 'navigate' } });
        assert.equal(response.status, 410, `${method} ${path}`);
        assert.equal(response.headers.get('set-cookie'), null);
        assert.doesNotMatch(await response.text(), /Christian Holladay/);
    }
    for (const path of ['/missing', '/dashboard', '/projects', '/project/example', '/.env',
        '/composer.json', '/index.php', '/storage/logs/laravel.log', '/_headers']) {
        const response = await fetch(origin + path, { headers: { 'Sec-Fetch-Mode': 'navigate' } });
        assert.equal(response.status, 404, path);
        assert.match(await response.text(), /Page not found/);
    }
    assert.equal((await fetch(origin, { method: 'HEAD' })).status, 200);
    console.log(`HTTP checks passed: public assets, ${retired.length} retired requests, missing/private paths and headers`);
} finally {
    if (process.platform === 'win32' && child.exitCode === null) {
        execFileSync('taskkill', ['/pid', String(child.pid), '/t', '/f'], { stdio: 'ignore', windowsHide: true });
    } else child.kill('SIGTERM');
}
