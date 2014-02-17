<?php if ( ! defined('EVENT_ESPRESSO_VERSION')) exit('No direct script access allowed');
/**
 * Event Espresso
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @ package			Event Espresso
 * @ author			Seth Shoultes
 * @ copyright		(c) 2008-2011 Event Espresso  All Rights Reserved.
 * @ license			http://eventespresso.com/support/terms-conditions/   * see Plugin Licensing *
 * @ link				http://www.eventespresso.com
 * @ version		 	4.0
 *
 * ------------------------------------------------------------------------
 *
 * EES_Espresso_Ticket_Selector
 *
 * @package			Event Espresso
 * @subpackage		/shortcodes/
 * @author			Brent Christensen 
 *
 * ------------------------------------------------------------------------
 */
class EES_Espresso_Venue extends EES_Shortcode {

	/**
	 * 	set_hooks - for hooking into EE Core, modules, etc
	 *
	 *  @access 	public
	 *  @return 	void
	 */
	public static function set_hooks() {
	}

	/**
	 * 	set_hooks_admin - for hooking into EE Admin Core, modules, etc
	 *
	 *  @access 	public
	 *  @return 	void
	 */
	public static function set_hooks_admin() {
	}

	/**
	 * 	run - initial shortcode module setup called during "wp_loaded" hook
	 * 	this method is primarily used for loading resources that will be required by the shortcode when it is actually processed
	 *
	 *  @access 	public
	 *  @return 	void
	 */
	public function run( WP $WP ) {
	}

	/**
	 * 	process_shortcode - ESPRESSO_TICKET_SELECTOR 
	 * 
	 *  @access 	public
	 *  @param		array 	$attributes
	 *  @return 	void
	 */
	public function process_shortcode( $attributes ) {
		extract( $attributes );
		/*global $post;
		$original_post = $post;
		$post = get_post($id);
		EE_Registry::instance()->load_helper( 'Venue_View' );
		$content = EEH_Template::locate_template( 'content-espresso_venues-location.php' );
		$post = $original_post;*/
		return "<h4>Where is my output?</h4>";//$content;
	}

}
// End of file EES_Espresso_Ticket_Selector.shortcode.php
// Location: /shortcodes/espresso_ticket_selector/EES_Espresso_Ticket_Selector.shortcode.php