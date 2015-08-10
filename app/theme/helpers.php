<?php

// Google Analytics
add_action('wp_footer', 'govsite_helpers_wp_footer');
function govsite_helpers_wp_footer() {
  if ($url = get_option('ga-setting')) : ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?php echo esc_attr($url); ?>', 'auto');
      ga('send', 'pageview');

    </script>
  <?php endif;
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
add_theme_support( 'title-tag' );

if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
  }
  add_action( 'wp_head', 'theme_slug_render_title' );
}

// Archive page
function show_archived_sticky_posts($type = 'sticky') {
  global $wp_query;
  $sticky_posts = get_option('sticky_posts');

  if (get_query_var('paged') < 2) {

    $q = $wp_query->query;
    $q['post__in'] = $sticky_posts;
    $q['posts_per_page'] = -1;
    query_posts($q);

    if ($sticky_posts) {
      while (have_posts()) {
        the_post();
        get_template_part('partials/loop', $type);
      }
    }

    wp_reset_query();

  }
}

function show_archived_not_sticky_posts($type = 'article') {
  global $wp_query;

  $q = $wp_query->query;
  $q['post__not_in'] = get_option('sticky_posts');
  query_posts($q);

  while (have_posts()) {
    the_post();
    get_template_part('partials/loop', $type);
  }

  wp_reset_query();

}
