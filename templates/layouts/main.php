<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/templates/assets/img/dxw.png" />

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <!--[if lt IE 9]>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
    <script src="http://html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
  <![endif]-->

</head>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert-box alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div>
  <![endif]-->

  <header class="site-header">
    <div class="row">
      <div class="small-12 medium-4 large-4 columns">
        <?php $logo = get_option('logo-setting'); ?>
        <h1 class="left"><a href="/" title="<?php bloginfo('name'); ?>"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?> logo"></a></h1>
        <a href="#headermenu" class="nav-toggle hidden-for-medium-up right"></a>
      </div>
      <div class="small-12 medium-8 large-8 columns">
        <div class="row">
          <div class="medium-12 large-12 columns">
            <?php get_template_part('partials/nav'); ?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php get_template_part('partials/header-search'); ?>

  <main role="main">
    <?php w_requested_template(); ?>
  </main>

  <footer class="site-footer">

    <section class="navigation">
      <div class="row">
        <div class="medium-6 large-6 columns">
          <?php get_template_part('partials/nav-footer'); ?>
        </div>
        <div class="medium-6 large-6 columns">
          <?php if ( get_option('footer-link-text-setting') ) { ?>
            <small><?php echo get_option('footer-link-text-setting'); ?> <a href="<?php echo get_option('footer-link-url-setting'); ?>"><?php echo get_option('footer-link-cta-setting'); ?></a></small>
          <?php } ?>
        </div>
      </div>
    </section>

    <section class="credits">
      <div class="row">
        <div class="small-6 large-6 columns">
          <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> copyright</small>
        </div>
        <div class="medium-6 large-6 columns show-for-medium-up">
          <?php get_template_part('partials/social-media'); ?>
        </div>
      </div>
    </section>

  </footer>

  <?php wp_footer(); ?>

</body>
</html>
