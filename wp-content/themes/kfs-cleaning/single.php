<?php if (!defined('ABSPATH')) exit; get_header(); ?>

<main id="main-content">
<article <?php post_class(); ?>>

  <section class="article-hero">
    <div class="wrap">
      <div class="article-hero-inner">
		  
        <?php if ( function_exists( 'rank_math_the_breadcrumbs' ) ) : ?>
  <div class="breadcrumb">
    <?php rank_math_the_breadcrumbs(); ?>
  </div>
<?php endif; ?>
		  
        <div class="blog-meta">
          <span class="blog-tag"><?php $cats = get_the_category(); echo $cats ? esc_html($cats[0]->name) : 'Cleaning Tips'; ?></span>
          <span><?php echo get_the_date(); ?></span>
          <span><?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</span>
        </div>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </section>

  <div class="article-body">
    <div class="wrap">
      <div class="article-inner">
        <?php the_content(); ?>

        <div class="art-cta" style="margin-top:48px;">
          <h3>Ready for a Spotless Home or Office?</h3>
          <p>Serving Massachusetts &amp; New Hampshire. Licensed, insured, and satisfaction guaranteed.</p>
          <a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="btn-primary">Get a Free Quote</a>
        </div>

        <div style="margin-top:48px;padding-top:32px;border-top:1px solid var(--border-dim);">
          <div style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;">
            <div><?php previous_post_link('<span style="color:var(--text-muted);font-size:13px;">Previous post</span><br>%link'); ?></div>
            <div style="text-align:right;"><?php next_post_link('<span style="color:var(--text-muted);font-size:13px;">Next post</span><br>%link'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</article>
</main>

<?php get_footer(); ?>
