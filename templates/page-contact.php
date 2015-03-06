<?php 
/* Template name: Contact page */

the_post(); 

?>
<main id="content" role="main" class="main">

  <?php if ( get_field('google_maps_url') ) { ?>
  <div class="map">
    <iframe src="<?php the_field('google_maps_url'); ?>" width="100%" height="300" frameborder="0" style="border:0"></iframe>
  </div>
  <?php } ?>

  <div class="row">

    <div class="large-12 columns">

      <header class="page-header">
        <h1><?php the_title(); ?></h1>
      </header>

      <div class="page-element row">

        <div class="medium-8 large-8 columns">

          <?php the_content(); ?>

        </div>

        <aside class="medium-4 large-4 columns sidebar" role="complementary">

          <?php if ( get_field('phone_number') || get_field('email_address') || get_field('address') ) { ?>

          <section class="sidebar-content">

            <header>
              <h3>Contact details</h3>
            </header>

            <?php if ( get_field('address') ) { ?>
            <address><?php the_field('address'); ?></address>
            <?php } ?>

            <?php if ( get_field('phone_number') ) { ?>
            <a class="contact-link phone"><?php the_field('phone_number'); ?></a>
            <?php } ?>

            <?php if ( get_field('email_address') ) { ?>
            <a class="contact-link email"><?php the_field('email_address'); ?></a>
            <?php } ?>

          </section>

          <?php } ?>

        </aside>

      </div>

    </div>

  </div>

</main>