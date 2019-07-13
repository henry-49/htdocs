<?php 
//Add Scripts
function ls_add_scripts(){
	wp_enqueue_style('ls-main-style', plugins_url(). '/links-social/css/style.css' );
	wp_enqueue_script('ls-main-script', plugins_url(). '/links-social/js/main.js' );
	
}

add_action('wp_enqueue_scripts', 'ls_add_scripts');