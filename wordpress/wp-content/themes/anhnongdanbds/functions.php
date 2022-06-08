<?php
	add_filter( 'big_image_size_threshold', '__return_false' );

  function anhnongdan_theme_support(){
    add_theme_support('title-tag');

  }
  add_action('after_setup_theme', 'anhnongdan_theme_support');

  function tamkieu_template_menus() {
      $locations = array(
        'primary' => __( 'Primary' ),
        'top_menu' => __( 'Menu Top' ),
        'footer' => __( 'Menu footer' ),
      );
      register_nav_menus($locations);
    }
    add_action('init', 'tamkieu_template_menus');

    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
    add_filter( 'use_widgets_block_editor', '__return_false' );

  function anhnongdan_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('anhnongdan-core-style', get_template_directory_uri() . "/css/core.min.css", array(), $version, 'all');
    wp_enqueue_style('anhnongdan-main-style', get_template_directory_uri() . "/css/main.min.css", array(), $version, 'all');
    wp_enqueue_style('anhnongdan-material-icon', "https://fonts.googleapis.com/icon?family=Material+Icons", array(), $version, 'all');
    wp_enqueue_style('anhnongdan-opensans-font', "https://fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800&amp;display=swap", array(), $version, 'all');
    // wp_enqueue_style('anhnongdan-apple-icon57', get_template_directory_uri() . "/favicon/apple-icon-57x57.png", array(), $version, 'all');
    // wp_enqueue_style('anhnongdan-apple-icon60', get_template_directory_uri() . "/favicon/apple-icon-60x60.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon72', get_template_directory_uri() . "/favicon/apple-icon-72x72.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon76', get_template_directory_uri() . "/favicon/apple-icon-76x76.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon114', get_template_directory_uri() . "/favicon/apple-icon-114x114.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon120', get_template_directory_uri() . "/favicon/apple-icon-120x120.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon144', get_template_directory_uri() . "/favicon/apple-icon-144x144.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon152', get_template_directory_uri() . "/favicon/apple-icon-152x152.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-apple-icon180', get_template_directory_uri() . "/favicon/apple-icon-180x180.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-android-icon192', get_template_directory_uri() . "/favicon/android-icon-192x192.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-favicon32', get_template_directory_uri() . "/favicon/favicon-32x32.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-favicon96', get_template_directory_uri() . "/favicon/favicon-96x96.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-favicon16', get_template_directory_uri() . "/favicon/favicon-16x16.png", array(), '1.0.1', 'all');
    // wp_enqueue_style('anhnongdan-manifest', get_template_directory_uri() . "/favicon/manifest.json", array(), '1.0.1', 'all');
    wp_enqueue_style('anhnongdan-style', get_template_directory_uri() . "/style.css", array(), '1.0.1', 'all');
    wp_enqueue_style('anhnongdan-font-awesome', "https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css", array(), '3.2.1', 'all');
    // https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css

  }


  add_action('wp_enqueue_scripts', 'anhnongdan_styles');

  function anhnongdan_scripts() {
    wp_enqueue_script('anhnongdan-core-js', get_template_directory_uri() . "/js/core.min.js", array(), '1.0.1', 'all', true);
    wp_enqueue_script('anhnongdan-main-js', get_template_directory_uri() . "/js/main.min.js", array(), '1.0.1', 'all', true);


  }

  add_action('wp_enqueue_scripts', 'anhnongdan_scripts');


  //Add field setting
    function register_zalo_fields()
    {
        register_setting('general', 'zalo_page_field', 'esc_attr');
        add_settings_field('zalo_page_field', '<label for="zalo_page_field">'.__('Zalo: ' , 'zalo_page_field' ).'</label>' , 'print_zalo_page_field', 'general');
    }

    function print_zalo_page_field()
    {
        $value = get_option( 'zalo_page_field', '' );
        echo '<input type="text" id="zalo_page_field" name="zalo_page_field" value="' . $value . '" />';
    }


    add_filter('admin_init', 'register_zalo_fields');


    function register_phone_fields()
    {
        register_setting('general', 'phone_field', 'esc_attr');
        add_settings_field('phone_field', '<label for="phone_field">'.__('Phone: ' , 'phone_field' ).'</label>' , 'print_phone_field', 'general');
    }

    function print_phone_field()
    {
        $value = get_option( 'phone_field', '' );
        echo '<input type="text" id="phone_field" name="phone_field" value="' . $value . '" />';
    }


    add_filter('admin_init', 'register_phone_fields');


    function register_youtube_fields()
    {
        register_setting('general', 'youtube_field', 'esc_attr');
        add_settings_field('youtube_field', '<label for="youtube_field">'.__('Youtube: ' , 'youtube_field' ).'</label>' , 'print_youtube_field', 'general');
    }

    function print_youtube_field()
    {
        $value = get_option( 'youtube_field', '' );
        echo '<input type="text" id="youtube_field" name="youtube_field" value="' . $value . '" />';
    }


    add_filter('admin_init', 'register_youtube_fields');


    function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count đánh giá";
    }
    function gt_set_post_view() {
        $key = 'post_views_count';
        $post_id = get_the_ID();
        $count = (int) get_post_meta( $post_id, $key, true );
        $count++;
        update_post_meta( $post_id, $key, $count );
    }
    function gt_posts_column_views( $columns ) {
        $columns['post_views'] = 'Views';
        return $columns;
    }
    function gt_posts_custom_column_views( $column ) {
        if ( $column === 'post_views') {
            echo gt_get_post_view();
        }
    }
    add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
    add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );




    function my_rest_prepare_post( $data, $post, $request ) {
    $_data = $data->data;
    // My custom fields that I want to include in the WP API v2 responce
    $fields = ['display'];

    foreach ( $fields as $field ) {
      $_data[$field] = get_post_meta( $post->ID, $field, true );
    }

    $data->data = $_data;
    return $data;
  }

  add_filter( 'rest_prepare_post', 'my_rest_prepare_post', 10, 3 );







  /**
   * Filter book post type by banner_taxonomy slug
   *
   * @param array $args
   * @param WP_Rest_Request $request
   * @return array $args
   */
  function filter_rest_banner_query( $args, $request ) {
      $params = $request->get_params();
      if(isset($params['banner_taxonomy_slug'])){
          $args['tax_query'] = array(
              array(
                  'taxonomy' => 'banner_taxonomy',
                  'field' => 'slug',
                  'terms' => explode(',', $params['banner_taxonomy_slug'])
              )
          );
      }
      return $args;
  }
  // add the filter
  add_filter( "rest_banner_query", 'filter_rest_banner_query', 10, 2 );
?>
