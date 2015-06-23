<article>
  <header>
    <h3><?php the_field('block_title_'.$idx) ?></h3>
  </header>

  <?php if ( $image = get_field('block_image_'.$idx) ) : ?>
    <a class="image" href="<?php the_field('block_url_'.$idx) ?>"><img class="thumb" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>"></a>
  <?php endif ?>

  <?php the_field('block_text_'.$idx) ?>
  <a href="<?php the_field('block_url_'.$idx) ?>" class="button"><?php the_field('block_call_to_action_'.$idx) ?></a>
</article>
