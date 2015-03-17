<?php
global $wp_query;
?>

<main id="content" role="main" class="main">

  <div class="row">
    <div class="large-12 columns">

      <header class="page-header">
        <div class="header-group">
          <h1><?php echo w_template_title(); ?></h1>
          <?php if(category_description()) :?>
            <?php echo category_description(); ?>
          <?php endif; ?>
        </div>
      </header>

      <div class="row">

        <div class="medium-8 large-8 columns">

          <?php $sticky_posts = get_option('sticky_posts'); ?>

          <?php 
          if (get_query_var('paged') < 2) :

            $q = $wp_query->query;
            $q['post__in'] = $sticky_posts;
            $q['posts_per_page'] = -1;
            query_posts($q);

            if (count($sticky_posts) > 0) :
              while (have_posts()) : the_post();
                get_template_part('partials/sticky-item');
              endwhile;
            endif;

          endif;
          ?>

          <?php

          wp_reset_query();
          $q = $wp_query->query;
          $q['post__not_in'] = $sticky_posts;
          query_posts($q);

          while (have_posts()) : the_post();
            get_template_part('partials/article-list-item');
          endwhile;

          ?>

          <?php get_template_part('partials/pager') ?>

        </div>

        <aside class="sidebar medium-4 columns" role="complementary">
          <?php if (is_category() || is_tag()) : ?>
            <?php dynamic_sidebar('sidebar-primary'); ?>
          <?php endif ?>
        </aside>

      </div>

    </div>
  </div>

</main>