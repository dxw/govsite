<nav id="headermenu" role="navigation">
  <a href="#" class="button-search"></a>
  <?php
    if (has_nav_menu('header')) :
      wp_nav_menu(array('theme_location' => 'header'));
    endif;
  ?>
</nav>