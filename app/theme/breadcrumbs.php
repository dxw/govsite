<?php

function the_breadcrumbs($main_query = true) {
  $bc = new Breadcrumbs(get_the_ID(), $main_query, array(
    'post' => array(
      'hide-post-type' => true,
      'use-term-as-ancestor' => 'category',
    ),
    'page' => array(
      'hide-post-type' => true,
    ),
    'attachment' => array(
      'hide-post-type' => true,
      'force-hierarchical' => true,
    ),
    'announcement' => array(
      'use-term-as-ancestor' => 'announcement-type',
    ),
    'publication' => array(
      'use-term-as-ancestor' => 'subject',
    ),
  ));
  echo $bc->getHTML();
}

class Breadcrumbs {
  function __construct($post_id, $main_query, $type_config) {
    $this->postId = $post_id;
    $this->mainQuery = $main_query;

    $post_type = get_post_type($this->postId);
    $_post_type = get_post_type_object($post_type);

    $this->trailIds = array();

    // Handle archive pages
    if ($this->mainQuery && is_search()) {

      $this->trailIds[] = array(
        'type' => 'link',
        'href' => '#',
        'text' => 'Search results for "'.esc_html(get_search_query()).'"',
      );

    } elseif ($this->mainQuery && is_post_type_archive()) {

      $t = get_post_type_object(get_query_var('post_type'));
      $this->trailIds[] = array(
        'type' => 'link',
        'href' => '#',
        'text' => $t->labels->name,
      );

    } elseif ($this->mainQuery && is_tax() || is_tag() || is_category()) {

      $obj = get_queried_object();

      $this->trailIds[] = array(
        'type' => 'link',
        'href' => '#',
        'text' => $obj->name,
      );

    } elseif ($this->mainQuery && is_archive()) {

      $this->trailIds[] = array(
        'type' => 'link',
        'href' => '#',
        'text' => 'Archives',
      );

    } else {
      // Handle single posts

      // Add this post
      $this->trailIds[] = array(
        'type' => 'post',
        'id' => $post_id,
      );

      // Add the ancestors (or a term)
      if (isset($type_config[$post_type]['use-term-as-ancestor'])) {
        $tax = $type_config[$post_type]['use-term-as-ancestor'];
        $terms = get_the_terms($this->postId, $tax);

        if (is_array($terms) && count($terms) > 0) {
          $term = array_pop($terms);

          $link = get_term_link($term->term_id, $tax);

          if (!is_wp_error($link)) {
            $this->trailIds[] = array(
              'type' => 'link',
              'href' => $link,
              'text' => $term->name,
            );
          }
        }
      } elseif ((isset($type_config[$post_type]['force-hierarchical']) && $type_config[$post_type]['force-hierarchical']) || (is_object($_post_type) && $_post_type->hierarchical)) {
        $this->trailIds = array_merge($this->trailIds, $this->getAncestors($post_id));
      }

      // Add the post type if it's not on the exclusion list
      if (!(isset($type_config[$post_type]['hide-post-type']) && $type_config[$post_type]['hide-post-type'])) {
        $this->trailIds[] = array(
          'type' => 'post_type',
          'slug' => $post_type,
        );
      }
    }

    // Add the site name
    $this->trailIds[] = array(
      'type' => 'link',
      'href' => get_bloginfo('url'),
      'text' => get_bloginfo('name'),
    );
  }

  function getHTML() {
    $items = array();

    for ($i = count($this->trailIds)-1 ; $i >= 0 ; $i--) {
      $item = $this->trailIds[$i];

      $item_is_current = $i === 0;

      if ($item['type'] === 'post') {

        if (!(!$this->mainQuery && $item_is_current)) {
          $items[] = $this->getItem(get_permalink($item['id']), get_the_title($item['id']), $item_is_current);
        }
      } elseif ($item['type'] === 'post_type') {
        $post_type = get_post_type_object($item['slug']);
        if (is_object($post_type)) {
          $items[] = $this->getItem(get_post_type_archive_link($item['slug']), $post_type->labels->name, $item_is_current);
        }
      } elseif ($item['type'] === 'link') {
        $items[] = $this->getItem($item['href'], $item['text'], $item_is_current);
      }
    }

    return '<ul class="breadcrumbs">'.implode($items, '').'</ul>';
  }

  function getItem($href, $text, $current=false) {
    if ($current) {
      return '<li class="active">'.esc_html($text).'</li>';
    }
    return '<li><a href="'.esc_attr($href).'">'.esc_html($text).'</a></li>';
  }

  function getAncestors($post_id) {
    $a = array();

    while (true) {
      $parent = (int)wp_get_post_parent_id($post_id);
      if ($parent < 1) {
        break;
      }
      $post_id = $parent;
      $a[] = array(
        'type' => 'post',
        'id' => $post_id,
      );
    }

    return $a;
  }
}