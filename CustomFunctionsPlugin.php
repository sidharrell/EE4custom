<?php
/**
 * Plugin Name: Custom Functions Plugin
 * Plugin URI: http://eventespresso.com
 * Description: A blank plugin where you can put custom functions
 * Version: 1.0
 * Author: Sidney Harrell
 * Author URI: http://sidneyharrell.com
 * License: GPL2
 */
 
define('CF_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__  ));
add_filter( 'FHEE__EE_Config__register_widgets__widgets_to_register', 'add_my_custom_widget' );

function add_my_custom_widget($widgets_to_register) {
	$widgets_to_register[] = CF_PLUGIN_DIR_PATH.'custom_upcoming_events';
	return $widgets_to_register;
}