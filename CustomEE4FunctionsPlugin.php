<?php
/**
 * Plugin Name: Custom EE4 Functions Plugin
 * Plugin URI: http://eventespresso.com
 * Description: A blank plugin where you can put custom functions
 * Version: 1.0
 * Author: Sidney Harrell
 * Author URI: http://sidneyharrell.com
 * License: GPL2
 */
define( 'CUSTOM_FUNCTIONS_MAIN_FILE', __FILE__ );
define( 'CF_PLUGIN_DIR_PATH', plugin_dir_path( CUSTOM_FUNCTIONS_MAIN_FILE ));
add_action('AHEE_EE_Paypal_Standard_form_build', 'add_my_field');
function add_my_field($ee_paypal_standard) {
    $ee_paypal_standard->addField('handling', '4.2');    
}