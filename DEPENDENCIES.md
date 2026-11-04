# Dependencies

The static conversion retires the Laravel/Composer runtime and the Laravel Mix/Tailwind/Alpine/Axios build stack. Its only npm development dependency is the pinned Cloudflare Wrangler CLI. Node built-ins handle the static build and tests; the browser downloads no application JavaScript.

Run `npm ci` for reproducible tooling and `npm audit --audit-level=low` to check all installed dependencies. The initial conversion audit on 2026-11-04 reports zero vulnerabilities. CI fails on any future reported finding rather than suppressing it.

The previously unresolved PHP and legacy build-tool advisories documented in PR #36 are removed from this branch's dependency graph by retiring those packages, not by undertaking the previously proposed Laravel major migration. This does not patch or shut down any historical server still running the old code; any such server requires a separate operational decision. No existing database, user data or backup is changed.

Keep Wrangler current through reviewed lockfile updates. Repeat build, asset/metadata tests, HTTP route checks and dry-run validation after updates. See README.md for runtime, routing and deployment instructions.
