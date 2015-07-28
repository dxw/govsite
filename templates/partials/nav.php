<nav id="top-bar" class="top-bar" role="navigation" data-topbar>
  <button type="button" class="button-search show-for-medium-up"><span class="visually-hidden"><?php _e('Search', 'govsite') ?></span></button>

  <?php
    if (has_nav_menu('header')) :
      wp_nav_menu(array(
        'theme_location'  => 'header',
        'menu_class'      => 'menu',
        'depth'           => 2,
        'container_class' => 'top-bar-section',
      ));
    endif;
  ?>
</nav>
