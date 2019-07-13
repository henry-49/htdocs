<?php 
/**
 * Plugin Name: City Weather Report
 * Description: Widget that displays a specifield city weather
 * version: 1.0
 * Author: rising system networks GmbH
 **/
// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once (plugin_dir_path(__FILE__). '/includes/city-weather-report-scripts.php');

// Load Geoplugin
require_once (plugin_dir_path(__FILE__). '/includes/geoplugin.class.php');

// Load Class
require_once (plugin_dir_path(__FILE__). '/includes/city-weather-report-class.php');



// Register Widget
function register_city_weather_report(){
	register_widget('City_Weather_Report_Widget');
}

add_action('widgets_init', 'register_city_weather_report');