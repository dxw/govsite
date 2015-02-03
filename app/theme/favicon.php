<?php

add_action('admin_init', function () {

  // favicon

  add_settings_section('header', 'Instructions', function () {
    echo 'Preferably PNG, at least 32 x 32 px.';
  }, 'favicon');
  register_setting('favicon', 'favicon-setting');
  add_settings_field('favicon-image', 'Favicon image', function () {
    echo '<input type="text" name="favicon-setting" value="'.esc_attr(get_option('favicon-setting')).'" size="50">';
  }, 'favicon', 'header');
});

add_action('admin_enqueue_scripts', function () {
  // Add media scripts
  // N.B. this can't be done in admin_init - that's too early: http://codex.wordpress.org/Function_Reference/wp_enqueue_media
  wp_enqueue_media();
});
