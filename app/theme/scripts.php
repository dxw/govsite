<?php

add_action('wp_enqueue_scripts', 'govsite_scripts_wp_enqueue_scripts');
function govsite_scripts_wp_enqueue_scripts() {
  /**
   *  Do not add javascript to your theme here, unless you're sure you should.
   *
   *  Normally, you should add Javascript to assets/js/main.js or make a file in assets/js/plugins.
   *
   *  You can/should enqueue a script here only if it is a widely used library that is required by a plugin (or is likely to be later)
   **/

  // We need to register our own jQuery, because WP is on jQuery 2.x (no it isn't) which breaks support for IE 6-8.
  // This will not affect admin pages
  // This will break any plugin that requires a feature/behaviour in jQuery 2.x which is missing/different in jQuery 1.10.x 

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/../build/lib/jquery.min.js');

  // Because it's awesome
  wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/../build/lib/modernizr.min.js');

  // Pretty much everything else should be compiled by Grunt.
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/../build/main.min.js', array('jquery', 'modernizr'), '', true);

  wp_enqueue_style ('main', get_stylesheet_directory_uri() . '/../build/main.min.css');
}

add_action('admin_enqueue_scripts', 'govsite_scripts_admin_enqueue_scripts');
function govsite_scripts_admin_enqueue_scripts() {
  wp_enqueue_script('admin', get_template_directory_uri() . '/../assets/js/admin.js', array('jquery'), '', true);
}

// Get favicon from Media Library
function get_attachment_url_by_slug( $slug ) {
  $args = array(
    'post_type' => 'attachment',
    'name' => sanitize_title($slug),
    'posts_per_page' => 1,
    'post_status' => 'inherit',
  );
  $_favicon = get_posts( $args );
  $favicon = $_favicon ? array_pop($_favicon) : null;
  
  return $favicon ? wp_get_attachment_url($favicon->ID) : '';
}
