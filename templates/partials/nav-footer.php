<nav class="text-center">
  <?php
    if (has_nav_menu('footer')) :
      wp_nav_menu(array('theme_location' => 'footer'));
    endif;
  ?>
</nav>