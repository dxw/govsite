<ul class="social-media">

  <?php for ($i = 0; $i < 6; $i++) : ?> 
  
    <?php if ($url = get_option('social-media-'.$i.'-url-setting')): ?>
      <?php $name = get_option('social-media-'.$i.'-name-setting'); ?>
      <li>
        <a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($name); ?>">
          <span class="visually-hidden"><?php echo esc_attr($name); ?></span>
        </a>
      </li>
    <?php endif; ?>
    
  <?php endfor; ?>
  
</ul>
