<?php 

add_action( 'admin_menu', function () {
  $pages = [
    (object)[
      'slug' => 'logo',
      'title' => 'Logo',
    ],
    (object)[
      'slug' => 'social-media',
      'title' => 'Social media',
    ],
    (object)[
      'slug' => 'footer-link',
      'title' => 'Footer link',
    ],
  ];

  foreach ($pages as $page) {
    add_theme_page($page->title, $page->title, 'manage_options', $page->slug, function () use ($page) {
      ?>
      <div class="wrap">
        <h2><?php echo esc_html($page->title) ?></h2>
        <form action="options.php" method="POST">
          <?php settings_fields($page->slug) ?>
          <?php do_settings_sections($page->slug) ?>
          <?php submit_button() ?>
        </form>
      </div>
      <?php
    });
  }
});

add_action( 'admin_init', function () {

  add_settings_section( 'header', 'Instructions', 'header_logo_callback', 'logo' );
  register_setting( 'logo', 'logo-setting' );
  add_settings_field( 'logo-image', 'Logo image URL', 'logo_image_callback', 'logo', 'header' );

  add_settings_section( 'header', 'Instructions', 'header_social_media_callback', 'social-media' );

  for ($i = 0; $i < 6; $i++) {
    register_setting( 'social-media', 'social-media-'.$i.'-url-setting' );
    add_settings_field( 'profile-url-'.$i, 'Profile URL '.($i+1), function () use ($i) { profile_url_callback($i); }, 'social-media', 'header' );
  }

  add_settings_section( 'header', 'Instructions', 'header_footer_link_callback', 'footer-link' );
  register_setting( 'footer-link', 'footer-link-text-setting' );
  register_setting( 'footer-link', 'footer-link-cta-setting' );
  register_setting( 'footer-link', 'footer-link-url-setting' );
  add_settings_field( 'footer-text', 'Footer text', 'footer_text_callback', 'footer-link', 'header' );
  add_settings_field( 'footer-cta', 'Footer call to action', 'footer_cta_callback', 'footer-link', 'header' );
  add_settings_field( 'footer-url', 'Footer URL', 'footer_url_callback', 'footer-link', 'header' );

});

// Logo
function header_logo_callback() {
  echo 'Preferably PNG with either transparent of white background, at least 260px wide.';
}

function logo_image_callback() {
  $logosetting = esc_attr( get_option( 'logo-setting' ) );
  echo "<input type='text' name='logo-setting' value='$logosetting' size='50'>";
}

// Social media page functions

function header_social_media_callback() {
  echo 'Choose social media profiles for your site. We support <strong>Facebook</strong>, <strong>Flickr</strong>, <strong>Google+</strong>, <strong>LinkedIn</strong>, <strong>Twitter</strong> and <strong>YouTube</strong> icons.';
}

function profile_url_callback($i) {
  $urlsetting = get_option( 'social-media-'.$i.'-url-setting' );
  echo '<input type="text" name="social-media-'.esc_attr($i).'-url-setting" value="'.esc_attr($urlsetting).'" size="50">';
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
