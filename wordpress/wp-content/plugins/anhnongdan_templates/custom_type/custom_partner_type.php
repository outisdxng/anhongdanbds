<?php

// Register Custom Product Type
 if ( ! function_exists('custom_partner_type') ) {

 // Register Custom Post Type
 function custom_partner_type() {

  $labels = array(
    'name'                  => _x( 'Đối tác', 'Post Type General Name', 'anhnongdan_partner' ),
    'singular_name'         => _x( 'Đối tác', 'Post Type Singular Name', 'anhnongdan_partner' ),
    'menu_name'             => __( 'Đối tác', 'anhnongdan_partner' ),
    'name_admin_bar'        => __( 'Đối tác', 'anhnongdan_partner' ),
    'archives'              => __( 'Partner Archives', 'anhnongdan_partner' ),
    'attributes'            => __( 'Partner Attributes', 'anhnongdan_partner' ),
    'parent_item_colon'     => __( 'Parent Partner:', 'anhnongdan_partner' ),
    'all_items'             => __( 'All Partners', 'anhnongdan_partner' ),
    'add_new_item'          => __( 'Add New Partner', 'anhnongdan_partner' ),
    'add_new'               => __( 'Add Partner', 'anhnongdan_partner' ),
    'new_item'              => __( 'New Partner', 'anhnongdan_partner' ),
    'edit_item'             => __( 'Edit Partner', 'anhnongdan_partner' ),
    'update_item'           => __( 'Update Partner', 'anhnongdan_partner' ),
    'view_item'             => __( 'View Partner', 'anhnongdan_partner' ),
    'view_items'            => __( 'View Partner', 'anhnongdan_partner' ),
    'search_items'          => __( 'Search Partner', 'anhnongdan_partner' ),
    'not_found'             => __( 'Not found', 'anhnongdan_partner' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anhnongdan_partner' ),
    'featured_image'        => __( 'Featured Image', 'anhnongdan_partner' ),
    'set_featured_image'    => __( 'Set featured image', 'anhnongdan_partner' ),
    'remove_featured_image' => __( 'Remove featured image', 'anhnongdan_partner' ),
    'use_featured_image'    => __( 'Use as featured image', 'anhnongdan_partner' ),
    'insert_into_item'      => __( 'Insert into Partner', 'anhnongdan_partner' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Partner', 'anhnongdan_partner' ),
    'items_list'            => __( 'Partners list', 'anhnongdan_partner' ),
    'items_list_navigation' => __( 'Partners list navigation', 'anhnongdan_partner' ),
    'filter_items_list'     => __( 'Filter Partners list', 'anhnongdan_partner' ),
  );
  $rewrite = array(
    'slug'                  => 'partner',
    'with_front'            => false,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Đối tác', 'anhnongdan_partner' ),
    'description'           => __( 'Các Đối tác anhnongdanbds', 'anhnongdan_partner' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-networking',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'anhnongdan_partner',
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
  );
  register_post_type( 'anhnongdan_partner', $args );
 }
 add_action( 'init', 'custom_partner_type', 0 );

 }
