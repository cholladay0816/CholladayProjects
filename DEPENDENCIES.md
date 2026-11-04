# Dependency maintenance

This update retains Laravel 8, Jetstream 1, Livewire 2, Laravel Mix 6 and Tailwind 2. It reduces known vulnerabilities; it does **not** make this legacy stack security-clean.

## Runtime and verification

Use a currently patched PHP 8.2 or 8.3 runtime with Composer 2 and Node.js 24 with npm. The refreshed PHP dependency graph requires PHP 8.2 or newer; the manifest and Composer platform target now declare that floor explicitly. Upgrade the host runtime before using this lockfile. The platform target is a dependency-resolution floor, not a recommendation to run the original PHP 8.2.0 release.

```sh
composer validate --strict
composer install --no-interaction --prefer-dist
composer check-platform-reqs
vendor/bin/phpunit
php artisan view:cache
npm ci
npm run production
composer audit --locked
npm audit --include=dev
```

The test encryption key in `phpunit.xml` is public test-only data, not a deployment secret. Production still requires its own `APP_KEY`.

## Changes and compatibility

- Refresh both lockfiles. PHP examples: Laravel 8.83.29, Livewire 2.12.8, Guzzle 7.16.1, CommonMark 2.10.7 and PHPUnit 9.6.38. Composer selected these within the existing package constraints.
- Upgrade Axios to 1.21 and postcss-import to 17 for security fixes. The existing Axios bootstrap API and PostCSS imports still build successfully.
- Remove unused `@tailwindcss/ui`, `cross-env`, `resolve-url-loader` and `vue-template-compiler`. The UI package's Tailwind 1 peer constraint conflicted with this app's Tailwind 2 configuration.
- Pin Webpack 5.105.4 because newer Webpack removes `webpack/lib/SizeFormatHelpers`, which Mix 6 imports. Constrain schema-utils 4 to 4.7.0 because 4.8 requires Webpack 5.112. These are compatibility pins, not security exceptions.
- Keep the existing `lightBlue` utility names while reading Tailwind's renamed `sky` palette.
- Rebuild the checked-in browser assets so the deployed JavaScript receives the updated Axios and Lodash code.
- Add homepage and authentication-page smoke coverage and CI for reproducible installs, tests, builds and visible audits.
- Align the existing Sail container with PHP 8.2 and Node 24. Rebuild the local container with `vendor/bin/sail build --no-cache` before starting it with the refreshed lockfile. The Docker image itself was not built during this update.

## Remaining security work

Audits on 2026-11-04:

| Audit | Before | After |
| --- | ---: | ---: |
| Composer advisories | 52 across 15 packages | 6 across 2 packages |
| npm affected packages | 113 (10 critical, 48 high) | 19 (0 critical, 2 high, 12 moderate, 5 low) |

The six PHP findings are five Laravel framework advisories (TokenGuard authentication bypass, debug-page XSS, temporary signed URL path confusion, email validation CRLF injection and file validation bypass) and one Flysystem 1 malformed UTF-8 path-normalization advisory. Laravel 8 has no advisory-free version; the TokenGuard finding is rated critical. Do not interpret passing smoke tests as resolution of these security findings.

The npm findings remain in the Mix/Tailwind build toolchain, including webpack-dev-server and webpack-dev-middleware (high), minimatch/glob, uuid and elliptic. Avoid exposing the development/HMR server. No incompatible transitive overrides or audit ignores were added to conceal these findings.

Composer's resolver blocks all Laravel 8 versions by default. This compatible lockfile refresh used a one-time `composer update --no-blocking`; no blocking policy was disabled in the repository. Normal installs use the committed lockfile. Both CI audit steps intentionally remain failing while these findings remain.

Removing the remaining advisories requires a separately reviewed framework/build-tool migration or retirement of these dependencies. A Laravel 8-to-12 migration was not performed. `fruitcake/laravel-cors` and `swiftmailer/swiftmailer` also remain abandoned dependencies. Composer reports pre-existing invalid dotted component class names under `app/View/Components`; those unused classes are skipped by its optimized autoloader.

The Cloudflare conversion is a separate follow-up after this dependency PR merges. No hosting behavior changes are included here.
