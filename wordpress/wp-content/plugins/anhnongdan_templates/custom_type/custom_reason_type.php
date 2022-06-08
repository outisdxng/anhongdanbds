<?php

// Register Custom Product Type
 if ( ! function_exists('custom_reason_type') ) {

 // Register Custom Post Type
 function custom_reason_type() {

  $labels = array(
    'name'                  => _x( 'Lý do chọn chúng tôi', 'Post Type General Name', 'anhnongdan_reason' ),
    'singular_name'         => _x( 'Lý do chọn chúng tôi', 'Post Type Singular Name', 'anhnongdan_reason' ),
    'menu_name'             => __( 'Lý do chọn chúng tôi', 'anhnongdan_reason' ),
    'name_admin_bar'        => __( 'Lý do chọn chúng tôi', 'anhnongdan_reason' ),
    'archives'              => __( 'reason Archives', 'anhnongdan_reason' ),
    'attributes'            => __( 'reason Attributes', 'anhnongdan_reason' ),
    'parent_item_colon'     => __( 'Parent reason:', 'anhnongdan_reason' ),
    'all_items'             => __( 'All Reasons', 'anhnongdan_reason' ),
    'add_new_item'          => __( 'Add New reason', 'anhnongdan_reason' ),
    'add_new'               => __( 'Add reason', 'anhnongdan_reason' ),
    'new_item'              => __( 'New reason', 'anhnongdan_reason' ),
    'edit_item'             => __( 'Edit reason', 'anhnongdan_reason' ),
    'update_item'           => __( 'Update reason', 'anhnongdan_reason' ),
    'view_item'             => __( 'View reason', 'anhnongdan_reason' ),
    'view_items'            => __( 'View reason', 'anhnongdan_reason' ),
    'search_items'          => __( 'Search reason', 'anhnongdan_reason' ),
    'not_found'             => __( 'Not found', 'anhnongdan_reason' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anhnongdan_reason' ),
    'featured_image'        => __( 'Featured Image', 'anhnongdan_reason' ),
    'set_featured_image'    => __( 'Set featured image', 'anhnongdan_reason' ),
    'remove_featured_image' => __( 'Remove featured image', 'anhnongdan_reason' ),
    'use_featured_image'    => __( 'Use as featured image', 'anhnongdan_reason' ),
    'insert_into_item'      => __( 'Insert into reason', 'anhnongdan_reason' ),
    'uploaded_to_this_item' => __( 'Uploaded to this reason', 'anhnongdan_reason' ),
    'items_list'            => __( 'Reasons list', 'anhnongdan_reason' ),
    'items_list_navigation' => __( 'Reasons list navigation', 'anhnongdan_reason' ),
    'filter_items_list'     => __( 'Filter Reasons list', 'anhnongdan_reason' ),
  );
  $rewrite = array(
    'slug'                  => 'reason',
    'with_front'            => false,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Lý do chọn chúng tôi', 'anhnongdan_reason' ),
    'description'           => __( 'Các Lý do chọn chúng tôi anhnongdanbds', 'anhnongdan_reason' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-editor-help',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'anhnongdan_reason',
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
  );
  register_post_type( 'anhnongdan_reason', $args );
 }
 add_action( 'init', 'custom_reason_type', 0 );

 }
