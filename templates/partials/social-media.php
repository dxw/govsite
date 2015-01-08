<ul class="social-media">

  <?php

  for ($i = 0; $i < 6; $i++) {
    if ($url = get_option('social-media-'.$i.'-url-setting')) {
      ?>
      <li>
        <a href="<?php echo esc_attr($url); ?>"></a>
      </li>
      <?php
    }
  }

  ?>

</ul>
