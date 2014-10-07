<?php

/*
 * Make Atom the default feed format, and remove other formats from <head>
 */

add_action('init', function() {
    add_filter('default_feed', function() { return 'atom'; });

    remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
    remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
    remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
});

add_action('wp_head', function () {
    ?>
    <link rel="alternate" type="application/atom+xml" title="<?php echo get_bloginfo('name') ?> Feed" href="<?php echo esc_attr(get_feed_link('atom')) ?>">
    <?php
});
