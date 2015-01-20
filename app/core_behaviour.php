<?php

/*
 * Make Atom the default feed format, and remove other formats from <head>
 */

add_action('init', 'govsite_core_behaviour_init');
function govsite_core_behaviour_init() {
    add_filter('default_feed', 'govsite_core_behaviour_init_default_feed');

    remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
    remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
    remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
}
function govsite_core_behaviour_init_default_feed() {
  return 'atom';
}

add_action('wp_head', 'govsite_core_behaviour_wp_head');
function govsite_core_behaviour_wp_head() {
    ?>
    <link rel="alternate" type="application/atom+xml" title="<?php echo get_bloginfo('name') ?> Feed" href="<?php echo esc_attr(get_feed_link('atom')) ?>">
    <?php
}
