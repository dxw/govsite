<ul class="social-media">

  <?php if ( get_option('social-media-one-url-setting') ) { ?>
    <li>
      <?php $social_media_one = get_option('social-media-one-url-setting') ?>
      <a href="<?php echo esc_attr($social_media_one); ?>"></a>
    </li>
  <?php } ?>

  <?php if ( get_option('social-media-two-url-setting') ) { ?>
    <li>
      <?php $social_media_two = get_option('social-media-two-url-setting') ?>
      <a href="<?php echo esc_attr($social_media_two); ?>"></a>
    </li>
  <?php } ?>

  <?php if ( get_option('social-media-three-url-setting') ) { ?>
    <li>
      <?php $social_media_three = get_option('social-media-three-url-setting') ?>
      <a href="<?php echo esc_attr($social_media_three); ?>"></a>
    </li>
  <?php } ?>

  <?php if ( get_option('social-media-four-url-setting') ) { ?>
    <li>
      <?php $social_media_four = get_option('social-media-four-url-setting') ?>
      <a href="<?php echo esc_attr($social_media_four); ?>"></a>
    </li>
  <?php } ?>

  <?php if ( get_option('social-media-five-url-setting') ) { ?>
    <li>
      <?php $social_media_five = get_option('social-media-five-url-setting') ?>
      <a href="<?php echo esc_attr($social_media_five); ?>"></a>
    </li>
  <?php } ?>

  <?php if ( get_option('social-media-six-url-setting') ) { ?>
    <li>
      <?php $social_media_six = get_option('social-media-six-url-setting') ?>
      <a href="<?php echo esc_attr($social_media_six); ?>"></a>
    </li>
  <?php } ?>

</ul>