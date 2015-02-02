<section class="share">
  <h3 class="hide-for-large-up">Share</h3>
  <ul>
    <li>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_guid($id); ?>" title="Facebook" class="facebook"></a>
    </li>
    <li>
      <a href="https://twitter.com/home?status=<?php the_title(); ?>%20<?php the_guid($id); ?>" title="Twitter" class="twitter"></a>
    </li>
    <li>
      <a href="mailto:?subject=Check%20out:%20<?php the_title(); ?>" title="E-mail" class="mail"></a>
    </li>
  </ul>
</section>