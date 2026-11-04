# Cholladay Projects

A static personal portfolio on Cloudflare Workers Static Assets. The public biography, contact links, dark layout and images are preserved from the former Laravel homepage. No PHP, database, sessions, authentication, Axios, Alpine, Webpack or Tailwind build is required.

## Local development

Use Node.js 24 (see `.node-version`) and npm:

```sh
npm ci
npm run build
npm test
npm run test:http
npm run dev
```

`npm run dev` serves a local Wrangler preview. Edit `site/index.html` for content and `site/css/portfolio.css` for style adjustments, then rebuild. `site/css/app.css` is the retained compiled stylesheet; it is source-controlled and copied unchanged, preserving the old utility styling without the obsolete toolchain. There is no client-side JavaScript.

The existing GitHub statistics image and Nunito font remain external services. The GitHub profile link remains usable if the statistics service is unavailable. External services and outbound links are not controlled by this project. The old empty favicon and unused bundled JavaScript were intentionally omitted.

## Publish boundary and routing

The build copies exactly the files listed in `scripts/assets.mjs` into `dist/`. Only `dist/` is bound as public assets. Repository files, old local `.env` files, vendor folders, database files and logs are never copied. The Google and Brave verification files are included at their public paths. Their historical contents remain unchanged.

The homepage and files are served assets-first. `404.html` gives unknown paths an actual 404, with no SPA homepage fallback. A small Worker only handles the retired account/API/Livewire URL patterns and returns HTTP 410 for every method (including POST, PUT, DELETE and HEAD). It has no database or identity bindings, and never reads a request body. It exists because the asset server alone returns 405 for non-GET requests.

Registration, login/logout, password recovery, account settings, two-factor authentication, `/api/user`, Sanctum and Livewire endpoints have been retired with owner approval. Project search/detail and dashboard routes were already disabled. No data migration, database deletion, account deletion or infrastructure teardown is performed. The previous Laravel implementation is available in Git history at merged PR #36 (`59b8c5b`). Keep any old production database and backups independently until a separate retention decision is made.

The former commission-card slot was never rendered by the homepage profile component. It has not been added as new functionality. The historical employer and biography text are retained without claiming they have been independently updated.

## Validation

```sh
npm audit --audit-level=low
npm run build
npm test
npm run test:http
npm run check:deploy
```

The Node tests check the exact output allowlist, homepage content/metadata, local references and verification files. HTTP checks start a private local Wrangler process, verify public assets and security headers, exercise 35 retired route requests and check missing/private paths, then stop that process. `check:deploy` performs only a Wrangler dry-run. CI runs all these checks and never deploys.

## Deployment preparation (not yet deployed)

`wrangler.json` proposes Worker name `cholladay-projects`, compatibility date `2026-11-04`, and `dist/` assets. It deliberately contains no account ID, custom domain, route, database binding, secret or deployment credential.

1. Select the intended Cloudflare account and confirm the Worker name is available. Read-only account inspection found no existing matching project or zone; this repository does not create either during build/tests.
2. Decide the hostname. `SITE_URL` defaults to the historical `https://cholladayprojects.com` recorded in the Brave verification file. Before deploying a preview or another domain, set `SITE_URL` to its HTTPS origin and run `npm run build`; this controls canonical and Open Graph URLs. The value must have no path, credentials, query or fragment. It does not configure DNS.
3. Run the validation commands above. Authentication is not needed for local tests or the dry-run.
4. Only after separate deployment authorization, use existing authorized Cloudflare access and run `npx wrangler deploy` against the selected account. For Workers Builds, use `npm ci && npm run build` as the build command and `npx wrangler deploy` as the deploy command; set `SITE_URL` appropriately.
5. Verify the resulting workers.dev site before separately authorizing any custom-domain/DNS cutover. Keep existing databases and backups untouched.

No deployment, DNS change, new credential, production data access or old-host deletion is part of this conversion PR.

Official references: [Static Assets](https://developers.cloudflare.com/workers/static-assets/), [404 routing](https://developers.cloudflare.com/workers/static-assets/routing/static-site-generation/), [Worker routing](https://developers.cloudflare.com/workers/static-assets/routing/worker-script/), [headers](https://developers.cloudflare.com/workers/static-assets/headers/).
