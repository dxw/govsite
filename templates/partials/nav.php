<nav id="headermenu" role="navigation">
  <button type="button" class="button-search show-for-medium-up"></button>
  <?php
    if (has_nav_menu('header')) :
      wp_nav_menu(array('theme_location' => 'header'));
    endif;
  ?>
</nav>