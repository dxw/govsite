<main id="content" role="main" class="main">

  <div class="row">
    <div class="large-12 columns">

      <header class="page-header">
        <div class="header-group">
          <h1><?php _e('Page not found', 'govsite') ?></h1>
        </div>
      </header>

      <div class="row">
        <div class="medium-8 columns">
          <h4><?php _e('Sorry, but the page you were trying to view does not exist.', 'govsite') ?></h4>
          <ul>
            <li><?php _e('We might have removed the page.', 'govsite') ?></li>
            <li><?php _e('The link you clicked might be old.', 'govsite') ?></li>
            <li><?php _e('You might have accidentally typed the wrong URL in the address bar.', 'govsite') ?></li>
          </ul>
          <p><?php _e('Try retyping the URL again  or use search in the header to find what you\'re looking for.', 'govsite') ?></p>
          <a href="<?php echo home_url( '/' ) ?>" class="button"><?php _e('Return to homepage', 'govsite') ?></a>
        </div>

        <aside class="medium-4 columns show-for-medium-up">
          <span class="error-image"><?php _e('404', 'govsite') ?></span>
        </aside>

      </div>

    </div>
  </div>

</main>
