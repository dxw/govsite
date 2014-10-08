<nav>
  <?php
    if (has_nav_menu('header')) :
      wp_nav_menu(array('theme_location' => 'header', 'menu_class' => 'right'));
    endif;
  ?>
</nav>