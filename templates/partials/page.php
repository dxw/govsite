<div class="row">

  <div class="large-12 columns">

    <section class="page-element">

      <header class="page-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <article class="row">

        <div class="medium-8 columns">

          <?php if ( get_field('show_video') == false ) { ?>
            <figure>
              <?php the_post_thumbnail('large'); ?>
            </figure>
          <?php } else { ?>
            <div class="flex-video">
              <?php _e( wp_oembed_get( get_field('featured_video_url') ) ); ?>
            </div>
          <?php } ?>

        </div>

        <div class="medium-4 columns">
          
          <?php the_content(); ?>

        </div>

      </article>

    </section>

   <?php if (get_field('left_block_title')) {

    $size = 'large';

  ?>
    
    <section class="page-element">

      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">

        <li>

          <?php
            $image1 = get_field('left_block_image');
            $thumb1 = $image1['sizes'][ $size ];
          ?>

          <h3><?php the_field('left_block_title') ?></h3>

          <?php if ( get_field('blocks_with_images') == true ) { ?>
            <a class="image" href="<?php the_field('left_block_url'); ?>"><img class="th" src="<?php echo $thumb1; ?>" alt="<?php echo $image1['alt']; ?>"></a>
          <?php } ?>

          <?php echo get_field('left_block_text'); ?>

          <a href="<?php the_field('left_block_url'); ?>" class="button"><?php the_field('left_block_call_to_action'); ?></a>

        </li>

        <li>

          <?php
            $image2 = get_field('right_block_image');
            $thumb2 = $image2['sizes'][ $size ];
          ?>

          <h3><?php the_field('right_block_title') ?></h3>

          <?php if ( get_field('blocks_with_images') == true ) { ?>
            <a class="image" href="<?php the_field('right_block_url'); ?>"><img class="th" src="<?php echo $thumb2; ?>" alt="<?php echo $image2['alt']; ?>"></a>
          <?php } ?>

          <?php echo get_field('right_block_text'); ?>

          <a href="<?php the_field('right_block_url'); ?>" class="button"><?php the_field('right_block_call_to_action'); ?></a>

        </li>

      </ul>

    </section>

   <?php } ?>

  </div>

</div>
