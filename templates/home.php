<div class="row">
  <header class="large-12 column">
    <hgroup>
      <h1><?php echo bloginfo('name'); ?></h1>
      <h2><?php echo bloginfo('description'); ?></h2>
    </hgroup>
  </header>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('partials/article-list-item'); ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <div class="large-12 column">
    <?php get_template_part('partials/pager') ?>
  </div>
</div> 