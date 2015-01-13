<article <?php post_class('summary'); ?>>
  <header>
    <?php if ( get_post_status ( null ) == 'private' || post_password_required() ) { #TODO ?>
      <span class="icon"></span>
    <?php } ?>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </header>

  <?php get_template_part('partials/search-breadcrumbs'); ?>

  <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
  <?php } ?>

  <?php the_excerpt(); ?>
</article>