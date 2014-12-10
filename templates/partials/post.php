<div class="row">

  <div class="large-12 columns">

    <header class="page-header">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part('partials/date'); ?>
    </header>

    <?php if( get_field('show_featured_image') == true ) { ?>

      <section class="page-element">

        <figure class="featured">
          <?php the_post_thumbnail('full'); ?>
        </figure>
        
      </section>

    <?php } ?>

    <?php if( get_field('introduction_text') ) { ?>

      <section class="page-element">

        <div class="row">

          <div class="medium-8 columns">
            <?php if ( get_field('display_video') == false ) { ?>
              <figure>
                <?php the_post_thumbnail('large'); ?>
              </figure>
            <?php } else { ?>
              <div class="flex-video">
                <?php _e( wp_oembed_get( get_field('video_url') ) ); ?>
              </div>
            <?php } ?>
          </div>

          <div class="medium-4 columns">

            <article class="main-content">
              <?php echo get_field('introduction_text'); ?>
            </article>

          </div>
          
        </div>

      </section>

    <?php } ?>

    <section class="page-element">

      <div class="row">

        <div class="medium-8 columns">
          <?php 

            the_content();
            get_template_part('partials/share');

          ?>
        </div>

        <?php if (get_field('related_content')) { ?>

          <div class="medium-4 columns">

            <aside class="sidebar panel banner">
              <h3>Related content</h3>
              <?php echo get_field('related_content'); ?>
            </aside>

          </div>

        <?php } ?>

      </div>

    </section>

  </div>

</div>
