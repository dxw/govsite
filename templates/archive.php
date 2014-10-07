<div class="row">
  <header class="large-12 column">
    <hgroup>
      <h1><?php echo w_template_title(); ?></h1>
      <?php if(category_description()) :?>
        <h2><?php echo category_description(); ?></h2>
      <?php endif; ?>
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