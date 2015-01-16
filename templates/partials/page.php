<div class="row">

  <div class="large-12 columns">

    <main id="content" role="main">

      <header class="page-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <section class="page-element">

        <article class="row">

          <div class="medium-8 large-8 columns">

            <?php if ( has_post_thumbnail() ) { ?>
              <figure>
                <?php the_post_thumbnail('large'); ?>
              </figure>
            <?php } ?>

           <?php the_content(); ?>

          </div>

        </article>

      </section>

    </main>

  </div>

</div>
