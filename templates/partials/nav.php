<nav id="headermenu" role="navigation">
  <button type="button" class="button-search show-for-medium-up"><span class="accessibility">Search</span></button>
  <?php
    if (has_nav_menu('header')) :
      wp_nav_menu(array('theme_location' => 'header', 'depth' => 2,));
    endif;
  ?>
</nav>

<!--[if lt IE 8]>
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <div>
      <label class="screen-reader-text hidden-for-small-only hidden-for-medium-up" for="s">Search for:</label>
      <input type="text" value="<?php if (is_search()) { echo get_search_query(); } else { echo 'Search'; } ?>" name="s" id="s">
      <input type="submit" id="searchsubmit" value="Search">
    </div>
  </form>
<![endif]-->