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

add_filter('FHEE__EEG_Paypal_Standard__set_redirection_info__arguments', 'add_my_field');

function add_my_field($redirect_args) {
    $redirect_args['handling'] = '4.2';
    return $redirect_args;
}
