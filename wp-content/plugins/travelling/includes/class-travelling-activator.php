<?php

/**
 * Fired during plugin activation
 *
 * @link       multidots.com
 * @since      1.0.0
 *
 * @package    Travelling
 * @subpackage Travelling/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Travelling
 * @subpackage Travelling/includes
 * @author     multidots <info@multidots.com>
 */
class Travelling_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	 
	public static function activate() {
		add_action('admin_menu', 'setup_dashboard_page');	
	}
	
	function setup_dashboard_page(){
		add_menu_page(
			__('My Own Plugin'), 'Vipul Own Plugin', 'manage_options', 'travelling', 'my_plugin_options', get_plugins_url('travelling/images/vipul.png'), 2
		);
		
	}
	
	function my_plugin_options() {
		echo "Welcome To Travelling Plugin";
	}
	
		
		
	

}
