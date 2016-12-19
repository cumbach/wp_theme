<?php

function total_script_enqueue() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'total_script_enqueue');

function total_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Secondary Header Navigation');
	register_nav_menu('footer', 'Footer Navigation');

}

add_action('init', 'total_theme_setup');

// add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-footer');

// add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

if ( is_admin() ) {
	add_filter( 'filesystem_method', create_function( '$a', 'return "direct";' ) );
	if ( ! defined( 'FS_CHMOD_DIR' ) ) {
		define( 'FS_CHMOD_DIR', 0751 );
	}
}
