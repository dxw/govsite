<article <?php post_class('summary sticky'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('letterhead'); ?></a>
  <?php } ?>

  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  </header>

  <?php get_template_part('partials/entry-meta'); ?>

  <?php the_excerpt(); ?>
</article>