<nav class="nav-footer" role="navigation">
  <?php
    if (has_nav_menu('footer')) :
      wp_nav_menu(array(
        'theme_location' => 'footer',
        'depth'          => 1,
      ));
    endif;
  ?>
</nav>
