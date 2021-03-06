<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              multidots.com
 * @since             1.0.0
 * @package           Travelling
 *
 * @wordpress-plugin
 * Plugin Name:       Travelling
 * Plugin URI:        store.multidots.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            multidots
 * Author URI:        multidots.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       travelling
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-travelling-activator.php
 */
function activate_travelling() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-travelling-activator.php';
	Travelling_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-travelling-deactivator.php
 */
function deactivate_travelling() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-travelling-deactivator.php';
	Travelling_Deactivator::deactivate();

}

register_activation_hook( __FILE__, 'activate_travelling' );
register_deactivation_hook( __FILE__, 'deactivate_travelling' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-travelling.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_travelling() {

	$plugin = new Travelling();
	$plugin->run();

}
run_travelling();
 add_action('admin_menu', 'setup_dashboard_page');
 
 function setup_dashboard_page(){
		add_menu_page(
            __('My Own Plugin'), 'Vipul Own Plugin', 'manage_options', 'my_plugin_options', '', plugins_url('my-plugin/images/vipul.png'), 2
			);
		
	}
function my_plugin_options() {
			echo "Welcome To Travelling Plugin";
		}