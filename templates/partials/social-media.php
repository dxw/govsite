<?php if (get_field('profile_1')) { ?>

  <ul class="visible-for-medium-up right social-media">

    <?php if (get_field('profile_1')) { 
      $field1 = get_field_object('profile_1');
      $value1 = get_field('profile_1');
      $label1 = $field1['choices'][$value1];
    ?>
      <li>
        <a href="<?php the_field('profile_1_url'); ?>" class="<?php echo get_field('profile_1'); ?>" title="Join us on <?php echo $label1; ?>"></a>
      </li>
    <?php } ?>

    <?php if (get_field('profile_2')) {
      $field2 = get_field_object('profile_2');
      $value2 = get_field('profile_2');
      $label2 = $field2['choices'][$value2];
    ?>
      <li>
        <a href="<?php the_field('profile_2_url'); ?>" class="<?php echo get_field('profile_2'); ?>" title="Join us on <?php echo $label2; ?>"></a>
      </li>
    <?php } ?>

    <?php if (get_field('profile_3')) {
      $field3 = get_field_object('profile_3');
      $value3 = get_field('profile_3');
      $label3 = $field3['choices'][$value3];
    ?>
      <li>
        <a href="<?php the_field('profile_3_url'); ?>" class="<?php echo get_field('profile_3'); ?>" title="Join us on <?php echo $label3; ?>"></a>
      </li>
    <?php } ?>

  </ul>

<?php } ?>