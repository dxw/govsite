<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    // Get favicon from Media Library
    function get_attachment_url_by_slug( $slug ) {
    $args = array(
      'post_type' => 'attachment',
      'name' => sanitize_title($slug),
      'posts_per_page' => 1,
      'post_status' => 'inherit',
    );
    $_favicon = get_posts( $args );
    $favicon = $_favicon ? array_pop($_favicon) : null;
    return $favicon ? wp_get_attachment_url($favicon->ID) : '';
  }
  $favicon_url = get_attachment_url_by_slug('favicon');
  ?>
  <link rel="icon" type="image/png" href="<?php echo $favicon_url ?>" />

  <?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/../assets/js/ie/browser-support.js"></script>
  <![endif]-->

</head>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert-box alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div>
  <![endif]-->

  <header class="site-header">
    <div class="row">
      <div class="small-12 medium-3 large-3 columns">
        <?php $logo = get_option('logo-setting'); ?>
        <a href="/" title="<?php bloginfo('name'); ?>" class="left logo"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?> logo"></a>
        <div class="toggle-container toggle-topbar hidden-for-medium-up right">
          <a href="#headermenu" class="nav-toggle"><span class="accessibility">Menu</span></a>
        </div>
      </div>
      <div class="small-12 medium-9 large-9 columns top-bar-nav">
            <?php get_template_part('partials/nav'); ?>
      </div>
    </div>
  </header>

  <?php get_template_part('partials/header-search'); ?>

  <?php w_requested_template(); ?>

  <footer class="site-footer">

    <div class="navigation">
      <div class="row">
        <div class="medium-6 large-6 columns">
          <?php get_template_part('partials/nav-footer'); ?>
        </div>
        <div class="medium-6 large-6 columns">
          <?php if ( get_option('footer-link-text-setting') ) { ?>
            <p><?php echo get_option('footer-link-text-setting'); ?> <a href="<?php echo get_option('footer-link-url-setting'); ?>"><?php echo get_option('footer-link-cta-setting'); ?></a></p>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="credits">
      <div class="row">
        <div class="small-6 large-6 columns">
          <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> copyright</small>
        </div>
        <div class="medium-6 large-6 columns show-for-medium-up">
          <?php get_template_part('partials/social-media'); ?>
        </div>
      </div>
    </div>

  </footer>

  <?php wp_footer(); ?>

</body>
</html>
