<main id="content" role="main" class="main">

  <div class="row">

      <header class="large-12 column">
        <div class="header-group">
          <h1><?php echo bloginfo('name') ?></h1>
          <h2><?php echo bloginfo('description') ?></h2>
        </div>
      </header>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
          <?php get_template_part('partials/loop', 'article') ?>
        <?php endwhile ?>
      <?php endif ?>

      <div class="large-12 column">
        <?php get_template_part('partials/pager') ?>
      </div>

  </div>

</main>
