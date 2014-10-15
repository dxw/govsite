<?php

  while (have_posts()) : the_post();
    get_template_part('partials/page');
    get_template_part('partials/bottom-banner');
  endwhile;
