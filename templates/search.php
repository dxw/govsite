<main id="content" role="main" class="main">

  <section class="search-results">
    <div class="row">
      <div class="large-9 columns">

        <header class="page-header">
          <h1><?php printf( __('You have searched for <strong>%s</strong>', 'govsite'), get_search_query() ) ?></h1>
        </header>

        <div class="page-element">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
              <?php get_template_part('partials/loop', 'search') ?>
            <?php endwhile ?>
          <?php else: ?>
            <p><?php _e('No results found. Search again?', 'govsite') ?></p>
          <?php endif ?>
        </div>

        <?php get_template_part('partials/nav', 'pager') ?>

      </div>
    </div>
  </section>

</main>
