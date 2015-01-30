<nav id="headermenu" class="headermenu top-bar" data-topbar role="navigation">

  <button type="button" class="button-search show-for-medium-up"><span class="accessibility">Search</span></button>
  
  <?php
  //Deletes all CSS classes and id's, except for those listed in the array below
  //Modified from https://gist.github.com/lekkerduidelijk/5576437
  function custom_wp_nav_menu($var) {
    return is_array($var) ? array_intersect($var, array(
      //List of allowed menu classes
      'current_page_item',
      'current_page_parent',
      'current_page_ancestor',
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
  ?>

  <?php
  //Add headernav with arguments and a nice clean class structure yay!

  if (has_nav_menu('header')) :
    wp_nav_menu(array(
      'theme_location' => 'header',
      'menu_class' => 'menu',
      'depth' => 2,
      'container_class' => 'top-bar-section'
      ));
  endif;
  ?>
</nav>

<!--[if lt IE 8]>
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <div>
      <label class="screen-reader-text hidden-for-small-only hidden-for-medium-up" for="s">Search for:</label>
      <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s">
      <input type="submit" id="searchsubmit" value="Search">
    </div>
  </form>
<![endif]-->