<article <?php post_class('summary'); ?>>
  <header>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </header>

  <?php get_template_part('partials/search-breadcrumbs'); ?>

  <?php the_excerpt(); ?>
</article>