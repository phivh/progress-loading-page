<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.fiverr.com/de2dev
 * @since             1.0.0
 * @package           Progress_Loading_Page
 *
 * @wordpress-plugin
 * Plugin Name:       Progress Loading Page
 * Plugin URI:        https://www.fiverr.com/de2dev
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            PHD2D
 * Author URI:        https://www.fiverr.com/de2dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       progress-loading-page
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PROGRESS_LOADING_PAGE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-progress-loading-page-activator.php
 */
function activate_progress_loading_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-progress-loading-page-activator.php';
	Progress_Loading_Page_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-progress-loading-page-deactivator.php
 */
function deactivate_progress_loading_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-progress-loading-page-deactivator.php';
	Progress_Loading_Page_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_progress_loading_page' );
register_deactivation_hook( __FILE__, 'deactivate_progress_loading_page' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-progress-loading-page.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_progress_loading_page() {

	$plugin = new Progress_Loading_Page();
	$plugin->run();

}
run_progress_loading_page();
