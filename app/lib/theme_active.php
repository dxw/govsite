<?php

add_action('after_setup_theme', 'govsite_check_for_acf');
function govsite_check_for_acf() {
  if (is_admin()) {
    if (!function_exists('register_field_group') ) {
      echo '<div class="error"><p>' . __( 'Warning: GovSite theme requires the <strong>Advanced Custom Fields</strong> plugin to be activated.', 'govsite' ) . '</p></div>';
    }
  } else {
    if (!function_exists('register_field_group') ) {
      echo '<div style="border-left:4px solid #dd3d36;background:#efefef;padding:20px;"><p style="margin:0;font-family:sans-serif;">' . __( 'Warning: GovSite theme requires the <strong>Advanced Custom Fields</strong> plugin to be activated.', 'govsite' ) . '</p></div>';
      die;
    }
  }
}
