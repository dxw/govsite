<?php if ( get_field('add_bottom_banner') == true ) { ?>
  
  <section class="banner">
    <div class="row">
      <div class="large-12 columns">
        <h2><?php echo get_option('bottom-banner-text-setting'); ?></h2>
        <a href="<?php echo get_option('bottom-banner-url-setting'); ?>" class="button-banner"><?php echo get_option('bottom-banner-cta-setting'); ?></a>
      </div>
    </div>
  </section>

<?php } ?>