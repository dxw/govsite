<?php if (get_field('google_maps_url')) : ?>
  <div class="map">
    <iframe src="<?php the_field('google_maps_url'); ?>" width="100%" height="300" frameborder="0" class="iframe"></iframe>
  </div>
<?php endif ?>
