<?php 

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
  add_options_page( 'Social media', 'Social media', 'manage_options', 'social-media', 'social_media_options' );
  add_options_page( 'Bottom banner', 'Bottom banner', 'manage_options', 'bottom-banner', 'bottom_banner_options' );
}

add_action( 'admin_init', 'my_admin_init' );

function my_admin_init() {

  add_settings_section( 'header', 'Instructions', 'header_social_media_callback', 'social-media' );
  register_setting( 'social-media', 'social-media-one-url-setting' );
  register_setting( 'social-media', 'social-media-two-url-setting' );
  register_setting( 'social-media', 'social-media-three-url-setting' );
  add_settings_field( 'first-profile-url', 'First profile URL', 'first_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'second-profile-url', 'Second profile URL', 'second_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'third-profile-url', 'Third profile URL', 'third_profile_url_callback', 'social-media', 'header' );

  add_settings_section( 'header', 'Instructions', 'header_banner_callback', 'bottom-banner' );
  register_setting( 'bottom-banner', 'bottom-banner-text-setting' );
  register_setting( 'bottom-banner', 'bottom-banner-cta-setting' );
  register_setting( 'bottom-banner', 'bottom-banner-url-setting' );
  add_settings_field( 'banner-text', 'Banner text', 'banner_text_callback', 'bottom-banner', 'header' );
  add_settings_field( 'banner-cta', 'Banner call to action', 'banner_cta_callback', 'bottom-banner', 'header' );
  add_settings_field( 'banner-url', 'Banner URL', 'banner_url_callback', 'bottom-banner', 'header' );

}

// Social media page functions

function header_social_media_callback() {
  echo 'Choose social media profiles for your site. We support <strong>Facebook</strong>, <strong>Flickr</strong>, <strong>Google+</strong>, <strong>LinkedIn</strong>, <strong>Twitter</strong> and <strong>YouTube</strong> icons.';
}

function first_profile_url_callback() {
  $firsturlsetting = esc_attr( get_option( 'social-media-one-url-setting' ) );
  echo "<input type='text' name='social-media-one-url-setting' value='$firsturlsetting' size='50' />";
}

function second_profile_url_callback() {
  $secondurlsetting = esc_attr( get_option( 'social-media-two-url-setting' ) );
  echo "<input type='text' name='social-media-two-url-setting' value='$secondurlsetting' size='50' />";
}

function third_profile_url_callback() {
  $thirdurlsetting = esc_attr( get_option( 'social-media-three-url-setting' ) );
  echo "<input type='text' name='social-media-three-url-setting' value='$thirdurlsetting' size='50' />";
}

function social_media_options() {
  ?>
  <div class="wrap">
    <h2>Social media</h2>
    <form action="options.php" method="POST">
      <?php settings_fields( 'social-media' ); ?>
      <?php do_settings_sections( 'social-media' ); ?>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}

// Bottom banner page functions

function header_banner_callback() {
  echo 'Add content to your bottom banner.';
}

function banner_text_callback() {
  $bannertextsetting = esc_attr( get_option( 'bottom-banner-text-setting' ) );
  echo "<input type='text' name='bottom-banner-text-setting' value='$bannertextsetting' size='50' />";
}

function banner_cta_callback() {
  $bannerctasetting = esc_attr( get_option( 'bottom-banner-cta-setting' ) );
  echo "<input type='text' name='bottom-banner-cta-setting' value='$bannerctasetting' size='50' />";
}

function banner_url_callback() {
  $bannerurlsetting = esc_attr( get_option( 'bottom-banner-url-setting' ) );
  echo "<input type='text' name='bottom-banner-url-setting' value='$bannerurlsetting' size='50' />";
}

function bottom_banner_options() {
  ?>
  <div class="wrap">
    <h2>Bottom banner</h2>
    <form action="options.php" method="POST">
      <?php settings_fields( 'bottom-banner' ); ?>
      <?php do_settings_sections( 'bottom-banner' ); ?>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}
