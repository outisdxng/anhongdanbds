<?php

// Register Custom Product Type
 if ( ! function_exists('custom_project_type') ) {

 // Register Custom Post Type
 function custom_project_type() {

  $labels = array(
    'name'                  => _x( 'Dự án', 'Post Type General Name', 'anhnongdan_project' ),
    'singular_name'         => _x( 'Dự án', 'Post Type Singular Name', 'anhnongdan_project' ),
    'menu_name'             => __( 'Dự án', 'anhnongdan_project' ),
    'name_admin_bar'        => __( 'Dự án', 'anhnongdan_project' ),
    'archives'              => __( 'Project Archives', 'anhnongdan_project' ),
    'attributes'            => __( 'Project Attributes', 'anhnongdan_project' ),
    'parent_item_colon'     => __( 'Parent Project:', 'anhnongdan_project' ),
    'all_items'             => __( 'All Projects', 'anhnongdan_project' ),
    'add_new_item'          => __( 'Add New Project', 'anhnongdan_project' ),
    'add_new'               => __( 'Add Project', 'anhnongdan_project' ),
    'new_item'              => __( 'New Project', 'anhnongdan_project' ),
    'edit_item'             => __( 'Edit Project', 'anhnongdan_project' ),
    'update_item'           => __( 'Update Project', 'anhnongdan_project' ),
    'view_item'             => __( 'View Project', 'anhnongdan_project' ),
    'view_items'            => __( 'View Project', 'anhnongdan_project' ),
    'search_items'          => __( 'Search Project', 'anhnongdan_project' ),
    'not_found'             => __( 'Not found', 'anhnongdan_project' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'anhnongdan_project' ),
    'featured_image'        => __( 'Featured Image', 'anhnongdan_project' ),
    'set_featured_image'    => __( 'Set featured image', 'anhnongdan_project' ),
    'remove_featured_image' => __( 'Remove featured image', 'anhnongdan_project' ),
    'use_featured_image'    => __( 'Use as featured image', 'anhnongdan_project' ),
    'insert_into_item'      => __( 'Insert into Project', 'anhnongdan_project' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Project', 'anhnongdan_project' ),
    'items_list'            => __( 'Projects list', 'anhnongdan_project' ),
    'items_list_navigation' => __( 'Projects list navigation', 'anhnongdan_project' ),
    'filter_items_list'     => __( 'Filter Projects list', 'anhnongdan_project' ),
  );
  $rewrite = array(
    'slug'                  => 'project',
    'with_front'            => false,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Dự án', 'anhnongdan_project' ),
    'description'           => __( 'Các Dự án AnhnongdanBDS', 'anhnongdan_project' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-index-card',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'anhnongdan_project',
    'rewrite' => array( 'slug' => 'project', 'with_front'=> false ),
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_controller_class' => 'WP_REST_Posts_Controller',
  );
  register_post_type( 'anhnongdan_project', $args );
  register_taxonomy("project_category", array("anhnongdan_project"), array("hierarchical" => true, "label" => "Project Categories", "singular_label" => "Category", "rewrite" => array( 'slug' => 'project-category', 'with_front'=> false, 'show_in_nav_menus' => true )));

 }
 add_action( 'init', 'custom_project_type', 0 );

 }
