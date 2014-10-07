<?php

while (have_posts()) : the_post();
  get_template_part('partials/article');

  comments_template('comments.php');
endwhile;