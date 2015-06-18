<main id="content" role="main" class="main">

  <?php while (have_posts()) : the_post();

    get_template_part('partials/content', 'post');
    comments_template();
    get_template_part('partials/banner', 'bottom');

  endwhile; ?>

</main>
