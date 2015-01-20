<?php

function w_requested_template() {
  require(Whippet_Layout::$wordpress_template);
}

function w_template_warning() {
  ?>
  <div class="whippet alert template-warning" style="background: rgb(255,100,100); width: 100%; padding: 10px;"><h1>You're using a fallback template: <?php echo basename(Whippet_Layout::$wordpress_template); ?></h1> <p>Did you really mean to? If you can, define a specific template and use it. Like single-post.php.</p></div>
  <?php
}

function w_template_title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    }

    return __('Latest Posts', 'roots');
  }
  elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

    if ($term) {
      return apply_filters('single_term_title', $term->name);
    }

    if (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    }

    if (is_day()) {
      return sprintf(__('Daily Archives: %s', 'roots'), get_the_date());
    }

    if (is_month()) {
      return sprintf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
    }

    if (is_year()) {
      return sprintf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
    }

    if (is_author()) {
      $author = get_queried_object();
      return sprintf(__('Author Archives: %s', 'roots'), apply_filters('the_author', is_object($author) ? $author->display_name : null));
    }

    return single_cat_title('', false);
  }

  if (is_search()) {
    return sprintf(__('Search Results for %s', 'roots'), get_search_query());
  }

  if (is_404()) {
    return __('Not Found', 'roots');
  }

  return get_the_title();
}
