<?php
/*
Plugin Name: TP-Weather
Plugin URI: http://epazpaz.com/
Description: Simple Weather Plugin
Author: Le Anh Dat
Version: 1.0.0
Author URI: http://epazpaz.com/
Text Domain: tp_weather
*/
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('TP_WEATHER_VERSION', '1.0.0');
define('TP_WEATHER_MINIMUM_WP_VERSION', '4.1.1');
define('TP_WEATHER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('TP_WEATHER_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once(TP_WEATHER_PLUGIN_DIR . 'includes/class.tp-weather.php');

$tp_weather = new TP_Weather();
