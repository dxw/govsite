<article <?php post_class('summary') ?>>
  <header>
    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
  </header>

  <?php get_template_part('partials/entry-meta') ?>

  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail') ?></a>
  <?php endif ?>

  <?php the_excerpt() ?>
</article>
