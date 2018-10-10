<?php

function jscss() {
	wp_enqueue_script( 'owl-slider', get_template_directory_uri() . '/lib/owl.carousel.js', array(), null );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/lib/custom.js', array(), null, true );
	wp_enqueue_style( 'reset', get_stylesheet_directory_uri() .'/stylesheet/reset.css', false, '1.0.0' );
	wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri() .'/stylesheet/owl.carousel.css', false, '1.0.0' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/stylesheet/style.min.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'jscss' );


function post_type_slider() {
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Слайдер' ),
                'singular_name' => __( 'Слайд' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slider'),
        )
    );
}

add_action( 'init', 'post_type_slider' );

 
function custom_post_type_slider() {

    $labels = array(
        'name'                => _x( 'Слайды', 'Post Type General Name', 'homelife' ),
        'singular_name'       => _x( 'Слайд', 'Post Type Singular Name', 'homelife' ),
        'menu_name'           => __( 'Слайды', 'homelife' ),
        'parent_item_colon'   => __( 'Родительский слайд', 'homelife' ),
        'all_items'           => __( 'Все слайды', 'homelife' ),
        'view_item'           => __( 'Посмотреть слайд', 'homelife' ),
        'add_new_item'        => __( 'Добавить новый слайд', 'homelife' ),
        'add_new'             => __( 'Добавить новый', 'homelife' ),
        'edit_item'           => __( 'Редактировать слайд', 'homelife' ),
        'update_item'         => __( 'Обновить слайд', 'homelife' ),
        'search_items'        => __( 'Искать слайд', 'homelife' ),
        'not_found'           => __( 'Не найдено', 'homelife' ),
        'not_found_in_trash'  => __( 'Не найдено в корзине', 'homelife' ),
    );
     
    $args = array(
        'label'               => __( 'slider', 'homelife' ),
        'description'         => __( 'Слайды', 'premier' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'slider' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 1,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    
    register_post_type( 'slider', $args );
}
 
add_action( 'init', 'custom_post_type_slider', 0 );