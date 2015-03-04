<?php 

// APPEARANCE PAGES

add_action('admin_menu', 'govsite_theme_settings_admin_menu');
function govsite_theme_settings_admin_menu() {
  $pages = array(
    (object)array(
      'slug' => 'logo',
      'title' => 'Logo',
    ),
    (object)array(
      'slug' => 'social-media',
      'title' => 'Social media',
    ),
    (object)array(
      'slug' => 'footer-link',
      'title' => 'Footer link',
    ),
  );

  global $govsite_theme_settings_admin_menu_theme_page_page;
  $govsite_theme_settings_admin_menu_theme_page_page = array();

  foreach ($pages as $page) {
    $govsite_theme_settings_admin_menu_theme_page_page[$page->slug] = $page;
    add_theme_page($page->title, $page->title, 'manage_options', $page->slug, 'govsite_theme_settings_admin_menu_theme_page');
  }
}
function govsite_theme_settings_admin_menu_theme_page() {
  global $govsite_theme_settings_admin_menu_theme_page_page;
  $slug = $_GET['page'];
  $page = $govsite_theme_settings_admin_menu_theme_page_page[$slug];
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
}

// SETTINGS PAGES

add_action('admin_menu', 'govsite_theme_settings_admin_menu2');
function govsite_theme_settings_admin_menu2() {
  $pages = array(
    (object)array(
      'slug' => 'google-analytics',
      'title' => 'Google Analytics',
    ),
  );

  foreach ($pages as $page) {
    global $govsite_theme_settings_admin_menu2_options_page_page;
    $govsite_theme_settings_admin_menu2_options_page_page = $page;
    add_options_page($page->title, $page->title, 'manage_options', $page->slug, 'govsite_theme_settings_admin_menu2_options_page');
  }
}
function govsite_theme_settings_admin_menu2_options_page() {
  global $govsite_theme_settings_admin_menu2_options_page_page;
  $page = $govsite_theme_settings_admin_menu2_options_page_page;
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
}

add_action('admin_init', 'govsite_theme_settings_admin_init');
function govsite_theme_settings_admin_init() {

  // Google Analytics

  add_settings_section('header', 'Instructions', 'govsite_theme_settings_admin_init_google_analytics_header', 'google-analytics');
  register_setting('google-analytics', 'ga-setting');
  add_settings_field('tracking-id', 'Tracking ID', 'govsite_theme_settings_admin_init_google_analytics_tracking_id', 'google-analytics', 'header');

  // Social media

  add_settings_section('header', 'Instructions', 'govsite_theme_settings_admin_init_social_media_header', 'social-media');

  for ($i = 0; $i < 6; $i++) {
    register_setting('social-media', 'social-media-'.$i.'-name-setting');
    register_setting('social-media', 'social-media-'.$i.'-url-setting');
    add_settings_field('name-'.$i, 'Name '.($i+1), create_function('', 'govsite_theme_settings_admin_init_social_media_i_name('.absint($i).');'), 'social-media', 'header');
    add_settings_field('profile-url-'.$i, 'Profile URL '.($i+1), create_function('', 'govsite_theme_settings_admin_init_social_media_i_url('.absint($i).');'), 'social-media', 'header');
  }

  // Footer link

  register_setting('footer-link', 'footer-link-text-setting');
  register_setting('footer-link', 'footer-link-cta-setting');
  register_setting('footer-link', 'footer-link-url-setting');
  add_settings_section('header', 'Instructions', 'govsite_theme_settings_admin_init_footer_link_header', 'footer-link');

  add_settings_field('footer-text', 'Footer text', 'govsite_theme_settings_admin_init_footer_link_footer_text', 'footer-link', 'header');

  add_settings_field('footer-cta', 'Footer call to action', 'govsite_theme_settings_admin_init_footer_link_footer_cta', 'footer-link', 'header');

  add_settings_field('footer-url', 'Footer URL', 'govsite_theme_settings_admin_init_footer_link_footer_url', 'footer-link', 'header');

}
function govsite_theme_settings_admin_init_google_analytics_header() {
  echo 'Add Google Analytics tracking ID to your site. The tracking ID is a string, such as "UA-000000-01"';
}
function govsite_theme_settings_admin_init_google_analytics_tracking_id() {
  echo '<input type="text" name="ga-setting" value="'.esc_attr(get_option('ga-setting')).'" size="50">';
}
function govsite_theme_settings_admin_init_social_media_header() {
  echo 'Choose social media profiles for your site. We support <strong>Facebook</strong>, <strong>Flickr</strong>, <strong>Google+</strong>, <strong>LinkedIn</strong>, <strong>Twitter</strong> and <strong>YouTube</strong> icons.';
}
function govsite_theme_settings_admin_init_social_media_i_name($i) {
  $options = get_option( 'social-media-'.$i.'-name-setting' );
  $items = array("Facebook", "Flickr", "Google+", "LinkedIn", "Twitter", "YouTube");
  echo '<select id="dropdown" name="social-media-'.$i.'-name-setting[dropdown]">';
    foreach($items as $item) {
      $selected = ($options['dropdown']==$item) ? 'selected="selected"' : '';
      echo "<option value='$item' $selected>$item</option>";
    }
  echo '</select>';
}
function govsite_theme_settings_admin_init_social_media_i_url($i) {
  $urlsetting = get_option('social-media-'.$i.'-url-setting');
  echo '<input type="text" name="social-media-'.esc_attr($i).'-url-setting" value="'.esc_attr($urlsetting).'" size="50">';
}
function govsite_theme_settings_admin_init_footer_link_header() {
  echo 'Add additional link to your site footer.';
}

function govsite_theme_settings_admin_init_footer_link_footer_text() {
  echo '<input type="text" name="footer-link-text-setting" value="'.esc_attr(get_option('footer-link-text-setting')).'" size="50">';
}

function govsite_theme_settings_admin_init_footer_link_footer_cta() {
  echo '<input type="text" name="footer-link-cta-setting" value="'.esc_attr(get_option('footer-link-cta-setting')).'" size="50">';
}

function govsite_theme_settings_admin_init_footer_link_footer_url() {
  echo '<input type="text" name="footer-link-url-setting" value="'.esc_attr(get_option('footer-link-url-setting')).'" size="50">';
}
