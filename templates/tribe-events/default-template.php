<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<div class="row">

  <div class="large-12 columns">

    <div id="tribe-events-pg-template" class="page-element">

      <?php tribe_events_before_html(); ?>
      <?php tribe_get_view(); ?>
      <?php tribe_events_after_html(); ?>

    </div>

  </div>

</div>
