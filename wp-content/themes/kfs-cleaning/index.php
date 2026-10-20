<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main-content" class="kfs-fallback">
	<div class="wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1 class="notice-title"><?php the_title(); ?></h1>
		<div class="article-inner"><?php the_content(); ?></div>
		<?php endwhile; endif; ?>
		<?php if ( ! have_posts() ) : ?>
		<h1 class="notice-title">Welcome to KFS Cleaning Services</h1>
		<p class="notice-body">
			Please go to <strong>Settings &rarr; Reading</strong> and set <em>Your homepage displays</em> to <strong>A static page</strong>, then select your homepage.
		</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">Return Home</a>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
