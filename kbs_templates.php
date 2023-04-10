<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://puentecastilllo.com
 * @since             1.0.0
 * @package           Kbs_templates
 *
 * @wordpress-plugin
 * Plugin Name:       KBS Templates
 * Plugin URI:        https://playwithdough.com
 * Description:       Add additional page templates. 
 * Version:           1.0.0
 * Author:            J.P
 * Author URI:        https://puentecastilllo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kbs_templates
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
define( 'KBS_TEMPLATES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-kbs_templates-activator.php
 */
function activate_kbs_templates() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kbs_templates-activator.php';
	Kbs_templates_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-kbs_templates-deactivator.php
 */
function deactivate_kbs_templates() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kbs_templates-deactivator.php';
	Kbs_templates_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_kbs_templates' );
register_deactivation_hook( __FILE__, 'deactivate_kbs_templates' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-kbs_templates.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_kbs_templates() {

	$plugin = new Kbs_templates();
	$plugin->run();

}
run_kbs_templates();
