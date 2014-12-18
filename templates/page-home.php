<?php 
/* Template name: Homepage */

the_post(); 

?>

<?php
  $content = get_the_content();
  if(!empty($content)) { ?>

    <section class="page-intro banner">

      <div class="row">

        <div class="large-12 columns">

          <?php the_content(); ?>

          <?php if (get_field('main_button_url')) { ?>
            <a href="<?php the_field('main_button_url'); ?>" title="<?php the_field('main_button_description'); ?>" class="button-banner"><?php the_field('main_button_description'); ?></a>
          <?php } ?>

        </div>

      </div>

    </section>

<?php } ?>

<div class="row">

  <div class="large-12 columns">

    <?php if (get_field('image_1')) {

      $size = 'full';

    ?>

      <section class="page-element">

        <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3 featured">

          <li>
            <?php
              $image1 = get_field('image_1');
              $thumb1 = $image1['sizes'][ $size ];
            ?>
            <a class="image" href="<?php the_field('url_1'); ?>"><img class="th" src="<?php echo $thumb1; ?>" alt="<?php echo $image1['alt']; ?>"></a>
            <p><?php the_field('description_1'); ?> <a href="<?php the_field('url_1'); ?>">Read more &raquo;</a></p>
          </li>

          <li>
            <?php
              $image2 = get_field('image_2');
              $thumb2 = $image2['sizes'][ $size ];
            ?>
            <a class="image" href="<?php the_field('url_2'); ?>"><img class="th" src="<?php echo $thumb2; ?>" alt="<?php echo $image2['alt']; ?>"></a>
            <p><?php the_field('description_2'); ?> <a href="<?php the_field('url_2'); ?>">Read more &raquo;</a></p>
          </li>

          <li>
            <?php
              $image3 = get_field('image_3');
              $thumb3 = $image3['sizes'][ $size ];
            ?>
            <a class="image" href="<?php the_field('url_3'); ?>"><img class="th" src="<?php echo $thumb3; ?>" alt="<?php echo $image3['alt']; ?>"></a>
            <p><?php the_field('description_3'); ?> <a href="<?php the_field('url_3'); ?>">Read more &raquo;</a></p>
          </li>

        </ul>

      </section>

    <?php } ?>

    <section class="page-element">

      <div class="row">

        <div class="medium-8 large-8 columns">

          <header>
            <h1>News</h1>
          </header>
      
          <?php query_posts( array ( 'posts_per_page' => 4 ) ); ?>
            <?php while (have_posts()) : the_post() ?>
              
              <article class="summary">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                <?php get_template_part('partials/entry-meta'); ?>

                <?php if ( has_post_thumbnail() ) { ?>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php } ?>

                <?php the_excerpt(); ?>
              </article>
              
            <?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <?php if (get_field('news_page_url')) { ?>
            <a href="<?php the_field('news_page_url'); ?>" class="button">More news</a>
          <?php } ?>

        </div>

        <div class="medium-4 large-4 columns">

          <?php if (get_field('banner_title')) { ?>
          
            <aside class="sidebar panel banner">

              <h3><?php the_field('banner_title'); ?></h3>

              <p><?php the_field('banner_description'); ?></p>

              <a href="<?php the_field('banner_url'); ?>" class="button secondary"><?php the_field('banner_url_description'); ?></a>

            </aside>

          <?php } ?>

        </div>

      </div>

    </section>

  </div>

</div>