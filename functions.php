<?php

function skeletoing_load_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', '1' );
	wp_enqueue_style( 'skeletoing-style', get_stylesheet_uri(), '2', array('normalize') );
}

function skeletoing_load_scripts(){
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . "/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js", array(), '2.6.2');
    //wp_enqueue_script( 'jquery-1-10-google', "//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js", array(), '1.10', true);
    wp_enqueue_script('jquery');
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . "/js/plugins.js", array(), '000', true);
    wp_enqueue_script( 'main-js', get_template_directory_uri() . "/js/main.js", array('plugins-js'), '000', true);
}

function skeletoing_init(){
	add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'skeletoing_init' );
add_action( 'wp_enqueue_scripts', 'skeletoing_load_styles' );
add_action( 'wp_enqueue_scripts', 'skeletoing_load_scripts' );