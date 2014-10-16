<?php

while (have_posts()) : the_post();
  get_template_part('partials/post');

  get_template_part('comments');
endwhile;