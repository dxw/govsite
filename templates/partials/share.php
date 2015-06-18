<div class="share">
  <h3 class="hide-for-large-up">Share</h3>
  <ul>
    <li>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_guid($id); ?>" title="Facebook" class="facebook">
        <span class="visually-hidden">Share on Facebook</span>
      </a>
    </li>
    <li>
      <a href="https://twitter.com/home?status=<?php the_title(); ?>%20<?php the_guid($id); ?>" title="Twitter" class="twitter">
        <span class="visually-hidden">Share on Twitter</span>
      </a>
    </li>
    <li>
      <a href="mailto:?subject=Check%20out:%20<?php the_title(); ?>" title="E-mail" class="mail">
        <span class="visually-hidden">Share via email</span>
      </a>
    </li>
  </ul>
</div>
