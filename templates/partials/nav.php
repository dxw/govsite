<nav id="headermenu" role="navigation">
  <button type="button" class="button-search show-for-medium-up"></button>
  <?php
    if (has_nav_menu('header')) :
      wp_nav_menu(array('theme_location' => 'header'));
    endif;
  ?>
</nav>

<!--[if lt IE 8]>
  <form role="search" method="get" id="searchform" class="searchform" action="http://baklava.local:8000/">
    <div>
      <label class="screen-reader-text hidden-for-small-only hidden-for-medium-up" for="s">Search for:</label>
      <input type="text" value="" name="s" id="s">
      <input type="submit" id="searchsubmit" value="Search">
    </div>
  </form>
<![endif]-->