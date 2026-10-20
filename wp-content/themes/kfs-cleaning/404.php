<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main id="main-content" class="kfs-404" style="padding:120px 0;text-align:center;min-height:60vh;display:flex;align-items:center;">
	<div class="wrap">
		<div style="font-size:6rem;margin-bottom:16px;" aria-hidden="true">🧹</div>
		<h1 style="font-family:'Space Grotesk',sans-serif;font-size:clamp(2rem,5vw,3.5rem);color:var(--white);margin-bottom:16px;">
			404 &mdash; Page Not Found
		</h1>
		<p style="color:rgba(255,255,255,.7);font-size:1.1rem;max-width:500px;margin:0 auto 32px;">
			Looks like this page got swept away. Let&rsquo;s get you back to a clean start.
		</p>
		<div class="hero-btns" style="justify-content:center;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">&larr; Back to Homepage</a>
			<a href="<?php echo esc_url( home_url( '/#quote' ) ); ?>" class="btn-ghost">Get a Free Quote</a>
		</div>
	</div>
</main>
<?php get_footer(); ?>
