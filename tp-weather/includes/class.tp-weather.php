<?php

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class TP_Weather {
	public function __construct(){

	}

	public function activation_hook() {

	}

	public function deactivation_hook() {

	}
}