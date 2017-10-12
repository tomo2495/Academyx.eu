<?php
/*adding styles to head and scripts to footer*/
function my_scripts_enqueue() {        
    /*styles*/
    wp_enqueue_style('main-css',  get_stylesheet_directory_uri() . '/public/css/main.css');
            
    /*scripts*/
	wp_enqueue_script('libs-js',  get_template_directory_uri() . '/public/js/libs.js', array( 'jquery' ), '' );
    wp_enqueue_script('app-js',  get_template_directory_uri() . '/public/js/app.js');
}

add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue');