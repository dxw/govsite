<?php
global $wp_query;
?>

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

        <?php if (get_query_var('paged') < 2) : ?>
          <?php
          $q = $wp_query->query;
          $q['ignore_sticky_posts'] = true;
          $q['post__in'] = get_option('sticky_posts');
          $q['posts_per_page'] = -1;
          query_posts($q);
          ?>

          <?php while (have_posts()) : ?>
            <?php the_post() ?>
            <?php get_template_part('partials/article-list-item') ?>
          <?php endwhile; ?>
        <?php endif ?>

        <?php
        wp_reset_query();
        $q = $wp_query->query;
        $q['ignore_sticky_posts'] = true;
        $q['post__not_in'] = get_option('sticky_posts');
        query_posts($q);
        ?>

        <?php while (have_posts()) : ?>
          <?php the_post() ?>
          <?php get_template_part('partials/article-list-item') ?>
        <?php endwhile; ?>

        <?php get_template_part('partials/pager') ?>

      </div>

      <aside class="medium-4 large-4 columns sidebar">

        <?php if ( is_category() || is_tag() ) {
          dynamic_sidebar('sidebar-primary');
        } ?>

      </aside>

    </div>

  </div>

</div>
