<?php

add_action('admin_init', function () {

  // Logo

  add_settings_section('header', 'Instructions', function () {
    echo 'Preferably PNG with either transparent of white background, at least 260px wide.';
  }, 'logo');
  register_setting('logo', 'logo-setting');
  add_settings_field('logo-image', 'Logo image', function () {
    echo '<input type="text" name="logo-setting" value="'.esc_attr(get_option('logo-setting')).'" size="50">';
  }, 'logo', 'header');
});

add_action('admin_enqueue_scripts', function () {
  // Add media scripts
  // N.B. this can't be done in admin_init - that's too early: http://codex.wordpress.org/Function_Reference/wp_enqueue_media
  wp_enqueue_media();
});
