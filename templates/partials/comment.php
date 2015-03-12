<div class="comment-meta">
  <span class="comment-author"><?php echo get_avatar($comment, $size = 32) ?><?php echo get_comment_author_link() ?></span>
  <time datetime="<?php echo get_comment_date('c') ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s', 'roots'), get_comment_date(),  get_comment_time()) ?></a></time>
</div>

<?php if ($comment->comment_approved == '0') : ?>
  <div class="alert-box" role="alert">
    <?php _e('Your comment is awaiting moderation.', 'roots') ?>
  </div>
<?php endif ?>

<div class="comment-text">
  <?php comment_text() ?>
  <?php edit_comment_link(__('(Edit comment)', 'roots'), '', '') ?>
</div>

<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
