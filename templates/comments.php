<?php if (post_password_required()) :
  return;
endif ?>

<?php if (have_comments()) : ?>

  <section class="comments">
    <div class="row">
      <div class="large-8 columns">

        <button type="button" class="button comment-scroll"><?php _e('Comment', 'govsite') ?></button>

        <h3><?php printf( _n('One response to &ldquo;%2$s&rdquo;', '%1$s comments', get_comments_number()), number_format_i18n(get_comments_number()), get_the_title()) ?></h3>

        <ol class="media-list">
          <?php wp_list_comments(array('walker' => new Roots_Walker_Comment())) ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>

          <ul class="pager">
            <?php if (get_previous_comments_link()) : ?>
              <li class="previous"><?php previous_comments_link(__('&larr; Older comments')) ?></li>
            <?php endif ?>

            <?php if (get_next_comments_link()) : ?>
              <li class="next"><?php next_comments_link(__('Newer comments &rarr;')) ?></li>
            <?php endif ?>
          </ul>

        <?php endif ?>

      </div>
    </div>
  </section>

<?php endif ?>

<?php if (comments_open()) : ?>
  <?php get_template_part('partials/comment-form') ?>
<?php endif ?>
