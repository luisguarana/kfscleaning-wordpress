<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<style>
.blog-list-section{
  padding:80px 0 96px;
}

.blog-grid{
  display:grid;
  grid-template-columns:repeat(3,minmax(0,1fr));
  gap:32px;
  align-items:stretch;
}

.blog-card{
  display:flex;
  flex-direction:column;
  background:var(--navy-card, #0d1727);
  border:1px solid rgba(0,200,232,.14);
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 18px 40px rgba(0,0,0,.22);
  transition:transform .25s ease,border-color .25s ease,box-shadow .25s ease;
}

.blog-card:hover{
  transform:translateY(-4px);
  border-color:rgba(0,200,232,.35);
  box-shadow:0 24px 48px rgba(0,0,0,.28);
}

.blog-card-image,
.blog-card-image img{
  display:block;
  width:100%;
}

.blog-card-image img{
  height:220px;
  object-fit:cover;
}

.blog-card-body{
  display:flex;
  flex-direction:column;
  gap:14px;
  padding:22px 22px 24px;
}

.blog-card-tag{
  display:inline-flex;
  align-items:center;
  width:max-content;
  padding:6px 12px;
  border-radius:999px;
  background:rgba(0,200,232,.10);
  border:1px solid rgba(0,200,232,.24);
  color:var(--cyan, #00C8E8);
  font-size:12px;
  font-weight:700;
  letter-spacing:.04em;
  text-transform:uppercase;
}

.blog-card-title{
  margin:0;
  font-size:26px;
  line-height:1.2;
  letter-spacing:-.02em;
}

.blog-card-title a{
  color:#fff;
  text-decoration:none;
}

.blog-card-title a:hover{
  color:var(--cyan, #00C8E8);
}

.blog-card-excerpt{
  margin:0;
  color:var(--text-muted, rgba(255,255,255,.72));
  font-size:15px;
  line-height:1.75;
}

.blog-card-meta{
  margin-top:auto;
  color:rgba(255,255,255,.55);
  font-size:13px;
  line-height:1.5;
  padding-top:4px;
}

.blog-card-link{
  display:inline-flex;
  align-items:center;
  gap:8px;
  margin-top:4px;
  color:var(--cyan, #00C8E8);
  font-weight:700;
  text-decoration:none;
}

.blog-card-link:hover{
  color:#fff;
}

.blog-pagination .page-numbers{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  min-width:44px;
  height:44px;
  padding:0 14px;
  margin:0 4px;
  border-radius:999px;
  border:1px solid rgba(0,200,232,.18);
  background:rgba(255,255,255,.03);
  color:#fff;
  text-decoration:none;
}

.blog-pagination .page-numbers.current,
.blog-pagination .page-numbers:hover{
  background:rgba(0,200,232,.14);
  border-color:rgba(0,200,232,.4);
  color:var(--cyan, #00C8E8);
}

@media (max-width: 1100px){
  .blog-grid{
    grid-template-columns:repeat(2,minmax(0,1fr));
  }
}

@media (max-width: 700px){
  .blog-grid{
    grid-template-columns:1fr;
    gap:24px;
  }

  .blog-card-title{
    font-size:22px;
  }

  .blog-card-body{
    padding:20px;
  }
}
</style>

<section class="page-hero">
  <div class="wrap page-hero-inner">

    <?php if ( function_exists( 'rank_math_the_breadcrumbs' ) && ! is_front_page() ) : ?>
      <div class="breadcrumb">
        <?php rank_math_the_breadcrumbs(); ?>
      </div>
    <?php endif; ?>

    <p class="eyebrow">KFS Cleaning Blog</p>
    <h1>Cleaning Tips, Guides &amp; Local Advice</h1>
    <p style="color:var(--text-muted);font-size:18px;max-width:600px;margin-top:16px;">
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
              <a href="<?php the_permalink(); ?>" class="blog-card-image">
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

              <a href="<?php the_permalink(); ?>" class="blog-card-link">Read More →</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div style="margin-top:48px;text-align:center;">
        <?php the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => '← Newer',
          'next_text' => 'Older →',
        )); ?>
      </div>
    <?php else : ?>
      <div style="text-align:center;padding:80px 0;">
        <h2>No posts yet</h2>
        <p style="color:var(--text-muted);margin-top:12px;">Check back soon — we post cleaning tips and local guides regularly.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary" style="margin-top:28px;display:inline-flex;">← Back to Home</a>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>