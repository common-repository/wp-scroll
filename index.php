<?php 
/*
Plugin Name: WP Scroll
Plugin URI: https://www.codingbank.com/item/wp-scroll-wordpress-plugins/
Description: This is full responsive WP Scroll plugin for wordpress websites.
Version: 1.0
Author: Md Abul Bashar
Author URI: http://www.codingbank.com/

*/

function cb_wp_scroll(){
	
	wp_enqueue_style( 'cb-wp-scroll', 'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css', array(), '1.0' );
	wp_enqueue_style( 'cb-wp-scroll-style', plugin_dir_url( __FILE__ ) . '/css/style.css', array(), '1.0' );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'cb-scroll',  plugin_dir_url( __FILE__ ) . '/js/scroll.js', array( 'jquery' ), '1.0', true );
	
	
}
add_action('wp_enqueue_scripts', 'cb_wp_scroll');

function cb_wp_scroll_html(){
	
	echo '<div class="cb-scroll"><a href="#"><i class="fa fa-angle-double-up"></i></a></div>';
}


function cb_wp_footer_call() {
	
	add_action( 'wp_footer', 'cb_wp_scroll_html', 0 );
}
add_action('init', 'cb_wp_footer_call');

?>