<?php

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class TP_Weather_Setting {
	protected $option;
	protected $option_group = 'tp_weather_group';
	public function __construct() {
		add_action('admin_menu', function() {
			add_submenu_page(
				'options-general.php',
				'TP Weather Settings',
				'TP Setting',
				'manage_options',
				'tp_weather',
				[$this, 'create_page']
			);
		});
	}

	public function create_page() {
		$option_group = $this->option_group;
		require(TP_WEATHER_PLUGIN_DIR . 'views/tp-weather-setting.php');
	}
}