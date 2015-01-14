<?php

add_action('admin_init', function () {

  // Logo

  add_settings_section('header', 'Instructions', function () {
    echo 'Preferably PNG with either transparent of white background, at least 260px wide.';
  }, 'logo');
  register_setting('logo', 'logo-setting');
  add_settings_field('logo-image', 'Logo image URL', function () {
    echo '<input type="text" name="logo-setting" value="'.esc_attr(get_option('logo-setting')).'" size="50">';
  }, 'logo', 'header');
});

add_action('admin_enqueue_scripts', function () {
  wp_enqueue_script('media-editor');
});
