<?php
/* Template name: Campaign page */

the_post();
?>

<main id="content" role="main" class="main">

  <section class="campaign">

    <div class="row">

      <div class="large-12 columns">
        <header class="page-header">
          <h1><?php the_title(); ?></h1>
        </header>

        <div class="page-element">
          <div class="row">

            <div class="medium-8 columns">
              <?php if (get_field('show_video') == false ) : ?>
                <figure>
                  <?php the_post_thumbnail('large'); ?>
                </figure>
              <?php else : ?>
                <div class="flex-video">
                  <?php echo wp_oembed_get(get_field('featured_video_url')); ?>
                </div>
              <?php endif ?>
            </div>

            <div class="medium-4 columns">
              <article class="main-content">
                <?php the_content(); ?>
              </article>
            </div>

          </div>
        </div>

        <div class="page-element">
          <ul class="small-block-grid-1 medium-block-grid-2">
            <?php for( $i=1; $i<3; $i++ ) : ?>
              <?php set_query_var('idx', $i) ?>

              <li><?php get_template_part('partials/loop', 'image-block') ?></li>
            <?php endfor ?>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <?php get_template_part('partials/banner', 'bottom') ?>

</main>
