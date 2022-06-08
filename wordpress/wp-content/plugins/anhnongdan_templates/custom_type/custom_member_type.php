<?php

// Register Custom Product Type
 if ( ! function_exists('custom_member_type') ) {

 // Register Custom Post Type
 function custom_member_type() {

  $labels = array(
    'name'                  => _x( 'Đội ngũ', 'Post Type General Name', 'anhnongdan_member' ),
    'singular_name'         => _x( 'Đội ngũ', 'Post Type Singular Name', 'anhnongdan_member' ),
    'menu_name'             => __( 'Đội ngũ', 'anhnongdan_member' ),
    'name_admin_bar'        => __( 'Đội ngũ', 'anhnongdan_member' ),
    'archives'              => __( 'Member Archives', 'anhnongdan_member' ),
    'attributes'            => __( 'Member Attributes', 'anhnongdan_member' ),
    'parent_item_colon'     => __( 'Parent Member:', 'anhnongdan_member' ),
    'all_items'             => __( 'All Members', 'anhnongdan_member' ),
    'add_new_item'          => __( 'Add New Member', 'anhnongdan_member' ),
    'add_new'               => __( 'Add Member', 'anhnongdan_member' ),
    'new_item'              => __( 'New Member', 'anhnongdan_member' ),
    'edit_item'             => __( 'Edit Member', 'anhnongdan_member' ),
    'update_item'           => __( 'Update Member', 'anhnongdan_member' ),
    'view_item'             => __( 'View Member', 'anhnongdan_member' ),
    'view_items'            => __( 'View Member', 'anhnongdan_member' ),
    'search_items'          => __( 'Search Member', 'anhnongdan_member' ),
    'not_found'             => __( 'Not found', 'anhnongdan_member' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anhnongdan_member' ),
    'featured_image'        => __( 'Featured Image', 'anhnongdan_member' ),
    'set_featured_image'    => __( 'Set featured image', 'anhnongdan_member' ),
    'remove_featured_image' => __( 'Remove featured image', 'anhnongdan_member' ),
    'use_featured_image'    => __( 'Use as featured image', 'anhnongdan_member' ),
    'insert_into_item'      => __( 'Insert into Member', 'anhnongdan_member' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Member', 'anhnongdan_member' ),
    'items_list'            => __( 'Members list', 'anhnongdan_member' ),
    'items_list_navigation' => __( 'Members list navigation', 'anhnongdan_member' ),
    'filter_items_list'     => __( 'Filter Members list', 'anhnongdan_member' ),
  );
  $rewrite = array(
    'slug'                  => 'member',
    'with_front'            => false,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Đội ngũ', 'anhnongdan_member' ),
    'description'           => __( 'Các Đội ngũ anhnongdanbds', 'anhnongdan_member' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-admin-users',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'anhnongdan_member',
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
  );
  register_post_type( 'anhnongdan_member', $args );
 }
 add_action( 'init', 'custom_member_type', 0 );

 }
