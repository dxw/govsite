<?php

add_action('admin_init', 'govsite_favicon_admin_init');
function govsite_favicon_admin_init() {
  // favicon

  add_settings_section('header', 'Instructions', 'govsite_favicon_admin_init_header', 'favicon');
  register_setting('favicon', 'favicon-setting');
  add_settings_field('favicon-image', 'Favicon image', 'govsite_favicon_admin_init_favicon_image', 'favicon', 'header');
}
function govsite_favicon_admin_init_header() {
  echo 'Preferably PNG, at least 32 x 32 px.';
}
function govsite_favicon_admin_init_favicon_image() {
  echo '<input type="text" name="favicon-setting" value="'.esc_attr(get_option('favicon-setting')).'" size="50">';
}

add_action('admin_enqueue_scripts', 'govsite_favicon_admin_enqueue_scripts');
function govsite_favicon_admin_enqueue_scripts() {
  // Add media scripts
  // N.B. this can't be done in admin_init - that's too early: http://codex.wordpress.org/Function_Reference/wp_enqueue_media
  wp_enqueue_media();
}
