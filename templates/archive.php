<div class="row">

  <div class="large-12 columns">

    <header class="page-header">
      <hgroup>
        <h1><?php echo w_template_title(); ?></h1>
        <?php if(category_description()) :?>
          <?php echo category_description(); ?>
        <?php endif; ?>
      </hgroup>
    </header>

    <div class="row">

      <div class="medium-8 columns">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/article-list-item'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="medium-4 columns">
      </div>

    </div>

    <?php get_template_part('partials/pager') ?>

  </div>

</div>