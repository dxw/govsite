<ul class="social-media">

  <?php

  for ($i = 0; $i < 6; $i++) {
    if ($url = get_option('social-media-'.$i.'-url-setting')) {
      $name = get_option('social-media-'.$i.'-name-setting');
      ?>
      <li>
        <a href="<?php echo esc_attr($url); ?>">
          <?php 
            if (!empty($name)) {
              foreach ($name as $key => $option)
                $options[$key] = $option;
          ?>
                  <span class="accessibility"><?php echo esc_attr($options[$key]); ?></span>
          <?php
            }
          ?>
        </a>
      </li>
      <?php
    }
  }

  ?>

</ul>
