<article <?php post_class('post-summary'); ?>>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>

  <div class="entry">
    <?php if(has_post_thumbnail()) : 
      the_post_thumbnail('medium');
     endif; ?>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="button">Read more</a>
  </div>

</article>
