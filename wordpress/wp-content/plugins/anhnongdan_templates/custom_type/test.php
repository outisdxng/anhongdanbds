<?php

function computerBoxBuilder_post_types()
{

    // Computer Hardware Post Type
    register_post_type('Computer-Hardware', array(
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'public' => true,
        // 'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Computer-Hardware',
            'add_new_item' => 'Add New Computer-Hardware',
            'edit_item' => 'Edit Computer-Hardware',
            'all_items' => 'All Computer-Hardware',
            'singular_name' => 'Computer-Hardware',
        ),
        'menu_icon' => 'dashicons-dashboard',
        'taxonomies' => array( 'category' ),
    ));
    
}

// Register Custom Taxonomy
function custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Hardware-Creators', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Hardware-Creator', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'Hardware-Creator', array( 'computer-hardware' ), $args );
}

add_action('init', 'computerBoxBuilder_post_types');
add_action( 'init', 'custom_taxonomy', 2 );