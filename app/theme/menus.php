<?php

register_nav_menu( 'header', 'Header Menu' );
register_nav_menu( 'footer', 'Footer Menu' );

//Deletes all CSS classes and id's, except for those listed in the array below
//Modified from https://gist.github.com/lekkerduidelijk/5576437
function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
    //List of allowed menu classes
    'current_page_item',
    'current_page_parent',
    'current_page_ancestor',
    'current-menu-item',
    'first',
    'last',
    'vertical',
    'horizontal',
    'menu-item-has-children',
    'sub-menu'
    )
  ) : '';
}

add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"
function current_to_active($text){
  $replace = array(
    //List of menu item classes that should be changed to "active"
    'current_page_item' => 'active',
    'current_page_parent' => 'active',
    'current_page_ancestor' => 'active',
    'current-menu-item' => 'active',
    'menu-item-has-children' => 'has-dropdown',
    'sub-menu' => 'dropdown',
  );
  $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
  }
add_filter ('wp_nav_menu','current_to_active');

//Deletes empty classes
function strip_empty_classes($menu) {
    return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');