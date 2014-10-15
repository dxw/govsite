<?php 

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
  add_options_page( 'Social media', 'Social media', 'manage_options', 'social-media', 'my_options_page' );
}

add_action( 'admin_init', 'my_admin_init' );
function my_admin_init() {
  register_setting( 'social-media-one-url-group', 'social-media-one-url-setting' );
  register_setting( 'social-media-two-url-group', 'social-media-two-url-setting' );
  register_setting( 'social-media-three-url-group', 'social-media-three-url-setting' );
  add_settings_section( 'header', 'Header', 'header_social_media_callback', 'social-media' );
  add_settings_field( 'first-profile-url', 'First Profile URL', 'first_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'second-profile-url', 'Second Profile URL', 'second_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'third-profile-url', 'Third Profile URL', 'third_profile_url_callback', 'social-media', 'header' );
}

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

function my_options_page() {
  ?>
  <div class="wrap">
    <h2>Social media</h2>
    <form action="options.php" method="POST">
      <?php settings_fields( 'social-media-one-url-group' ); ?>
      <?php settings_fields( 'social-media-two-url-group' ); ?>
      <?php settings_fields( 'social-media-three-url-group' ); ?>
      <?php do_settings_sections( 'social-media' ); ?>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}
