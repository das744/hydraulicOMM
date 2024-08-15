<?php

// add stylesheet
function load_css(){
    wp_register_style('bootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrapCss');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');


// add javascript
function load_js(){

    wp_enqueue_script('jquery');

    wp_register_script('bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js', 
    'jquery', false, true);
    wp_enqueue_script('bootstrapJs');
    wp_register_script('customjQuery', get_template_directory_uri() . '/js/jquery.js', 
    'jquery', false, true);
    wp_enqueue_script('customjQuery');
    
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', 
    array(), null, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');



// theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');


// register/add menu location register_nav_menus is wp function
register_nav_menus(

    array(
        'main-menu'=>'Main Menu Location',
        'mobile-menu'=>'Mobile Menu Location',
        'footer-menu'=>'Footer Menu Location'
    )
    );




