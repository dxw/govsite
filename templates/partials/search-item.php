<article <?php post_class('summary'); ?>>
  <header>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </header>

  <?php the_breadcrumbs(false) ?>

  <?php the_excerpt(); ?>
</article>
