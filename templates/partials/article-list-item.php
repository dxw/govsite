<article <?php post_class(); ?>

  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>

  <div class="entry">
    <?php if(has_post_thumbnail()) :
      the_post_thumbnail('large');
     endif; ?>
    <?php if (has_excerpt()) { 
      the_excerpt();
    } else { ?>
      <p><?php trim_content(35); ?></p>
    <?php } ?>
    <a href="<?php the_permalink(); ?>" class="button">Read more</a>
  </div>

</article>
