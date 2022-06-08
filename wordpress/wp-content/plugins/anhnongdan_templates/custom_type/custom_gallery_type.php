<?php

// Register Custom Product Type
 if ( ! function_exists('custom_gallery_type') ) {

 // Register Custom Post Type
 function custom_gallery_type() {

  $labels = array(
    'name'                  => _x( 'Thư viện ảnh', 'Post Type General Name', 'anhnongdan_gallery' ),
    'singular_name'         => _x( 'Thư viện ảnh', 'Post Type Singular Name', 'anhnongdan_gallery' ),
    'menu_name'             => __( 'Thư viện ảnh', 'anhnongdan_gallery' ),
    'name_admin_bar'        => __( 'Thư viện ảnh', 'anhnongdan_gallery' ),
    'archives'              => __( 'Gallery Archives', 'anhnongdan_gallery' ),
    'attributes'            => __( 'Gallery Attributes', 'anhnongdan_gallery' ),
    'parent_item_colon'     => __( 'Parent Gallery:', 'anhnongdan_gallery' ),
    'all_items'             => __( 'All Galleries', 'anhnongdan_gallery' ),
    'add_new_item'          => __( 'Add New Gallery', 'anhnongdan_gallery' ),
    'add_new'               => __( 'Add Gallery', 'anhnongdan_gallery' ),
    'new_item'              => __( 'New Gallery', 'anhnongdan_gallery' ),
    'edit_item'             => __( 'Edit Gallery', 'anhnongdan_gallery' ),
    'update_item'           => __( 'Update Gallery', 'anhnongdan_gallery' ),
    'view_item'             => __( 'View Gallery', 'anhnongdan_gallery' ),
    'view_items'            => __( 'View Gallery', 'anhnongdan_gallery' ),
    'search_items'          => __( 'Search Gallery', 'anhnongdan_gallery' ),
    'not_found'             => __( 'Not found', 'anhnongdan_gallery' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anhnongdan_gallery' ),
    'featured_image'        => __( 'Featured Image', 'anhnongdan_gallery' ),
    'set_featured_image'    => __( 'Set featured image', 'anhnongdan_gallery' ),
    'remove_featured_image' => __( 'Remove featured image', 'anhnongdan_gallery' ),
    'use_featured_image'    => __( 'Use as featured image', 'anhnongdan_gallery' ),
    'insert_into_item'      => __( 'Insert into Gallery', 'anhnongdan_gallery' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'anhnongdan_gallery' ),
    'items_list'            => __( 'Galleries list', 'anhnongdan_gallery' ),
    'items_list_navigation' => __( 'Galleries list navigation', 'anhnongdan_gallery' ),
    'filter_items_list'     => __( 'Filter Galleries list', 'anhnongdan_gallery' ),
  );
  $rewrite = array(
    'slug'                  => 'gallery',
    'with_front'            => false,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Thư viện ảnh', 'anhnongdan_gallery' ),
    'description'           => __( 'Các Thư viện ảnh anhnongdanbds', 'anhnongdan_gallery' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-format-gallery',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'anhnongdan_gallery',
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
  );
  register_post_type( 'anhnongdan_gallery', $args );
 }
 add_action( 'init', 'custom_gallery_type', 0 );

 }
