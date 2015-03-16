<ul class="social-media">
  <?php for ($i = 0; $i < 6; $i++) : ?> 
    <?php if ($url = get_option('social-media-'.$i.'-url-setting')) :
    $name = get_option('social-media-'.$i.'-name-setting');
    ?>
      <li>
        <?php if (!empty($name)) : ?> 
          <?php foreach ($name as $key => $option) :
          $options[$key] = $option;
          ?>
            <a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($options[$key]); ?>">
              <span class="accessibility"><?php echo esc_attr($options[$key]); ?></span>
            </a>
          <?php endforeach ?>
        <?php endif ?>
      </li>
    <?php endif ?>
  <?php endfor ?>
</ul>