<article <?php post_class('large-12 column'); ?>
  <header class="large-12 column">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>

  <div class="entry large-12 column">
    <div class="entry-contain">
      <?php if(has_post_thumbnail()) :
        the_post_thumbnail('large');
       endif; ?>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
    </div>
  </div>
</article>
