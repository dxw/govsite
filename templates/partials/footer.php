<nav class="footer-nav">
  <?php
    if (has_nav_menu('footer')) :
      wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'footer'));
    endif;
  ?>
</nav>
<div class="copyright">
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</div>