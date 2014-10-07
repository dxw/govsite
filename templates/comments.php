<?php
  if (post_password_required()) { // TODO: Put me somewhere else
    return;
  }

 if (have_comments()) : ?>

  <section id="comments" class="col-md-12">
    <h3><?php printf(_n('One Response to &ldquo;%2$s&rdquo;', '%1$s Responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'roots'), number_format_i18n(get_comments_number()), get_the_title()); ?></h3>

    <ol class="media-list">
      <?php wp_list_comments(array('walker' => new Roots_Walker_Comment)); // TODO: What does this walker do, do we need it? How do we make sure this pulls through the comment partial? ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav>
      <ul class="pager">
        <?php if (get_previous_comments_link()) : ?>
          <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'roots')); ?></li>
        <?php endif; ?>
        <?php if (get_next_comments_link()) : ?>
          <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'roots')); ?></li>
        <?php endif; ?>
      </ul>
    </nav>
    <?php endif; ?>
  </section><!-- /#comments -->
<?php endif; ?>

<?php if (comments_open()) : ?>
  <?php get_template_part('partials/comment-form'); ?>
<?php endif; ?>
