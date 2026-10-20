<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="kfs-404" style="padding:120px 0;text-align:center;min-height:60vh;display:flex;align-items:center;">
	<div class="wrap">
		<div style="font-size:6rem;margin-bottom:16px;">🧹</div>
		<h1 style="font-family:'Space Grotesk',sans-serif;font-size:clamp(2rem,5vw,3.5rem);color:var(--white);margin-bottom:16px;">
			404 &mdash; Page Not Found
		</h1>
		<p style="color:rgba(255,255,255,.7);font-size:1.1rem;max-width:500px;margin:0 auto 32px;">
			Looks like this page got swept away. Let&rsquo;s get you back to a clean start.
		</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:inline-block;background:linear-gradient(135deg,#00C8E8,#0099bb);color:#060e1c;padding:14px 32px;border-radius:50px;font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:1rem;text-decoration:none;">
			&larr; Back to Homepage
		</a>
	</div>
</main>
<?php get_footer(); ?>
