<?php if (get_field('banner_text')) : ?>
  <div class="bottom-banner">
    <div class="row">
      <div class="large-12 columns">
        <h2><?php the_field('banner_text'); ?></h2>
        <a href="<?php the_field('banner_url'); ?>" class="button-banner"><?php the_field('banner_call_to_action'); ?></a>
      </div>
    </div>
  </div>
<?php endif; ?>