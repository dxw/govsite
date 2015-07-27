<?php

if( ! function_exists('govsite_register_base_custom_fields') ) :

  function govsite_register_base_custom_fields() {

    // Contact page template - contact details
    register_field_group(array (
      'id' => 'acf_contact-details',
      'title' => 'Contact details',
      'fields' => array (
        array (
          'key' => 'field_5481ccc154188',
          'label' => 'Address',
          'name' => 'address',
          'type' => 'textarea',
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => '',
          'formatting' => 'br',
        ),
        array (
          'key' => 'field_5481cce354189',
          'label' => 'Phone number',
          'name' => 'phone_number',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5481ccf45418a',
          'label' => 'Email address',
          'name' => 'email_address',
          'type' => 'email',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-contact.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'side',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

    // Post - related content sidebar
    register_field_group(array (
      'id' => 'acf_related-content',
      'title' => 'Related content',
      'fields' => array (
        array (
          'key' => 'field_543ff29221d11',
          'label' => 'Related content',
          'name' => 'related_content',
          'type' => 'wysiwyg',
          'instructions' => 'Add related content as unordered list',
          'default_value' => '',
          'toolbar' => 'basic',
          'media_upload' => 'no',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'no_box',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

    // Post - video with some comments
    register_field_group(array (
      'id' => 'acf_videoimage-and-introduction',
      'title' => 'Video/image and introduction',
      'fields' => array (
        array (
          'key' => 'field_5441444c2f780',
          'label' => 'Display video',
          'name' => 'display_video',
          'type' => 'true_false',
          'instructions' => 'Display video instead of featured image?',
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_543fdadc6e9b8',
          'label' => 'Video URL',
          'name' => 'video_url',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543fdb506e9b9',
          'label' => 'Introduction text',
          'name' => 'introduction_text',
          'type' => 'wysiwyg',
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 'no',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'acf_after_title',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

    // Campaign page template - featured video
    register_field_group(array (
      'id' => 'acf_featured-video',
      'title' => 'Featured video',
      'fields' => array (
        array (
          'key' => 'field_543e65b4b108d',
          'label' => 'Show video',
          'name' => 'show_video',
          'type' => 'true_false',
          'instructions' => 'Show featured video instead of featured image?',
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_543e65f0b108e',
          'label' => 'Featured video URL',
          'name' => 'featured_video_url',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-campaign.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'acf_after_title',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

    // Two content blocks on campaign page template
    register_field_group(array (
      'id' => 'acf_content-blocks',
      'title' => 'Content blocks',
      'fields' => array (
        array (
          'key' => 'field_543e740d941c5',
          'label' => 'Left block title',
          'name' => 'block_title_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543e7442941c7',
          'label' => 'Left block text',
          'name' => 'block_text_1',
          'type' => 'wysiwyg',
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 'no',
        ),
        array (
          'key' => 'field_543e7425941c6',
          'label' => 'Left block image',
          'name' => 'block_image_1',
          'type' => 'image',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_543e748eafd9e',
          'label' => 'Left block call to action',
          'name' => 'block_call_to_action_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543e749dafd9f',
          'label' => 'Left block URL',
          'name' => 'block_url_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543e75a364eaf',
          'label' => 'Right block title',
          'name' => 'block_title_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543e75af64eb0',
          'label' => 'Right block text',
          'name' => 'block_text_2',
          'type' => 'wysiwyg',
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 'no',
        ),
        array (
          'key' => 'field_543e75c464eb1',
          'label' => 'Right block image',
          'name' => 'block_image_2',
          'type' => 'image',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_543e75d364eb2',
          'label' => 'Right block call to action',
          'name' => 'block_call_to_action_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543e75e464eb3',
          'label' => 'Right block URL',
          'name' => 'block_url_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-campaign.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

    // Post and campaign page template - bottom banner
    register_field_group(array (
      'id' => 'acf_bottom-banner',
      'title' => 'Bottom banner',
      'fields' => array (
        array (
          'key' => 'field_54412e08fcaf0',
          'label' => 'Banner text',
          'name' => 'banner_text',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54412e16fcaf1',
          'label' => 'Banner call to action',
          'name' => 'banner_call_to_action',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54412e22fcaf2',
          'label' => 'Banner URL',
          'name' => 'banner_url',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-campaign.php',
            'order_no' => 0,
            'group_no' => 1,
          ),
        ),
      ),
      'options' => array (
        'position' => 'side',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

  }
endif;

if( ! function_exists('govsite_register_front_page_fields') ) :

  function govsite_register_front_page_fields() {
    // Homepage template
    register_field_group(array (
      'id' => 'acf_page-banner',
      'title' => 'Page Banner',
      'fields' => array (
        array (
          'key' => 'field_5582d48263aff',
          'label' => 'Banner content',
          'name' => 'banner_content',
          'type' => 'wysiwyg',
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 'yes',
        ),
        array (
          'key' => 'field_543561833db70',
          'label' => 'Button description',
          'name' => 'banner_button_description',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_5435618c3db71',
          'label' => 'Button URL',
          'name' => 'banner_button_url',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-home.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'acf_after_title',
        'layout' => 'default',
        'hide_on_screen' => array (
          0 => 'the_content',
        ),
      ),
      'menu_order' => 0,
    ));

    register_field_group(array (
      'id' => 'acf_images',
      'title' => 'Images',
      'fields' => array (
        array (
          'key' => 'field_54356c76e3ff4',
          'label' => 'Image 1',
          'name' => 'image_1',
          'type' => 'image',
          'instructions' => 'Image should be 310 px wide and 150 px heigh or proportionately larger',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_5494214a2c89d',
          'label' => 'Title 1',
          'name' => 'title_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356c9ae3ff5',
          'label' => 'Description 1',
          'name' => 'description_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356cabe3ff6',
          'label' => 'URL 1',
          'name' => 'url_1',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356cb1e3ff7',
          'label' => 'Image 2',
          'name' => 'image_2',
          'type' => 'image',
          'instructions' => 'Image should be 310 px wide and 150 px heigh or proportionately larger',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_5494214f2c89e',
          'label' => 'Title 2',
          'name' => 'title_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356cbde3ff8',
          'label' => 'Description 2',
          'name' => 'description_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356cc4e3ff9',
          'label' => 'URL 2',
          'name' => 'url_2',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356cc9e3ffa',
          'label' => 'Image 3',
          'name' => 'image_3',
          'type' => 'image',
          'instructions' => 'Image should be 310 px wide and 150 px heigh or proportionately larger',
          'save_format' => 'object',
          'preview_size' => 'thumbnail',
          'library' => 'all',
        ),
        array (
          'key' => 'field_549421562c89f',
          'label' => 'Title 3',
          'name' => 'title_3',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356cd6e3ffb',
          'label' => 'Description 3',
          'name' => 'description_3',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_54356ce3e3ffc',
          'label' => 'URL 3',
          'name' => 'url_3',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-home.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'default',
        'hide_on_screen' => array (
          0 => 'the_content',
        ),
      ),
      'menu_order' => 0,
    ));

    register_field_group(array (
      'id' => 'acf_link-to-the-news-page-2',
      'title' => 'Link to the News page',
      'fields' => array (
        array (
          'key' => 'field_543c037dba0bf',
          'label' => 'News page URL',
          'name' => 'news_page_url',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-home.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'normal',
        'layout' => 'default',
        'hide_on_screen' => array (
          0 => 'the_content',
        ),
      ),
      'menu_order' => 0,
    ));

    register_field_group(array (
      'id' => 'acf_side-banner',
      'title' => 'Side banner',
      'fields' => array (
        array (
          'key' => 'field_543c05975b673',
          'label' => 'Banner title',
          'name' => 'banner_title',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543c059e5b674',
          'label' => 'Banner description',
          'name' => 'banner_description',
          'type' => 'textarea',
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => '',
          'formatting' => 'br',
        ),
        array (
          'key' => 'field_543c05ab5b675',
          'label' => 'Banner URL',
          'name' => 'banner_url',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_543c05b35b676',
          'label' => 'Banner URL description',
          'name' => 'banner_url_description',
          'type' => 'text',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-home.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'side',
        'layout' => 'default',
        'hide_on_screen' => array (
          0 => 'the_content',
        ),
      ),
      'menu_order' => 0,
    ));
  }

endif;

if( ! function_exists('govsite_register_modular_custom_fields') ) :

  function govsite_register_modular_custom_fields() {

    // Post - show full width featured image
    register_field_group(array (
      'id' => 'acf_full-width-image',
      'title' => 'Full width image',
      'fields' => array (
        array (
          'key' => 'field_543fdbe0826f8',
          'label' => 'Show featured image',
          'name' => 'show_featured_image',
          'type' => 'true_false',
          'instructions' => 'Show full width featured image?',
          'message' => '',
          'default_value' => 0,
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'acf_after_title',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

    // Contact page template - map
    register_field_group(array (
      'id' => 'acf_location',
      'title' => 'Location',
      'fields' => array (
        array (
          'key' => 'field_5481c4c36cfd7',
          'label' => 'Google Maps URL',
          'name' => 'google_maps_url',
          'type' => 'text',
          'instructions' => 'Paste the iframe src URL',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'template-contact.php',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'acf_after_title',
        'layout' => 'default',
        'hide_on_screen' => array (
        ),
      ),
      'menu_order' => 0,
    ));

  }

endif;

if( function_exists("register_field_group") ) {
  govsite_register_base_custom_fields();
  govsite_register_front_page_fields();
  govsite_register_modular_custom_fields();
}
