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
 define( 'CUSTOM_FUNCTIONS_MAIN_FILE', __FILE__ );
 define( 'CF_PLUGIN_DIR_PATH', plugin_dir_path( CUSTOM_FUNCTIONS_MAIN_FILE ));
 add_filter('FHEE__EE_Config__register_shortcodes__shortcodes_to_register', 'add_my_shortcode');
 function add_my_shortcode($shortcodes_to_register) {
	 $shortcodes_to_register[] = CF_PLUGIN_DIR_PATH."espresso_venue";
	 return $shortcodes_to_register;
 }