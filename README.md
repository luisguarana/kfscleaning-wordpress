# KFS Cleaning Services — kfscleaning.com

Custom code for the KFS Cleaning WordPress site, pulled from the live
Hostinger server on 2026-10-20. This repo is the source of truth for the
site's *custom* code only.

## What's in here

- `wp-content/themes/kfs-cleaning/` — the site's custom theme (active theme):
  front page, service page templates (regular / deep / move-out / Airbnb /
  commercial / post-construction), header, footer, CSS/JS and image assets.
- `calculator/` — standalone cleaning-price calculator page (static HTML).
- `.htaccess` — server rules for the site root.
- `llms.txt` — AI-crawler info file served at kfscleaning.com/llms.txt.

## What's NOT in here (on purpose)

- WordPress core (`wp-admin/`, `wp-includes/`, root `wp-*.php`) — download
  from wordpress.org; the live site's version is recorded in the backup bundle.
- Plugins and stock themes (twentytwentythree/four/five) — all are free and
  re-installable from wordpress.org / Hostinger; the exact installed list with
  versions and active status is in `PLUGIN-VERSIONS.txt` in the backup bundle
  kept with the database export (not in git, to avoid publishing a version
  fingerprint of the live site).
- `wp-config.php` — contains database credentials. Never commit it.
- `wp-content/uploads/` — media library; covered by the full backup bundle.
- The database (pages, posts, settings, form entries) — exported separately
  as SQL in the backup bundle.

## Restoring / running locally

1. Install WordPress locally (e.g. LocalWP) or on a server.
2. Copy `wp-content/themes/kfs-cleaning/` into `wp-content/themes/` and
   activate the **kfs-cleaning** theme.
3. Install the plugins listed in the backup bundle's `PLUGIN-VERSIONS.txt`
   and activate the ones marked active.
4. Import the database SQL from the backup bundle, copy `wp-content/uploads/`
   from the bundle, and drop in a `wp-config.php` for the local database.
5. Copy `calculator/`, `.htaccess` and `llms.txt` to the site root.

## Workflow

Edit locally -> commit -> push to GitHub -> pull/deploy on Hostinger.
Do not edit files directly on the live server without committing them here,
or this repo stops matching the live site.
