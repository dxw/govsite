<div class="comment-meta">
  <span class="comment-author">
    <?php echo get_avatar($comment, $size = 32) ?><span class="visually-hidden">Comment from </span><?php echo get_comment_author_link() ?>
  </span>
  <time datetime="<?php echo get_comment_date('c') ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date('F jS Y'),  get_comment_time()) ?></a></time>
</div>

<?php if ($comment->comment_approved == '0') : ?>
  <div class="alert-box" role="alert">Your comment is awaiting moderation.</div>
<?php endif ?>

<div class="comment-text">
  <?php comment_text() ?>
  <?php edit_comment_link(__('(Edit comment)'), '', '') ?>
</div>

<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
