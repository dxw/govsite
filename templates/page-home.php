<?php 
/* Template name: Homepage */

the_post(); 

?>

<main id="content" role="main">

  <?php
    $content = get_the_content();
    if(!empty($content)) { ?>

      <div class="page-intro banner">

        <div class="row">

          <div class="large-12 columns">

            <?php the_content(); ?>

            <?php if (get_field('main_button_url')) { ?>
              <a href="<?php the_field('main_button_url'); ?>" title="<?php the_field('main_button_description'); ?>" class="button-banner"><?php the_field('main_button_description'); ?></a>
            <?php } ?>

          </div>

        </div>

      </div>

  <?php } ?>

  <div class="row">

    <div class="large-12 columns">

      <?php if (get_field('image_1')) {

        $size = 'full';

      ?>

        <div class="page-element">

          <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3 featured">

            <li>
              <article>
                <header>
                  <h3><?php the_field('title_1'); ?></h3>
                </header>
                <?php
                  $image1 = get_field('image_1');
                  $thumb1 = $image1['sizes'][$size];
                ?>
                <a class="image" href="<?php the_field('url_1'); ?>"><img class="th" src="<?php echo $thumb1; ?>" alt="<?php echo $image1['alt']; ?>"></a>
                <p><?php the_field('description_1'); ?> <a href="<?php the_field('url_1'); ?>">Read more &raquo;</a></p>
              </article>
            </li>

            <li>
              <article>
                <header>
                  <h3><?php the_field('title_2'); ?></h3>
                </header>
                <?php
                  $image2 = get_field('image_2');
                  $thumb2 = $image2['sizes'][$size];
                ?>
                <a class="image" href="<?php the_field('url_2'); ?>"><img class="th" src="<?php echo $thumb2; ?>" alt="<?php echo $image2['alt']; ?>"></a>
                <p><?php the_field('description_2'); ?> <a href="<?php the_field('url_2'); ?>">Read more &raquo;</a></p>
              </article>
            </li>

            <li>
              <article>
                <header>
                  <h3><?php the_field('title_3'); ?></h3>
                </header>
                <?php
                  $image3 = get_field('image_3');
                  $thumb3 = $image3['sizes'][$size];
                ?>
                <a class="image" href="<?php the_field('url_3'); ?>"><img class="th" src="<?php echo $thumb3; ?>" alt="<?php echo $image3['alt']; ?>"></a>
                <p><?php the_field('description_3'); ?> <a href="<?php the_field('url_3'); ?>">Read more &raquo;</a></p>
              </article>
            </li>

          </ul>

        </div>

      <?php } ?>

      <div class="page-element row">

        <section class="medium-8 large-8 columns">

          <header>
            <h1>News</h1>
          </header>
      
          <?php query_posts( array ( 'posts_per_page' => 4 ) ); ?>
            <?php while (have_posts()) : the_post() ?>

              <?php if ( is_sticky() ) {

                get_template_part('partials/featured-news-item');

              } elseif ( get_post_status() == 'private' || post_password_required() ) { ?>
                
                <article <?php post_class('summary'); ?>>
                  <header>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </header>

                  <?php get_template_part('partials/entry-meta'); ?>

                  <?php if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                  <?php } ?>

                  <?php the_excerpt(); ?>
                </article>

              <?php } else {

                get_template_part('partials/news-item');

              } ?>
              
            <?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <?php if (get_field('news_page_url')) { ?>
            <a href="<?php the_field('news_page_url'); ?>" class="button">More news</a>
          <?php } ?>

        </section>

        <aside class="medium-4 large-4 columns sidebar">

          <?php if (get_field('banner_title')) { ?>
          
            <section class="panel">

              <header>
                <h3><?php the_field('banner_title'); ?></h3>
              </header>

              <p><?php the_field('banner_description'); ?></p>

              <a href="<?php the_field('banner_url'); ?>" class="button secondary"><?php the_field('banner_url_description'); ?></a>

            </section>

          <?php } ?>

        </aside>

      </div>

    </div>

  </div>

</main>
