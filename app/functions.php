<?php

/*
 * Libraries and support code
 */

require __DIR__ . '/lib/whippet/whippet.php';
require __DIR__ . '/lib/roots_walker_comment.class.php';


/*
 * WordPress core behaviour adjustments
 */

require __DIR__ . '/core_behaviour.php';


/*
 * Theme behaviour, media, assets and template tags
 */

require __DIR__ . '/theme/scripts.php';
require __DIR__ . '/theme/media.php';
require __DIR__ . '/theme/menus.php';
require __DIR__ . '/theme/widgets.php';

require __DIR__ . '/theme/helpers.php';  ## Needs more stuffs
require __DIR__ . '/theme/pagination.php'; ## TODO: This should be refactored into lib, and be flexibile enough for all projects' needs
require __DIR__ . '/theme/titles.php';


/*
 * Post types and additional fields
 */

require __DIR__ . '/posts/post_types.php';
require __DIR__ . '/posts/custom_fields.php';
