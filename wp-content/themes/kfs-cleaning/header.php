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
<?php
// Real Google rating as last synced by the Trustindex reviews plugin; omitted if unavailable.
$kfs_reviews = get_option( 'trustindex-google-page-details' );
if ( is_array( $kfs_reviews ) && ! empty( $kfs_reviews['rating_number'] ) ) : ?>
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo esc_js( number_format( (float) $kfs_reviews['rating_score'], 1 ) ); ?>",
    "reviewCount": "<?php echo (int) $kfs_reviews['rating_number']; ?>"
  },
<?php endif; ?>
  "image": "<?php echo esc_js( $og_image ); ?>"
}
</script>
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class( is_front_page() ? 'kfs-home' : '' ); ?> id="top">
<a href="#main-content" class="skip-link">Skip to content</a>

<header class="site-header" id="site-header">
	<div class="wrap nav-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-brand" aria-label="KFS Cleaning Services - homepage">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/kfs-logo-trim.png' ); ?>" alt="" class="nav-logo-img" width="178" height="162">
			<span class="brand-name">KFS Cleaning<small>Massachusetts &amp; New Hampshire</small></span>
		</a>
		<nav class="section-nav" aria-label="Main navigation">
			<div class="nav-dropdown">
				<a href="<?php echo esc_url( kfs_section_url( 'services' ) ); ?>" class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">Services <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg></a>
				<div class="dropdown-menu">
					<a href="<?php echo esc_url(home_url('/regular-house-cleaning/')); ?>">Regular Home Cleaning</a>
					<a href="<?php echo esc_url(home_url('/deep-cleaning/')); ?>">Deep Cleaning</a>
					<a href="<?php echo esc_url(home_url('/move-out-cleaning/')); ?>">Move-In / Move-Out</a>
					<a href="<?php echo esc_url(home_url('/commercial-cleaning/')); ?>">Commercial &amp; Office</a>
					<a href="<?php echo esc_url(home_url('/post-construction-cleaning/')); ?>">Post-Construction</a>
					<a href="<?php echo esc_url(home_url('/airbnb-cleaning/')); ?>">Airbnb &amp; Rental Turnover</a>
				</div>
			</div>
			<a href="<?php echo esc_url( kfs_section_url( 'reviews' ) ); ?>">Reviews</a>
			<a href="<?php echo esc_url( kfs_section_url( 'gallery' ) ); ?>">Our Work</a>
			<a href="<?php echo esc_url( kfs_section_url( 'areas' ) ); ?>">Towns</a>
			<a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
		</nav>
		<div class="nav-right">
			<a href="tel:+19782199787" class="nav-phone">(978) 219-9787</a>
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
		<a href="<?php echo esc_url(home_url('/airbnb-cleaning/')); ?>">Airbnb &amp; Rental Turnover</a>
		<a href="<?php echo esc_url( kfs_section_url( 'reviews' ) ); ?>">Reviews</a>
		<a href="<?php echo esc_url( kfs_section_url( 'gallery' ) ); ?>">Our Work</a>
		<a href="<?php echo esc_url( kfs_section_url( 'areas' ) ); ?>">Towns We Serve</a>
		<a href="<?php echo esc_url( kfs_section_url( 'faq' ) ); ?>">FAQ</a>
		<a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
		<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="mobile-cta">Get a Free Quote</a>
	</div>
</header>

<!-- Phone: call / quote within thumb reach -->
<div class="action-bar">
	<a href="tel:+19782199787" class="ab-call">Call</a>
	<a href="sms:+19782199787" class="ab-call">Text</a>
	<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="ab-quote">Get a Free Quote</a>
</div>
<?php if ( isset( $_GET['thanks'] ) && $_GET['thanks'] === '1' ) : ?>
<div class="thanks-banner" role="status">
	<span>Thanks! Your quote request was sent. We&rsquo;ll be in touch within 24 hours.</span>
	<button type="button" class="thanks-close" aria-label="Dismiss message"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="square" aria-hidden="true"><path d="M5 5l14 14M19 5L5 19"/></svg></button>
</div>
<?php endif; ?>
