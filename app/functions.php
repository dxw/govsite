<?php

/*
 * Libraries and support code
 */

require dirname(__FILE__) . '/lib/whippet/whippet.php';
require dirname(__FILE__) . '/lib/roots_walker_comment.class.php';


/*
 * WordPress core behaviour adjustments
 */

require dirname(__FILE__) . '/core_behaviour.php';


/*
 * Theme behaviour, media, assets and template tags
 */

require dirname(__FILE__) . '/theme/scripts.php';
require dirname(__FILE__) . '/theme/media.php';
require dirname(__FILE__) . '/theme/menus.php';
require dirname(__FILE__) . '/theme/widgets.php';

require dirname(__FILE__) . '/theme/helpers.php';  ## Needs more stuffs
require dirname(__FILE__) . '/theme/pagination.php'; ## TODO: This should be refactored into lib, and be flexibile enough for all projects' needs
require dirname(__FILE__) . '/theme/titles.php';
require dirname(__FILE__) . '/theme/theme-settings.php';
require dirname(__FILE__) . '/theme/breadcrumbs.php';
require dirname(__FILE__) . '/theme/admin.php';
require dirname(__FILE__) . '/theme/logo.php';
require dirname(__FILE__) . '/theme/favicon.php';


/*
 * Post types and additional fields
 */

require dirname(__FILE__) . '/posts/post_types.php';
require dirname(__FILE__) . '/posts/custom_fields.php';
