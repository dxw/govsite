<?php 

add_action('admin_menu', function () {
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

add_action('admin_init', function () {

  // Logo

  add_settings_section('header', 'Instructions', function () {
    echo 'Preferably PNG with either transparent of white background, at least 260px wide.';
  }, 'logo');
  register_setting('logo', 'logo-setting');
  add_settings_field('logo-image', 'Logo image URL', function () {
    echo '<input type="text" name="logo-setting" value="'.esc_attr(get_option('logo-setting')).'" size="50">';
  }, 'logo', 'header');

  // Social media

  add_settings_section('header', 'Instructions', function () {
    echo 'Choose social media profiles for your site. We support <strong>Facebook</strong>, <strong>Flickr</strong>, <strong>Google+</strong>, <strong>LinkedIn</strong>, <strong>Twitter</strong> and <strong>YouTube</strong> icons.';
  }, 'social-media');

  for ($i = 0; $i < 6; $i++) {
    register_setting('social-media', 'social-media-'.$i.'-url-setting');
    add_settings_field('profile-url-'.$i, 'Profile URL '.($i+1), function () use ($i) {
      $urlsetting = get_option('social-media-'.$i.'-url-setting');
      echo '<input type="text" name="social-media-'.esc_attr($i).'-url-setting" value="'.esc_attr($urlsetting).'" size="50">';
    }, 'social-media', 'header');
  }

  // Footer link

  register_setting('footer-link', 'footer-link-text-setting');
  register_setting('footer-link', 'footer-link-cta-setting');
  register_setting('footer-link', 'footer-link-url-setting');
  add_settings_section('header', 'Instructions', function () {
    echo 'Add additional link to your site footer.';
  }, 'footer-link');

  add_settings_field('footer-text', 'Footer text', function () {
    echo '<input type="text" name="footer-link-text-setting" value="'.esc_attr(get_option('footer-link-text-setting')).'" size="50">';
  }, 'footer-link', 'header');

  add_settings_field('footer-cta', 'Footer call to action', function () {
    echo '<input type="text" name="footer-link-cta-setting" value="'.esc_attr(get_option('footer-link-cta-setting')).'" size="50">';
  }, 'footer-link', 'header');

  add_settings_field('footer-url', 'Footer URL', function () {
    echo '<input type="text" name="footer-link-url-setting" value="'.esc_attr(get_option('footer-link-url-setting')).'" size="50">';
  }, 'footer-link', 'header');

});
