<?php
/* Template name: Contact page */

the_post();
?>

<main id="content" role="main" class="main">

  <?php get_template_part('partials/map') ?>

  <section class="contact-us">
    <div class="row">
      <div class="large-12 columns">

        <header class="page-header">
          <h1><?php the_title() ?></h1>
        </header>

        <div class="row">

          <div class="medium-8 columns">
            <article class="rte">
              <?php the_content() ?>
            </article>
          </div>

          <aside class="sidebar medium-4 columns" role="complementary">

            <?php if (get_field('phone_number') || get_field('email_address') || get_field('address')) : ?>

              <div class="address-panel">

                <header>
                  <h3>Contact details</h3>
                </header>

                <?php if (get_field('address')) : ?>
                  <address><?php the_field('address') ?></address>
                <?php endif; ?>

                <?php if (get_field('phone_number')) : ?>
                  <a class="contact-link phone"><?php the_field('phone_number') ?></a>
                <?php endif; ?>

                <?php if (get_field('email_address')) : ?>
                  <a class="contact-link email"><?php the_field('email_address') ?></a>
                <?php endif; ?>

              </div>

            <?php endif ?>

          </aside>

        </div>
      </div>
    </div>
  </section>

</main>
