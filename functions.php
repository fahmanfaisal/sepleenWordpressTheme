<?php


require_once(get_template_directory().'/inc/redux.php');
include_once('inc/shortcode.php');

// ADD Theme Support settings
function sepleen_setup(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders','teams', 'testimonials'));

    //Laod Theme TesxtDomian
    load_theme_textdomain('sepleenWp', get_template_directory() . '/languages');


    //Registering the menu
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'sepleenWp'),
    ));

}
add_action('after_setup_theme', 'sepleen_setup');

function sepleen_assets(){

    //enqueing loading css fiels

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css',array(), 'all' );
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css',array(), 'all' );
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css',array(), 'all' );
    wp_enqueue_style('style', '/style.css',array(), 'all' );


    //enqueing loading javascript fiels

    wp_enqueue_script('proper-min-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.0', true );
    wp_enqueue_script('owl-carousel-min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('onepage-nav-js', get_template_directory_uri() . '/assets/js/onepagenav.js', array('jquery'), '3.0.0', true );
    wp_enqueue_script('isotope-min-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '3.0.5', true );
    wp_enqueue_script('imageloaded-min-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '4.1.4', true );
    wp_enqueue_script('counter-up-min-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('waypoint-min-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '4.0.0', true );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'sepleen_assets');


//Registering Custom Post Type

function sepleen_custom_posts(){

    //slider custom post type
    register_post_type( 'sliders', array(
        'labels' => array(
            'name' => __('Sliders' , 'sepleenWp'),
            'singular_name' => __('Slider' , 'sepleenWp')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon'           => 'dashicons-images-alt2
        ',
        'show_in_rest' => true
    ));

    //services custom post type
    register_post_type( 'services', array(
        'labels' => array(
            'name' => __('Services' , 'sepleenWp'),
            'singular_name' => __('Service' , 'sepleenWp')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-embed-photo',
        'show_in_rest' => true
    ));

    //Counter custom post type
    register_post_type( 'counters', array(
        'labels' => array(
            'name' => __('Counters' , 'sepleenWp'),
            'singular_name' => __('Counter' , 'sepleenWp')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
        'menu_position'       => 15,
        'menu_icon'           => 'dashicons-plus-alt',
    ));
    //Team section custom post type
    register_post_type( 'teams', array(
        'labels' => array(
            'name' => __('Teams' , 'sepleenWp'),
            'singular_name' => __('Team' , 'sepleenWp')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title','thumbnail', 'custom-fields'),
        'menu_position'       => 15,
        'menu_icon'           => 'dashicons-image-filter',
    ));
    //Testiminial section custom post type
    register_post_type( 'testimonials', array(
        'labels' => array(
            'name' => __('Testimonials' , 'sepleenWp'),
            'singular_name' => __('Testimonial' , 'sepleenWp')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title','thumbnail', 'custom-fields'),
        'menu_position'       => 15,
        'menu_icon'           => 'dashicons-testimonial',
    ));
}

add_action('init', 'sepleen_custom_posts');

//Our Widgets Area
function ourWidgetsInit(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar1',
    ));

    register_sidebar(array(
        'name' => 'Footer Area 1',
        'id'   => 'footer1',
        'before_widget' => '<div class="single-footer footer-logo" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer Area 2',
        'id'   => 'footer2',
        'before_widget' => '<div class="single-footer" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer Area 3',
        'id'   => 'footer3',
        'before_widget' => '<div class="single-footer" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer Area 4',
        'id'   => 'footer4',
        'before_widget' => '<div class="single-footer" >',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Footer Social Icons',
        'id'   => 'footer5',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));

}

add_action('widgets_init', 'ourWidgetsInit');
