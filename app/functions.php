<?php

/*
 * Require autoload file
 */
require dirname(__FILE__) . '/../vendor/autoload.php';

/*
 * Libraries and support code
 */

require dirname(__FILE__) . '/lib/theme_active.php';

require dirname(__FILE__) . '/lib/whippet/whippet.php';
require dirname(__FILE__) . '/lib/pagination.php';
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
require dirname(__FILE__) . '/theme/helpers.php';
require dirname(__FILE__) . '/theme/titles.php';
require dirname(__FILE__) . '/theme/theme_settings.php';
require dirname(__FILE__) . '/theme/breadcrumbs.php';
require dirname(__FILE__) . '/theme/admin.php';
require dirname(__FILE__) . '/theme/logo.php';


/*
 * Post types and additional fields
 */

require dirname(__FILE__) . '/posts/custom_fields.php';
