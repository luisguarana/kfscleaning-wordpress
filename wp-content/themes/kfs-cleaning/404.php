<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main-content" class="kfs-404">
	<div class="wrap">
		<h1 class="notice-title">Page not found</h1>
		<p class="notice-body">This page may have moved, or the link has a typo. Start again from the homepage, or ask for your free quote.</p>
		<div class="hero-btns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">Back to the homepage</a>
			<a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn-ghost">Get a Free Quote</a>
		</div>
	</div>
</main>

<?php get_footer(); ?>
