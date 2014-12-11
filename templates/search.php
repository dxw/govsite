<div class="row">

  <div class="large-12 columns">

    <header class="page-header">
      <hgroup>
        <h1>You have searched for <strong><?php the_search_query(); ?></strong></h1>
      </hgroup>
    </header>

    <section class="page-element">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('partials/article-list-item'); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No results found. Search again?</p>
      <?php endif; ?>
    </section>

    <?php get_template_part('partials/pager') ?>

  </div>

</div>