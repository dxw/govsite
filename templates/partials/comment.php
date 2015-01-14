<div class="media-body">
  <div class="comment-author vcard">
    <?php echo get_avatar($comment, $size = 32) ?>
    <span class="fn"><?php echo get_comment_author_link() ?></span>
  </div>
  <div class="comment-meta">
    <time datetime="<?php echo get_comment_date('c') ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s', 'roots'), get_comment_date(),  get_comment_time()) ?></a></time>
    <?php edit_comment_link(__('(Edit)', 'roots'), '', '') ?>
  </div>

  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert-box">
      <?php _e('Your comment is awaiting moderation.', 'roots') ?>
    </div>
  <?php endif ?>

  <div class="comment-text">
    <?php comment_text() ?>
  </div>

  <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
