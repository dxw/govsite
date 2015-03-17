<form method="get" class="search-form" action="<?php echo home_url('/'); ?>" role="search">
  
  <div class="search-field small-8 medium-9 columns">
    <span class="icon-search"></span>
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="Search for something..." id="site-search">
  </div>

  <div class="small-4 medium-3 columns">
    <button type="submit" class="button-search-form">Search</button>
  </div>

</form>
