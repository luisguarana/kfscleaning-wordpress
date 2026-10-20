<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<?php echo '<!-- HOME TEMPLATE LOADED -->'; ?>
<main class="kfs-fallback">
	<div class="wrap" style="padding:100px 0;text-align:center;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1 style="color:var(--white);font-size:2rem;margin-bottom:16px;"><?php the_title(); ?></h1>
		<div style="color:rgba(255,255,255,.75);max-width:700px;margin:0 auto;"><?php the_content(); ?></div>
		<?php endwhile; endif; ?>
		<?php if ( ! have_posts() ) : ?>
		<h1 style="color:var(--white);font-size:2rem;margin-bottom:16px;">Welcome to KFS Cleaning Services</h1>
		<p style="color:rgba(255,255,255,.75);margin-bottom:24px;">
			Please go to <strong>Settings &rarr; Reading</strong> and set <em>Your homepage displays</em> to <strong>A static page</strong>, then select your homepage.
		</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary" style="display:inline-block;background:#00C8E8;color:#060e1c;padding:14px 28px;border-radius:50px;font-weight:700;text-decoration:none;">Return Home</a>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
