<div class="row">

  <div class="large-9 columns">

    <main id="content" role="main">

      <header class="page-header">
        <div class="header-group">
          <h1>You have searched for <strong><?php the_search_query(); ?></strong></h1>
        </div>
      </header>

      <div class="page-element">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/search-item'); ?>
          <?php endwhile; ?>
        <?php else: ?>
          <p>No results found. Search again?</p>
        <?php endif; ?>
      </div>

      <?php get_template_part('partials/pager') ?>

    </main>

  </div>

</div>