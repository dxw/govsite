<nav>
  <?php
    if (has_nav_menu('footer')) :
      wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'right'));
    endif;
  ?>
</nav>