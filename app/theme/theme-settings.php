<?php 

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
  add_options_page( 'Logo', 'Logo', 'manage_options', 'logo', 'logo_options' );
  add_options_page( 'Social media', 'Social media', 'manage_options', 'social-media', 'social_media_options' );
  add_options_page( 'Footer link', 'Footer link', 'manage_options', 'footer-link', 'footer_link_options' );
}

add_action( 'admin_init', 'my_admin_init' );

function my_admin_init() {

  add_settings_section( 'header', 'Instructions', 'header_logo_callback', 'logo' );
  register_setting( 'logo', 'logo-setting' );
  add_settings_field( 'logo-image', 'Logo image URL', 'logo_image_callback', 'logo', 'header' );

  add_settings_section( 'header', 'Instructions', 'header_social_media_callback', 'social-media' );
  register_setting( 'social-media', 'social-media-one-url-setting' );
  register_setting( 'social-media', 'social-media-two-url-setting' );
  register_setting( 'social-media', 'social-media-three-url-setting' );
  register_setting( 'social-media', 'social-media-four-url-setting' );
  register_setting( 'social-media', 'social-media-five-url-setting' );
  register_setting( 'social-media', 'social-media-six-url-setting' );
  add_settings_field( 'first-profile-url', 'First profile URL', 'first_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'second-profile-url', 'Second profile URL', 'second_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'third-profile-url', 'Third profile URL', 'third_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'fourth-profile-url', 'Fourth profile URL', 'fourth_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'fifth-profile-url', 'Fifth profile URL', 'fifth_profile_url_callback', 'social-media', 'header' );
  add_settings_field( 'sixth-profile-url', 'Sixth profile URL', 'sixth_profile_url_callback', 'social-media', 'header' );

  add_settings_section( 'header', 'Instructions', 'header_footer_link_callback', 'footer-link' );
  register_setting( 'footer-link', 'footer-link-text-setting' );
  register_setting( 'footer-link', 'footer-link-cta-setting' );
  register_setting( 'footer-link', 'footer-link-url-setting' );
  add_settings_field( 'footer-text', 'Footer text', 'footer_text_callback', 'footer-link', 'header' );
  add_settings_field( 'footer-cta', 'Footer call to action', 'footer_cta_callback', 'footer-link', 'header' );
  add_settings_field( 'footer-url', 'Footer URL', 'footer_url_callback', 'footer-link', 'header' );

}

// Logo
function header_logo_callback() {
  echo 'Preferably PNG with either transparent of white background, at least 260px wide.';
}

function logo_image_callback() {
  $logosetting = esc_attr( get_option( 'logo-setting' ) );
  echo "<input type='text' name='logo-setting' value='$logosetting' size='50'>";
}

function logo_options() {
  ?>
  <div class="wrap">
    <h2>Logo</h2>
    <form action="options.php" method="POST">
      <?php settings_fields( 'logo' ); ?>
      <?php do_settings_sections( 'logo' ); ?>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}

// Social media page functions

function header_social_media_callback() {
  echo 'Choose social media profiles for your site. We support <strong>Facebook</strong>, <strong>Flickr</strong>, <strong>Google+</strong>, <strong>LinkedIn</strong>, <strong>Twitter</strong> and <strong>YouTube</strong> icons.';
}

function first_profile_url_callback() {
  $firsturlsetting = esc_attr( get_option( 'social-media-one-url-setting' ) );
  echo "<input type='text' name='social-media-one-url-setting' value='$firsturlsetting' size='50'>";
}

function second_profile_url_callback() {
  $secondurlsetting = esc_attr( get_option( 'social-media-two-url-setting' ) );
  echo "<input type='text' name='social-media-two-url-setting' value='$secondurlsetting' size='50'>";
}

function third_profile_url_callback() {
  $thirdurlsetting = esc_attr( get_option( 'social-media-three-url-setting' ) );
  echo "<input type='text' name='social-media-three-url-setting' value='$thirdurlsetting' size='50'>";
}

function fourth_profile_url_callback() {
  $fourthurlsetting = esc_attr( get_option( 'social-media-four-url-setting' ) );
  echo "<input type='text' name='social-media-four-url-setting' value='$fourthurlsetting' size='50'>";
}

function fifth_profile_url_callback() {
  $fifthurlsetting = esc_attr( get_option( 'social-media-five-url-setting' ) );
  echo "<input type='text' name='social-media-five-url-setting' value='$fifthurlsetting' size='50'>";
}

function sixth_profile_url_callback() {
  $sixthurlsetting = esc_attr( get_option( 'social-media-six-url-setting' ) );
  echo "<input type='text' name='social-media-six-url-setting' value='$sixthurlsetting' size='50'>";
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

// Footer link

function header_footer_link_callback() {
  echo 'Add additional link to your site footer.';
}

function footer_text_callback() {
  $footertextsetting = esc_attr( get_option( 'footer-link-text-setting' ) );
  echo "<input type='text' name='footer-link-text-setting' value='$footertextsetting' size='50' />";
}

function footer_cta_callback() {
  $footerctasetting = esc_attr( get_option( 'footer-link-cta-setting' ) );
  echo "<input type='text' name='footer-link-cta-setting' value='$footerctasetting' size='50' />";
}

function footer_url_callback() {
  $footerurlsetting = esc_attr( get_option( 'footer-link-url-setting' ) );
  echo "<input type='text' name='footer-link-url-setting' value='$footerurlsetting' size='50' />";
}

function footer_link_options() {
  ?>
  <div class="wrap">
    <h2>Footer link</h2>
    <form action="options.php" method="POST">
      <?php settings_fields( 'footer-link' ); ?>
      <?php do_settings_sections( 'footer-link' ); ?>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}
