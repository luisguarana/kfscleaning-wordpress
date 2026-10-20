<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<main id="main-content">

<section class="page-hero">
  <div class="wrap page-hero-inner">

    <?php if ( function_exists( 'rank_math_the_breadcrumbs' ) ) : ?>
      <div class="breadcrumb">
        <?php rank_math_the_breadcrumbs(); ?>
      </div>
    <?php endif; ?>

    <p class="eyebrow">KFS Cleaning Blog</p>
    <h1>Cleaning Tips, Guides &amp; Local Advice</h1>
    <p class="page-hero-lead">
      Expert advice for homeowners, renters, and businesses across Massachusetts &amp; New Hampshire.
    </p>
  </div>
</section>

<section class="blog-list-section">
  <div class="wrap">
    <?php if (have_posts()) : ?>
      <div class="blog-grid">
        <?php while (have_posts()) : the_post(); ?>
          <article class="blog-card reveal">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" class="blog-card-image" tabindex="-1" aria-hidden="true">
                <?php the_post_thumbnail('medium_large'); ?>
              </a>
            <?php endif; ?>

            <div class="blog-card-body">
              <span class="blog-card-tag">
                <?php $cats = get_the_category(); echo $cats ? esc_html($cats[0]->name) : 'Cleaning Tips'; ?>
              </span>

              <h2 class="blog-card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <p class="blog-card-excerpt">
                <?php echo wp_trim_words(get_the_excerpt(), 24); ?>
              </p>

              <div class="blog-card-meta">
                <?php echo get_the_date(); ?> &middot; <?php echo ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200); ?> min read
              </div>

              <span class="blog-card-link" aria-hidden="true">Read More →</span>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <?php the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => '← Newer',
        'next_text' => 'Older →',
      )); ?>
    <?php else : ?>
      <div class="blog-empty">
        <h2>No posts yet</h2>
        <p>Check back soon — we post cleaning tips and local guides regularly.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">← Back to Home</a>
      </div>
    <?php endif; ?>
  </div>
</section>

</main>

<?php get_footer(); ?>