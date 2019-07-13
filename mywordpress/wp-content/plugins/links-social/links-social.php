<?php 
/**
 * Plugin Name: Link Social
 * Description: Adds social icons with links to profile
 * version: 1.0
 * Author: rising system networks GmbH
 **/
// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once (plugin_dir_path(__FILE__). '/includes/link-social-scripts.php');

// Load Class
require_once (plugin_dir_path(__FILE__). '/includes/link-social-class.php');

// Register Widget
function register_links_social(){
	register_widget('Links_Social_Widget');
}

add_action('widgets_init', 'register_links_social');