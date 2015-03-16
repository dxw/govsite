<?php

add_action('after_setup_theme', 'govsite_setup');
function govsite_setup() {

  if (is_admin()) {
    govsite_admin();
  } else {
    govsite_front();
  }
}

function govsite_admin() {
  if (!function_exists('register_field_group') )
    echo '<div class="error"><p>' . __( 'Warning: GovSite theme requires the <strong>Advanced Custom Fields</strong> plugin to be activated.', 'govsite' ) . '</p></div>';
}

function govsite_front() {
  if (!function_exists('register_field_group') )
    echo '<div class="alert error"><p>' . __( 'Warning: GovSite theme requires the <strong>Advanced Custom Fields</strong> plugin to be activated.', 'govsite' ) . '</p></div>';
    die;
}
