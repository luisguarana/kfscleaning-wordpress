# KFS Cleaning Services — kfscleaning.com (agent brief)

This file exists as both CLAUDE.md (Claude Code auto-loads it) and AGENTS.md
(Codex auto-loads it). Keep the two copies identical when editing.

## What this repo is

The custom code for the KFS Cleaning WordPress site (live on Hostinger).
It tracks ONLY custom code — a whitelist .gitignore ignores everything else:

- `wp-content/themes/kfs-cleaning/` — the active custom theme: front page,
  header/footer, service templates (regular house, deep, move-out, Airbnb,
  commercial, post-construction), blog templates, assets/css/main.css,
  assets/js/main.js, images.
- `calculator/` — standalone static pricing-calculator page.
- `.htaccess`, `llms.txt`, `README.md` — site-root files.

NOT in this repo (do not add them, do not expect them locally):
WordPress core, all plugins, stock themes, wp-content/uploads, the database.
All plugins are free/re-downloadable; exact versions + WP version are in
PLUGIN-VERSIONS.txt / WP-VERSION.txt in the server backup bundle (below).
Never commit: wp-config.php, *.sql, .private/ — the .gitignore hard-blocks
them; do not force-add.

## Live site map (Hostinger, one account — several sites, do not cross them)

- THIS site: ~/domains/kfscleaning.com/public_html  (kfscleaning.com)
- Novapura (DIFFERENT business): ~/domains/novapuralabs.com/public_html
- ~/public_html is a symlink to a Hostinger placeholder domain — never use it.
- Before ANY wp-cli or destructive command on the server: run `pwd` and
  confirm the path above, and `ls wp-content/themes/` must show `kfs-cleaning`.

## Access (from the owner's PC)

- `ssh kfscleaning` — logs in and lands in this site's docroot.
- `ssh novapura` / `ssh novapura-shell` — the OTHER site; not for this project.
- On the server, run wp-cli as:
  /opt/alt/php83/usr/bin/php /usr/local/bin/wp <command>

## Workflow / deploying

1. Work in the local clone of this repo; edit theme/calculator files there.
2. Commit small, clear commits; push to GitHub `main`
   (github.com/luisguarana/kfscleaning-wordpress, private).
3. Deploy = pull on the server, which IS a checkout of this repo in the
   docroot: `ssh kfscleaning` then `git pull`.
4. After deploying, load https://kfscleaning.com and verify the change live
   before reporting it done. Report what you verified, not what you assumed.
5. Do not edit files directly on the live server without committing them
   (from the server checkout) — server-only edits make the repo drift from
   the live site, which is the problem this repo was created to fix.

## Backups

- Full bundle (database SQL, complete files tarball, plugin/WP versions):
  ~/kfs-backups-2026-10-20/ on the server, OUTSIDE the docroot.
- Before risky changes, make a fresh bundle the same way (wp db export +
  tar of the docroot, .git excluded) into a new dated folder outside the
  docroot. Never put backup files inside the docroot — they get served.

## Owner preferences

- Short structured reports: what changed, how it was verified, what's open.
- Bold the important parts; skip long prose.
- Ask before anything irreversible or money-related.
