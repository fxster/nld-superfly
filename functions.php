<?php

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'woocommerce_enqueue_styles', '__return_false' );
add_theme_support( 'woocommerce' );

// Include this in functions.php or the theme
if( !is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("/wp-includes/js/jquery/jquery.js"));
    wp_enqueue_script('jquery');
}

// Register Scripts

function superfly_scripts() {
    wp_enqueue_style( 'superfly-normalize', get_template_directory_uri() . '/css/normalize.css', array(), null );
    wp_enqueue_style( 'superfly-foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), null );
    wp_enqueue_style( 'superfly-animate', get_template_directory_uri() . '/css/animate.css', array(), null );
    wp_enqueue_style( 'superfly-slick', get_template_directory_uri() . '/css/slick.css', array(), null );
    wp_enqueue_style( 'superfly-font', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css', array(), null );
    wp_enqueue_style( 'superfly-style', get_stylesheet_uri() );

    wp_enqueue_script( 'superfly-jquery', get_template_directory_uri() . '/js/vendor/jquery.js','','',true );
    wp_enqueue_script( 'superfly-modernizr', get_template_directory_uri() . '/js/modernizr.js','','',true );
    wp_enqueue_script( 'superfly-what-input', get_template_directory_uri() . '/js/vendor/what-input.js','','',true );
    wp_enqueue_script( 'superfly-foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js','','',true );
    wp_enqueue_script( 'superfly-slick', get_template_directory_uri() . '/js/slick.js','','',true );
    wp_enqueue_script( 'superfly-extend', get_template_directory_uri() . '/js/extend.js','','',true );



}
add_action( 'wp_enqueue_scripts', 'superfly_scripts' );

// Register Menus
function register_menus(){
    register_nav_menus(
        array(
            'header-menu' =>__('Header Menu'),
            'footer-menu' =>__('Footer Menu'),
            ));
}
add_action('init','register_menus');


// Events
function schools_init() { 
    $args = array(
      'label' => 'Schools',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'schools'),
        'query_var' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array(
            'title',
            'editor',
            'revisions',
            'thumbnail',)
        );
    register_post_type( 'schools', $args );
}
add_action( 'init', 'schools_init' );


?>