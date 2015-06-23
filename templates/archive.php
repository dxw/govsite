<?php global $wp_query ?>

<main id="content" role="main" class="main">

  <div class="row">
    <div class="large-12 columns">

      <header class="page-header">
        <div class="header-group">
          <h1><?php echo w_template_title() ?></h1>

          <?php if(category_description()) : ?>
            <?php echo category_description() ?>
          <?php endif ?>
        </div>
      </header>

      <div class="row">

        <div class="medium-8 large-8 columns">
          <?php

          show_archived_sticky_posts();
          show_archived_not_sticky_posts();

          get_template_part('partials/nav', 'pager');

          ?>
        </div>

        <aside class="sidebar medium-4 columns" role="complementary">
          <?php if (is_category() || is_tag()) : ?>
            <?php dynamic_sidebar('sidebar-primary') ?>
          <?php endif ?>
        </aside>

      </div>

    </div>
  </div>

</main>
