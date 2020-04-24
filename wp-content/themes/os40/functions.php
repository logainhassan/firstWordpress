<?php

// Adding Assets
function addAssets(){
    wp_enqueue_style( 'bootstrap' ,get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'main' ,get_template_directory_uri().'/assets/css/main.css');

    wp_enqueue_style( 'bootstrap' ,get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery']);

}
add_action( "wp_enqueue_scripts", "addAssets");

add_theme_support("post-thumbnails");

add_theme_support("menus");
 
register_nav_menus( array(
    "main-menu" => "Main Menu") 
);


?>