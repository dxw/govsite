<?php if($the_image = get_field('image_' . $img)) :  ?>

  <li>
    <article>
      <header>
        <h3><?php the_field('title_' . $img); ?></h3>
      </header>
      <a class="image" href="<?php the_field('url_' . $img); ?>">
        <img class="thumb" src="<?php echo $the_image['sizes']['full'] ?>" alt="<?php echo $the_image['alt']; ?>">
      </a>
      <p>
        <?php the_field('description_' . $img); ?> <a href="<?php the_field('url_' . $img); ?>"><?php _e('Read more &raquo;', 'govsite') ?></a>
      </p>
    </article>
  </li>

<?php endif ?>
