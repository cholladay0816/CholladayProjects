// Only retired endpoint patterns invoke this Worker. Public files remain assets-first.
const roots = ['/login', '/logout', '/register', '/forgot-password', '/reset-password',
    '/two-factor-challenge', '/user', '/api', '/sanctum', '/livewire'];

export default {
    async fetch(request, env) {
        const { pathname } = new URL(request.url);
        const retired = roots.some(root => pathname === root || pathname.startsWith(`${root}/`)) ||
            /^\/[^/]+\/livewire\/message\//.test(pathname);
        if (!retired) return env.ASSETS.fetch(request);

        return new Response(request.method === 'HEAD' ? null : `<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex"><title>Page retired | Cholladay Projects</title>
<link rel="stylesheet" href="/css/app.css"><link rel="stylesheet" href="/css/portfolio.css"></head>
<body class="error-page"><main class="error-content"><h1>This page has been retired</h1>
<p>Account and API features are no longer available. Cholladay Projects is now a public portfolio.</p>
<a href="/">Return to the portfolio</a></main></body></html>`, {
            status: 410,
            headers: {
                'Content-Type': 'text/html; charset=utf-8',
                'Cache-Control': 'no-store',
                'X-Robots-Tag': 'noindex',
                'X-Content-Type-Options': 'nosniff',
                'Content-Security-Policy': "default-src 'none'; style-src 'self'; base-uri 'none'; form-action 'none'; frame-ancestors 'none'",
            },
        });
    },
};
