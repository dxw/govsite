<section id="respond" class="respond">
  <div class="row">
    <div class="large-8 columns">

      <?php global $current_user; ?>

      <section id="comment-form" class="comment-form">
        <h3><?php comment_form_title(__('Leave a comment'), __('Leave a reply to %s')) ?></h3>

        <p class="cancel-comment-reply"><?php cancel_comment_reply_link() ?></p>

        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>

          <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(get_permalink())) ?></p>

        <?php else : ?>

          <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" role="form">

            <?php if (is_user_logged_in()) : ?>
              <p>
                <?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.'), get_option('siteurl'), $current_user->user_login) ?>
                <a href="<?php echo wp_logout_url(get_permalink()) ?>" title="Log out of this account">Log out &raquo;</a>
              </p>

            <?php else : ?>

              <?php $req = get_option( 'require_name_email' ) ?>

              <div class="form-group">
                <label for="author"><?php _e('Name', 'govsite') ?> <?php if ($req) _e('(required)', 'govsite') ?></label>
                <input type="text" class="form-control" name="author" id="author" value="<?php echo esc_attr($comment_author) ?>" size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
              </div>

              <div class="form-group">
                <label for="email"><?php _e('Email (will not be published', 'govsite') ?><?php if ($req) _e(', required', 'govsite') ?>)</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo esc_attr($comment_author_email) ?>" size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
              </div>

              <div class="form-group">
                <label for="url"><?php _e('Website', 'govsite') ?></label>
                <input type="url" class="form-control" name="url" id="url" value="<?php echo esc_attr($comment_author_url) ?>" size="22">
              </div>

            <?php endif ?>

            <div class="form-group">
              <label for="comment"><?php _e('Your comment', 'govsite') ?></label>
              <textarea name="comment" id="comment" class="form-control" rows="5" aria-required="true"></textarea>
            </div>

            <input name="submit" class="button" type="submit" id="submit" value="<?php _e('Submit comment', 'govsite') ?>">

            <?php comment_id_fields() ?>

            <?php do_action('comment_form', $post->ID) ?>
          </form>

        <?php endif ?>
      </section>

    </div>
  </div>
</section>
