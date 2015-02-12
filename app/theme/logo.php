<?php

add_action('admin_init', 'govsite_logo_admin_init');
function govsite_logo_admin_init() {

  // Logo

  add_settings_section('header', 'Instructions', 'govsite_logo_admin_init_header', 'logo');
  register_setting('logo', 'logo-setting');
  add_settings_field('logo-image', 'Logo image', 'govsite_logo_admin_init_logo', 'logo', 'header');
}

function govsite_logo_admin_init_header() {
  echo 'Preferably PNG with either a transparent or white background, at least 260px wide.';
}

function govsite_logo_admin_init_logo() {
  echo '<input type="text" name="logo-setting" value="'.esc_attr(get_option('logo-setting')).'" size="50">';
}

add_action('admin_enqueue_scripts', 'govsite_logo_admin_enqueue_scripts');
function govsite_logo_admin_enqueue_scripts() {
  // Add media scripts
  // N.B. this can't be done in admin_init - that's too early: http://codex.wordpress.org/Function_Reference/wp_enqueue_media
  wp_enqueue_media();
}
