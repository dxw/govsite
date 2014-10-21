<?php

while (have_posts()) : the_post();

  get_template_part('partials/post');

  comments_template();

  get_template_part('partials/bottom-banner');
  
endwhile;