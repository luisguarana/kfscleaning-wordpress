KFS Cleaning Services — WordPress Theme v9
==========================================
Dark-navy professional theme · Service pages · Blog · Services dropdown navigation

Last updated: 2026-06-05


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 1 — INSTALLATION
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Step 1: Upload the Theme
  - Log in to WordPress admin: yoursite.com/wp-admin
  - Go to: Appearance → Themes → Add New → Upload Theme
  - Select the kfs-cleaning.zip file
  - Click "Install Now" → then "Activate"

Step 2: Set Your Homepage
  - Go to: Settings → Reading
  - Under "Your homepage displays" select "A static page"
  - Set "Homepage" to "Home" (create a blank Page with title "Home" if it doesn't exist)
  - Set "Posts page" to "Blog" (create a blank Page with title "Blog" — see Step 4)
  - Click Save Changes

Step 3: Create Service Pages (slugs must match EXACTLY)
  - Go to: Pages → Add New for each service below
  - Set the title and permalink (slug) exactly as shown
  - Leave the page CONTENT BLANK — the theme fills it automatically
  - Click Publish

  Page Title              | Slug (URL)
  ------------------------|-----------------------------
  Regular House Cleaning  | regular-house-cleaning
  Deep Cleaning           | deep-cleaning
  Move-In / Move-Out      | move-out-cleaning
  Commercial Cleaning     | commercial-cleaning
  Airbnb Cleaning         | airbnb-cleaning
  Post-Construction       | post-construction-cleaning

  HOW TO SET THE SLUG:
  In the block editor: click the ⚙ (Settings) gear → "Page" tab → scroll to "Permalink"
  Type the slug from the table above. Do not add slashes or spaces.

Step 4: Create the Blog Page
  - Go to: Pages → Add New
  - Title: Blog  |  Slug: blog
  - Leave content blank
  - Publish it
  - Then go to Settings → Reading and set it as your "Posts page"

Step 5: Set Permalinks
  - Go to: Settings → Permalinks
  - Select "Post name" ( /%postname%/ )
  - Click Save Changes
  - This makes URLs like /deep-cleaning/ instead of /?p=5

Step 6: Test Everything
  - Visit your homepage — Services dropdown should show all 6 links
  - Click each service link — should load the correct service page
  - Click Blog — should show your blog posts
  - Submit the quote form — you should get an email from FormSubmit.co
    (first submission triggers a confirmation email — confirm it once)


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 2 — HOW TO EDIT THE FRONT PAGE (Homepage)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

The homepage is controlled by: front-page.php
Location: wp-content/themes/kfs-cleaning/front-page.php

TO EDIT HOMEPAGE CONTENT, go to: Appearance → Theme Editor → front-page.php
(Or use FTP / cPanel File Manager to edit the file directly)

WHAT YOU CAN CHANGE AND WHERE:

1. Hero Text (headline, subtitle, button text)
   - Search for: "Professional Cleaning,"
   - Edit the <h1> and <p class="hero-body"> text
   - Edit the "Get a Free Quote" and "View Our Services" button text in the hero-btns div

2. Service Cards (title, description for each of the 6 services)
   - Find the $kfs_services array near the top of front-page.php
   - Each entry has: 'title', 'desc', 'slug'
   - Change 'title' and 'desc' — do NOT change 'slug' (it links to the page)

3. Testimonials / Reviews
   - Find: $kfs_testimonials array
   - Each entry has: 'text', 'name', 'location', 'initials'
   - Add, remove, or edit any review

4. FAQ Questions & Answers
   - Find: $kfs_faq array
   - Each entry has: 'q' (question) and 'a' (answer)
   - Add, remove, or edit freely

5. Service Areas (town lists)
   - Search for: "Andover</span><span>Lawrence"
   - Edit the <span>Town Name</span> entries in the two area cards

6. Gallery Images
   - Find: $kfs_gallery array
   - Change the 'src' paths to point to real photos in your Media Library
   - Upload your real photos via: Media → Add New
   - Right-click an uploaded image → "Copy Image URL" — paste that URL into the src

7. Contact Info (phone, email)
   - Search for: "(978) 219-9787"
   - Replace all occurrences with your phone number
   - Search for: "support@kfscleaning.com"
   - Replace all occurrences with your email

8. Quote Form Email Destination
   - The form goes to FormSubmit.co which emails support@kfscleaning.com
   - To change the email: search for "formsubmit.co/support@kfscleaning.com"
   - Replace "support@kfscleaning.com" with your new email
   - The same FormSubmit address appears on every service page too


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 3 — HOW TO EDIT SERVICE PAGES
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Each service page is a PHP template file in your theme folder:

  Service                | File to edit
  -----------------------|------------------------------------------
  Regular Home Cleaning  | page-regular-house-cleaning.php
  Deep Cleaning          | page-deep-cleaning.php
  Move-In / Move-Out     | page-move-out-cleaning.php
  Commercial & Office    | page-commercial-cleaning.php
  Airbnb Turnover        | page-airbnb-cleaning.php
  Post-Construction      | page-post-construction-cleaning.php

To edit: Appearance → Theme Editor → select the file from the right-hand list
OR use cPanel File Manager → navigate to wp-content/themes/kfs-cleaning/

WHAT YOU CAN CHANGE:

1. Page Hero (headline, subtitle, pills)
   - Find: <section class="page-hero">
   - Edit the <h1>, <p class="page-hero-sub">, and the <span class="pill"> badges

2. What's Included checklist
   - Find: <div class="inc-list">
   - Edit or add <div class="inc-item"> entries

3. FAQ on the service page
   - Find: <div class="faq-list">
   - Edit the questions and answers in each .faq-item

4. Gallery Images (per service page)
   - Find: $svc_imgs array
   - Change the placeholder-X.jpg paths to real photo URLs
   - Real photo URL format: get_template_directory_uri().'/assets/images/gallery/your-photo.jpg'
   - OR use a full URL from WordPress media: 'https://kfscleaning.com/wp-content/uploads/...'

5. Pricing Info
   - On move-out and post-construction pages there is a .price-band section
   - Search for the dollar amounts and update them

6. Quote Form — To change the recipient email
   - Search for: "formsubmit.co/support@kfscleaning.com"
   - Change the email address after "formsubmit.co/"


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 4 — NAVIGATION MENU
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

IMPORTANT: Why "Create Menu" in WordPress Does Nothing
-------------------------------------------------------
The navigation in this theme is hardcoded directly in header.php for performance
and design control. WordPress's Appearance → Menus builder is NOT connected to the
nav bar. Creating a menu there will have no visual effect on the site.

TO ADD, REMOVE, OR REORDER NAV ITEMS:
  - Go to: Appearance → Theme Editor → header.php
  - Find the <nav class="nav-links"> section
  - The nav items are plain <a href="..."> links — edit them directly

TO CHANGE THE SERVICES DROPDOWN items:
  - In header.php, find: <div class="nav-dropdown">
  - The dropdown links are inside <div class="dropdown-menu">
  - Add or remove <a href="..."> links there

TO ADD A NEW TOP-LEVEL NAV LINK (e.g. "Pricing"):
  - In header.php, after the closing </div> for the .nav-dropdown block, add:
    <a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a>

TO ALSO UPDATE THE MOBILE MENU:
  - In the same header.php file, find: <div class="mobile-menu">
  - The mobile menu has its own separate list of links — update it there too
  - Any link you add to the desktop nav should also be added here

MOBILE MENU ITEMS (in header.php, look for id="mobile-menu"):
  - The mobile menu lists all service links individually (no dropdown on mobile)
  - Add new pages the same way: <a href="url">Page Name</a>


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 5 — BLOG SETUP & POSTING
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Setup (must do this once):
  1. Create a Page: title "Blog", slug "blog"
  2. Go to Settings → Reading → set "Posts page" to Blog
  3. Make sure Settings → Permalinks is set to "Post name"

Adding Blog Posts:
  - Go to: Posts → Add New
  - Write your title and content
  - Add a Featured Image (click "Set Featured Image" in the right sidebar)
  - Assign a Category (e.g. "Cleaning Tips", "Before/After")
  - Click Publish
  - The post automatically appears on /blog/

Editing the Blog Page Layout:
  - Blog listing → controlled by: archive.php
  - Single post page → controlled by: single.php
  - Both are in your theme folder: Appearance → Theme Editor

Why Blog Button Wasn't Working:
  - The Blog link in the nav goes to yoursite.com/blog/
  - If Settings → Reading is not set up (Step 4 above), WordPress shows a 404
  - Once the Blog page exists AND Reading is configured, the link works


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 6 — REPLACING GALLERY PHOTOS
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Current gallery uses placeholder images. Here's how to replace them:

Option A — Replace the files directly (simplest):
  1. Upload your real photos via: Media → Add New
  2. Name them: placeholder-1.jpg through placeholder-6.jpg
  3. Go to: cPanel → File Manager → wp-content/themes/kfs-cleaning/assets/images/gallery/
  4. Delete the old placeholder files, upload your new ones with the same filenames
  5. The gallery updates automatically on all pages

Option B — Update the PHP arrays:
  1. In front-page.php, find $kfs_gallery array
  2. Change the 'src' values to full URLs from your WordPress media library
  3. On each service page, find $svc_imgs array and update the same way
  4. Get the URL: Media → Library → click image → copy "File URL"

Recommended photo size: 800×600px minimum, under 300KB each


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 7 — HOW TO UPDATE THE SITE AFTER CHANGES
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

METHOD 1 — Theme Editor (for small text changes, easiest)
  - WordPress admin → Appearance → Theme Editor
  - Select the file you want to edit from the right-hand list
  - Make your changes in the editor
  - Click "Update File"
  - Changes are LIVE immediately — no zip needed

  ⚠ Warning: Theme Editor shows a caution warning. That's normal. If you
  break something, you can undo by re-uploading the theme zip.

METHOD 2 — Edit files locally + re-upload (recommended for bigger changes)
  1. Make your changes to the PHP/CSS/JS files on your computer
  2. Re-zip the kfs-cleaning folder: right-click → Send to → Compressed folder
  3. WordPress admin → Appearance → Themes → Add New → Upload Theme
  4. Upload the new zip → it asks "Replace current with uploaded?" → click Yes
  5. Activate the updated theme

METHOD 3 — FTP / cPanel (for individual file changes)
  1. Log in to your hosting control panel (cPanel)
  2. Go to File Manager → wp-content → themes → kfs-cleaning
  3. Right-click a file → Edit to edit it directly on the server
  4. Or upload the changed file from your computer to replace it
  5. Changes are live immediately

WHICH METHOD TO USE:
  - Changing a headline or phone number → Theme Editor (Method 1)
  - Updating one PHP file → FTP / cPanel (Method 3)
  - Applying a batch of changes from a new zip → Method 2
  - After using Claude to build updates → Method 2 (re-upload the zip)


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PART 8 — RECOMMENDED PLUGINS
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

  Plugin              | Purpose                    | Cost
  --------------------|----------------------------|------
  Yoast SEO           | Meta descriptions, sitemap | Free
  UpdraftPlus         | Automatic backups          | Free
  W3 Total Cache      | Site speed / caching       | Free
  WP Rocket           | Better speed (optional)    | $59/yr
  AI Power            | Auto-publish daily blogs   | ~$15/mo


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
DESIGN REFERENCE
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Colors:
  Primary navy:  #060e1c
  Accent cyan:   #00C8E8
  Card navy:     #0d1727

Fonts:
  Headings: Space Grotesk 700 (loaded from Google Fonts)
  Body:     Inter 400/500/600/700 (loaded from Google Fonts)

CSS Variables (used throughout the theme):
  --navy, --navy-card, --navy-mid
  --cyan, --cyan-dark
  --white, --text-muted, --text-body
  --border, --radius, --radius-lg


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
SUPPORT
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Theme built for KFS Cleaning Services.
Phone: (978) 219-9787
Email: support@kfscleaning.com
