<div class="row">

  <div class="large-12 columns">

    <header class="page-header">
      <div class="header-group">
        <h1><?php echo w_template_title(); ?></h1>
        <?php if(category_description()) :?>
          <?php echo category_description(); ?>
        <?php endif; ?>
      </div>
    </header>

    <div class="row">

      <div class="medium-8 large-8 columns">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/article-list-item'); ?>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php get_template_part('partials/pager') ?>

      </div>

      <aside class="medium-4 large-4 columns sidebar">

        <?php if ( is_category() || is_tag() ) {
          dynamic_sidebar('sidebar-primary');
        } ?>

      </aside>

    </div>

  </div>

</div>