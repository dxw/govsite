<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
  <div class="small-8 medium-9 large-9 columns search-field">
    <span class="icon-search"></span>
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> for something...">
  </div>
  <div class="small-4 medium-3 large-3 columns">
    <button type="submit" class="button-search-form"><?php _e('Search', 'roots'); ?></button>
  </div>
</form>
