<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/templates/assets/img/dxw.png" />

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <header class="site-header">
    <div class="row">
      <div class="large-12 column">
        <div class="row">
          <div class="medium-12 large-8 columns right">
            <div class="row">
              <div class="small-12 columns">
                <a href="#headermenu" class="nav-toggle hidden-for-medium-up right"></a>
                <?php get_template_part('partials/nav'); ?>
              </div>
              <div class="small-12 columns">
                <?php get_template_part('partials/social-media'); ?>
              </div>
            </div>
          </div>
          <div class="medium-12 large-4 columns left">
            <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php w_requested_template(); ?>

  <footer class="site-footer">

    <div class="row">
      <div class="small-12 large-centered columns">
        <?php get_template_part('partials/nav-footer'); ?>
      </div>
    </div>

    <div class="row">

      <div class="large-12 columns">

        <hr class="footer">

        <div class="row">

          <div class="small-6 columns">
            <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> copyright</small>
          </div>

          <div class="small-6 columns">
            <?php if ( get_option('footer-link-text-setting') ) { ?>
              <small class="right"><?php echo get_option('footer-link-text-setting'); ?> <a href="<?php echo get_option('footer-link-url-setting'); ?>"><?php echo get_option('footer-link-cta-setting'); ?></a></small>
            <?php } ?>
          </div>

        </div>

      </div>

    </div>

  </footer>

  <?php wp_footer(); ?>
</body>
</html>
