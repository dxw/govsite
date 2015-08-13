<?php

function pagination($q = null, $mode = null) {
  global $wp_query;
  global $paged;

  if($q === null) {
    $q = $wp_query;
  }

  if($q->is_singular()) {
    return;
  }

  $args = $q->query;

  $max = intval( $q->max_num_pages );
  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

  /** Stop execution if there's only 1 page */
  if($max <= 1) {
    return;
  }

  $pagination = new \Dxw\Pagination($paged, $max, 2, 1, function ($n) use ($args) { $args['paged'] = $n; return add_query_arg($args, get_bloginfo('url')); });

  echo $pagination->render();
}
