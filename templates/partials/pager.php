<?php if ($wp_query->max_num_pages > 1) : ?>

  <div class="pager">
    <?php pagination(); ?>
  </div>

<?php endif; ?>