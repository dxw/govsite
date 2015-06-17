<main id="content" role="main" class="main">

  <div class="row">
    <div class="large-12 columns">

      <header class="page-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <div class="page-element row">
        <div class="medium-8 large-8 columns">
          <article class="rte">
            <?php if (has_post_thumbnail()) : ?>
              <figure>
                <?php the_post_thumbnail('large'); ?>
              </figure>
            <?php endif ?>
            <?php the_content(); ?>
          </article>
        </div>
      </div>

    </div>
  </div>

</main>
