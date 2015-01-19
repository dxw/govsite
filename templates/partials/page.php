<div class="row">

  <div class="large-12 columns">

    <main id="content" role="main">

      <header class="page-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <div class="page-element row">

        <div class="medium-8 large-8 columns">

          <article>
            <?php if ( has_post_thumbnail() ) { ?>
              <figure>
                <?php the_post_thumbnail('large'); ?>
              </figure>
            <?php } ?>

           <?php the_content(); ?>
         </article>

        </div>        

      </div>

    </main>

  </div>

</div>
