<?php
/**
 * Template Name: Home
 */
the_post() ?>

<main id="content" role="main" class="main">
  <?php if(get_the_content()) : ?>
    <?php get_template_part('partials/banner', 'page') ?>
  <?php endif ?>

  <section class="image-features row">
    <ul class="small-block-grid-1 medium-block-grid-3">

      <?php for($img=1; $img<=3; $img++): ?>

        <?php
          // Pass the $img variable into the partial
          set_query_var( 'img', $img );
          get_template_part( 'partials/image', 'feature' );
        ?>

      <?php endfor; ?>

    </ul>
  </section>

  <section class="news-posts row">

    <div class="posts medium-8 columns">
      <header>
        <h2><?php _e('News', 'govsite') ?></h2>
      </header>

      <?php $news = new WP_Query( array ('posts_per_page' => 4) ); ?>

      <?php if( $news->have_posts()) : while ($news->have_posts()) : $news->the_post() ?>

        <?php if (is_sticky()) : ?>
          <?php get_template_part('partials/loop', 'featured-news') ?>
        <?php else : ?>
          <?php get_template_part('partials/loop', 'news') ?>
        <?php endif ?>

      <?php endwhile; endif; ?>

      <?php wp_reset_query() ?>

      <?php if (get_field('news_page_url')) : ?>
        <a href="<?php the_field('news_page_url') ?>" class="button"><?php _e('More news', 'govsite') ?></a>
      <?php endif ?>
    </div>

    <?php if (get_field('banner_title')) : ?>
      <?php get_template_part('partials/banner', 'sidebar') ?>
    <?php endif ?>

  </section>

</main>
