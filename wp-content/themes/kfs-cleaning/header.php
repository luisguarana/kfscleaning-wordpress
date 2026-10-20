<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.png' ); ?>">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apple-touch-icon.png' ); ?>">
<?php
// Only output SEO meta tags if no SEO plugin is active
if ( ! defined( 'WPSEO_VERSION' ) && ! defined( 'RANK_MATH_VERSION' ) && ! defined( 'AIOSEO_VERSION' ) && ! defined( 'SEOPRESS_VERSION' ) ) :
	$site_url   = esc_url( home_url( '/' ) );
	$og_image   = esc_url( get_template_directory_uri() . '/assets/images/og-image.jpg' );
	$meta_title = 'KFS Cleaning Services | Residential &amp; Commercial Cleaning MA &amp; NH';
	$meta_desc  = 'Professional residential and commercial cleaning services in Massachusetts and New Hampshire. Licensed, insured, and satisfaction guaranteed. Get a free quote today!';
?>
<title><?php echo esc_html( $meta_title ); ?></title>
<meta name="description" content="<?php echo esc_attr( $meta_desc ); ?>">
<meta name="robots" content="index, follow">
<meta name="geo.region" content="US-MA">
<!-- Open Graph -->
<meta property="og:title" content="<?php echo esc_attr( $meta_title ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $meta_desc ); ?>">
<meta property="og:image" content="<?php echo $og_image; ?>">
<meta property="og:url" content="<?php echo $site_url; ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="KFS Cleaning Services">
<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $meta_title ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $meta_desc ); ?>">
<meta name="twitter:image" content="<?php echo $og_image; ?>">
<!-- LocalBusiness + CleaningService JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "KFS Cleaning Services",
  "description": "<?php echo esc_js( $meta_desc ); ?>",
  "url": "<?php echo esc_js( home_url( '/' ) ); ?>",
  "telephone": "+19782199787",
  "email": "support@kfscleaning.com",
  "priceRange": "$$",
  "areaServed": [
    { "@type": "State", "name": "Massachusetts" },
    { "@type": "State", "name": "New Hampshire" }
  ],
  "address": {
    "@type": "PostalAddress",
    "addressRegion": "MA",
    "addressCountry": "US"
  },
  "openingHours": "Mo-Sa 08:00-18:00",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "200"
  },
  "image": "<?php echo esc_js( $og_image ); ?>"
}
</script>
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class( is_front_page() ? 'kfs-home' : '' ); ?> id="top">
<a href="#main-content" class="skip-link">Skip to content</a>

<!-- Floating Quote Button -->
<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="float-quote">
	<span class="fq-dot" aria-hidden="true"></span> Get a Free Quote
</a>

<!-- Top Bar -->
<div class="topbar">
	<div class="wrap topbar-inner">
		<a href="tel:+19782199787" class="tb-item">
			<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00C8E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
			(978) 219-9787
		</a>
		<span class="tb-sep" aria-hidden="true">&middot;</span>
		<a href="mailto:support@kfscleaning.com" class="tb-item">
			<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00C8E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
			support@kfscleaning.com
		</a>
		<span class="tb-sep" aria-hidden="true">&middot;</span>
		<span class="tb-item">
			<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00C8E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
			Serving Massachusetts &amp; New Hampshire
		</span>
	</div>
</div>

<!-- Navigation -->
<header class="site-header" id="site-header">
	<div class="wrap nav-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-brand" aria-label="KFS Cleaning Services - homepage">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/kfs-icon.png' ); ?>" alt="" class="nav-logo-img" width="59" height="54">
			<div class="nav-brand-text">
				<span class="nav-brand-name">KFS Cleaning</span>
				<span class="nav-brand-sub">Services</span>
			</div>
		</a>
		<nav class="nav-links" id="nav-links" aria-label="Main navigation">
			<div class="nav-dropdown">
				<a href="<?php echo esc_url( kfs_section_url( 'services' ) ); ?>" class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">Services <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg></a>
				<div class="dropdown-menu">
					<a href="<?php echo esc_url(home_url('/regular-house-cleaning/')); ?>">Regular Home Cleaning</a>
					<a href="<?php echo esc_url(home_url('/deep-cleaning/')); ?>">Deep Cleaning</a>
					<a href="<?php echo esc_url(home_url('/move-out-cleaning/')); ?>">Move-In / Move-Out</a>
					<a href="<?php echo esc_url(home_url('/commercial-cleaning/')); ?>">Commercial &amp; Office</a>
					<a href="<?php echo esc_url(home_url('/post-construction-cleaning/')); ?>">Post-Construction</a>
					<a href="<?php echo esc_url(home_url('/airbnb-cleaning/')); ?>">Airbnb / STR Turnover</a>
				</div>
			</div>
			<a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
			<a href="<?php echo esc_url( kfs_section_url( 'why' ) ); ?>">Why KFS</a>
			<a href="<?php echo esc_url( kfs_section_url( 'gallery' ) ); ?>">Gallery</a>
			<a href="<?php echo esc_url( kfs_section_url( 'areas' ) ); ?>">Service Area</a>
			<a href="<?php echo esc_url( kfs_section_url( 'reviews' ) ); ?>">Reviews</a>
			<a href="<?php echo esc_url( kfs_section_url( 'faq' ) ); ?>">FAQ</a>
		</nav>
		<div class="nav-right">
			<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="nav-cta">Get a Free Quote</a>
		</div>
		<button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
			<span></span><span></span><span></span>
		</button>
	</div>
	<!-- Mobile Menu -->
	<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
		<a href="<?php echo esc_url(home_url('/regular-house-cleaning/')); ?>">Regular Home Cleaning</a>
		<a href="<?php echo esc_url(home_url('/deep-cleaning/')); ?>">Deep Cleaning</a>
		<a href="<?php echo esc_url(home_url('/move-out-cleaning/')); ?>">Move-In / Move-Out</a>
		<a href="<?php echo esc_url(home_url('/commercial-cleaning/')); ?>">Commercial &amp; Office</a>
		<a href="<?php echo esc_url(home_url('/post-construction-cleaning/')); ?>">Post-Construction</a>
		<a href="<?php echo esc_url(home_url('/airbnb-cleaning/')); ?>">Airbnb / STR Turnover</a>
		<a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
		<a href="<?php echo esc_url( kfs_section_url( 'gallery' ) ); ?>">Gallery</a>
		<a href="<?php echo esc_url( kfs_section_url( 'reviews' ) ); ?>">Reviews</a>
		<a href="<?php echo esc_url( kfs_section_url( 'faq' ) ); ?>">FAQ</a>
		<a href="<?php echo esc_url( kfs_section_url( 'areas' ) ); ?>">Service Area</a>
		<a href="tel:+19782199787">Call (978) 219-9787</a>
		<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="mobile-cta">Get a Free Quote</a>
	</div>
</header>
<?php if ( isset( $_GET['thanks'] ) && $_GET['thanks'] === '1' ) : ?>
<div class="thanks-banner" role="status">
	<span>&#10003; Thanks! Your quote request was sent. We&rsquo;ll be in touch within 24 hours.</span>
	<button type="button" class="thanks-close" aria-label="Dismiss message">&times;</button>
</div>
<?php endif; ?>
