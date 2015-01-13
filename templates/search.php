<div class="row">

  <div class="large-9 columns">

    <header class="page-header">
      <div class="header-group">
        <h1>You have searched for <strong><?php the_search_query(); ?></strong></h1>
      </div>
    </header>

    <section class="page-element">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('partials/search-item'); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No results found. Search again?</p>
      <?php endif; ?>
    </section>

    <?php get_template_part('partials/pager') ?>

  </div>

</div>