<?php

// Google Analytics
add_action('wp_footer', 'govsite_helpers_wp_footer');
function govsite_helpers_wp_footer() {
  ?>
  <?php if ($url = get_option('ga-setting')) { ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?php echo esc_attr($url); ?>', 'auto');
      ga('send', 'pageview');

    </script>
  <?php } ?>
<?php
}

// Excerpt length
function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Excerpt more
function new_excerpt_more( $more ) {
  return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Featured images in posts and pages
add_theme_support( 'post-thumbnails' );
