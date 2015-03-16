<?php 
/* Template name: Homepage */

the_post(); 

?>

<?php 
/* Template variables */ 
$content = get_the_content();
$size = 'full';
$image1 = get_field('image_1'); 
$thumb1 = $image1['sizes'][$size];
$image2 = get_field('image_2'); 
$thumb2 = $image2['sizes'][$size];
$image3 = get_field('image_3'); 
$thumb3 = $image3['sizes'][$size];

?>

<main id="content" role="main" class="main">

  <?php if(!empty($content)) : ?>
    <section class="page-banner">
      <div class="row">
        <div class="large-12 columns">
          <article class="rte">
            <?php the_content(); ?>
          </article>
          <?php if (get_field('main_button_url')) : ?>
            <a href="<?php the_field('main_button_url'); ?>" title="<?php the_field('main_button_description'); ?>" class="button-banner"><?php the_field('main_button_description'); ?></a>
          <?php endif ?>
        </div>
      </div>
    </section>
  <?php endif ?>

    <section class="image-features">
      <div class="row">
        <div class="large-12 columns">

          <?php if (get_field('image_1')) : ?>
            <ul class="small-block-grid-1 medium-block-grid-3">
              <li>
                <article>
                  <header>
                  <h3><?php the_field('title_1'); ?></h3>
                  </header>
                  <a class="image" href="<?php the_field('url_1'); ?>"><img class="thumb" src="<?php echo $thumb1; ?>" alt="<?php echo $image1['alt']; ?>"></a>
                  <p><?php the_field('description_1'); ?> <a href="<?php the_field('url_1'); ?>">Read more &raquo;</a></p>
                </article>
              </li>

              <li>
                <article>
                  <header>
                  <h3><?php the_field('title_2'); ?></h3>
                  </header>
                  <a class="image" href="<?php the_field('url_2'); ?>"><img class="thumb" src="<?php echo $thumb2; ?>" alt="<?php echo $image2['alt']; ?>"></a>
                  <p><?php the_field('description_2'); ?> <a href="<?php the_field('url_2'); ?>">Read more &raquo;</a></p>
                </article>
              </li>

              <li>
                <article>
                  <header>
                  <h3><?php the_field('title_3'); ?></h3>
                  </header>
                  <a class="image" href="<?php the_field('url_3'); ?>"><img class="thumb" src="<?php echo $thumb3; ?>" alt="<?php echo $image3['alt']; ?>"></a>
                  <p><?php the_field('description_3'); ?> <a href="<?php the_field('url_3'); ?>">Read more &raquo;</a></p>
                </article>
              </li>
            </ul>
          <?php endif ?>

        </div>
      </div>
    </section>

    <section class="news-posts">
      <div class="row">

        <div class="posts medium-8 columns">

          <header>
            <h2>News</h2>
          </header>

          <?php query_posts( array ( 'posts_per_page' => 4 ) ); ?>
          
          <?php while (have_posts()) : the_post() ?>
            <?php if ( is_sticky() ) : ?>

            <?php get_template_part('partials/featured-news-item'); ?>

              <?php elseif ( get_post_status() == 'private' || post_password_required() ) : ?>

                <article <?php post_class('summary'); ?>>
                  <header>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </header>

                  <?php get_template_part('partials/entry-meta'); ?>

                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                  <?php endif ?>

                  <?php the_excerpt(); ?>
                </article>

              <?php else: ?>

            <?php get_template_part('partials/news-item'); ?>

            <?php endif ?>
          <?php endwhile; ?>
          
          <?php wp_reset_query(); ?>

          <?php if (get_field('news_page_url')) : ?>
            <a href="<?php the_field('news_page_url'); ?>" class="button">More news</a>
          <?php endif ?>

        </div>

        <aside class="sidebar medium-4 columns" role="complementary">

          <?php if (get_field('banner_title')) : ?>
            <div class="panel">
              <header>
                <h3><?php the_field('banner_title'); ?></h3>
              </header>

              <p><?php the_field('banner_description'); ?></p>

              <a href="<?php the_field('banner_url'); ?>" class="button secondary"><?php the_field('banner_url_description'); ?></a>
            </div>
          <?php endif ?>

        </aside>

      </div>
    </section>

</main>