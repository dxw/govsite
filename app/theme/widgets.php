<?php

/**
 * Register sidebars
 */

function widgets_init() {

  register_sidebar(array(
    'name'          => __('Primary'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

}

add_action('widgets_init', 'widgets_init');