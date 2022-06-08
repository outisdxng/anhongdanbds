<?php

// Register Custom Product Type
 if ( ! function_exists('custom_service_type') ) {

 // Register Custom Post Type
 function custom_service_type() {

  $labels = array(
    'name'                  => _x( 'Dịch vụ', 'Post Type General Name', 'anhnongdan_service' ),
    'singular_name'         => _x( 'Dịch vụ', 'Post Type Singular Name', 'anhnongdan_service' ),
    'menu_name'             => __( 'Dịch vụ', 'anhnongdan_service' ),
    'name_admin_bar'        => __( 'Dịch vụ', 'anhnongdan_service' ),
    'archives'              => __( 'Service Archives', 'anhnongdan_service' ),
    'attributes'            => __( 'Service Attributes', 'anhnongdan_service' ),
    'parent_item_colon'     => __( 'Parent Service:', 'anhnongdan_service' ),
    'all_items'             => __( 'All Services', 'anhnongdan_service' ),
    'add_new_item'          => __( 'Add New Service', 'anhnongdan_service' ),
    'add_new'               => __( 'Add Service', 'anhnongdan_service' ),
    'new_item'              => __( 'New Service', 'anhnongdan_service' ),
    'edit_item'             => __( 'Edit Service', 'anhnongdan_service' ),
    'update_item'           => __( 'Update Service', 'anhnongdan_service' ),
    'view_item'             => __( 'View Service', 'anhnongdan_service' ),
    'view_items'            => __( 'View Service', 'anhnongdan_service' ),
    'search_items'          => __( 'Search Service', 'anhnongdan_service' ),
    'not_found'             => __( 'Not found', 'anhnongdan_service' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anhnongdan_service' ),
    'featured_image'        => __( 'Featured Image', 'anhnongdan_service' ),
    'set_featured_image'    => __( 'Set featured image', 'anhnongdan_service' ),
    'remove_featured_image' => __( 'Remove featured image', 'anhnongdan_service' ),
    'use_featured_image'    => __( 'Use as featured image', 'anhnongdan_service' ),
    'insert_into_item'      => __( 'Insert into Service', 'anhnongdan_service' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Service', 'anhnongdan_service' ),
    'items_list'            => __( 'Services list', 'anhnongdan_service' ),
    'items_list_navigation' => __( 'Services list navigation', 'anhnongdan_service' ),
    'filter_items_list'     => __( 'Filter Services list', 'anhnongdan_service' ),
  );
  $rewrite = array(
    'slug'                  => 'service',
    'with_front'            => false,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Dịch vụ', 'anhnongdan_service' ),
    'description'           => __( 'Các Dịch vụ anhnongdanbds', 'anhnongdan_service' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-admin-tools',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'anhnongdan_service',
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
  );
  register_post_type( 'anhnongdan_service', $args );
 }
 add_action( 'init', 'custom_service_type', 0 );

 }
