<?php 
/* Template name: Homepage */

the_post(); 

?>

<div class="row">

  <div class="large-12 column">

    <section class="page-element">
    
      <?php if (the_content()) {
        the_content();
      } ?>

      <?php if (get_field('main_button_url')) { ?>
        <a href="<?php the_field('main_button_url'); ?>" title="<?php the_field('main_button_description'); ?>" class="button"><?php the_field('main_button_description'); ?></a>
      <?php } ?>

    </section>

  </div>

</div>