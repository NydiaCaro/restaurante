<?php

function dl_enqueue_style() {
    $theme_data = wp_get_theme();

    wp_register_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.css'), null, null, 'screen');

    wp_register_style('lightbox', get_theme_file_uri('/assets/css/lightbox.css'), null, $theme_data->get( 'Version' ), 'screen');
    
    wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');

    wp_register_style('fonts-1',"https://use.fontawesome.com/releases/v5.3.1/css/all.css");
    
    wp_register_style('fonts-2',"https://fonts.googleapis.com/css?family=Archivo+Black|Lato:400,700|Oswald");

    wp_enqueue_style('bootstrap');
 
    wp_enqueue_style('lightbox');
 
    wp_enqueue_style('style');

      
    
    
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style');

function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();

    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'bootstrap' );

    wp_register_script('jquery-1.11.1', get_theme_file_uri('assets/js/jquery-1.11.1.min.js'), null, '1.11.1', true);

    wp_register_script('modernizr', get_theme_file_uri('assets/js/modernizr.custom.js'), null, '2.2.3', true);

    wp_register_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.js'), null, null, true);


    wp_register_script('lightbox-plus-jquery', get_theme_file_uri('assets/js/lightbox-plus-jquery.min.js'), array('jquery-2'), null, true);

    wp_register_script('responsiveslides', get_theme_file_uri('assets/js/responsiveslides.min.js'), array('jquery-2'), null, true);

   
    
    wp_enqueue_script('jquery-1.11.1');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('lightbox-plus-jquery');
    wp_enqueue_script('responsiveslides');
   
    
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );



// menu personalizable

    function menus_setup() {
        register_nav_menus(
            array(
                'header-menu'   => __( 'Header Menu' ),
                'footer-menu'   => __( 'Footer Menu' ),
            )
        );
    }
    add_action( 'after_setup_theme', 'menus_setup' );



// resgister widgets footer

 function dl_widgets() {
    register_sidebar( array(
        'name' => 'Widget Footer',
        'id' => 'widget_footer'
    ));
  }
  add_action('widgets_init', 'dl_widgets');




// Register Custom Post Type
function reserva_post_type() {

    $labels = array(
        'name'                  => _x( 'reservas', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'reserva', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Post Types', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'reserva', 'text_domain' ),
        'description'           => __( 'personalizanilazioón de reserva', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-write-blog',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'reserva', $args );

}
add_action( 'init', 'reserva_post_type', 0 );

?>