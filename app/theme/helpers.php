<?php

// Google Analytics
add_action('wp_footer', function() {
  ?>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'TRACKING_CODE']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
<?php
});

// Function to trim page content
function trim_content($characters) {
  $content = get_the_content();
  $trimmed_content = wp_trim_words( $content, $characters, ' ...' );
  echo $trimmed_content;
}

// Featured images in posts and pages
add_theme_support( 'post-thumbnails' );
