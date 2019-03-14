<?php
/**
 * Main entry point to the plugin.
 *
 * Plugin Name:       WordPress Plugin Base
 * Description:       This is a sample plugin that was created with mindsize/wp-plugin-base
 * Author:            Mindsize
 * Author URI:        http://mindsize.me
 * Version:           1.0.0
 * Requires at least: 4.4
 * Tested up to:      4.8
 *
 * @package Mindsize\WP_Plugin_Base
 */

namespace Mindsize\WP_Plugin_Base;

define( 'WP_PLUGIN_BASE_VERSION', '1.0.0' );
define( 'WP_PLUGIN_BASE_SLUG', 'wp-plugin-base' );
define( 'WP_PLUGIN_BASE_FILE', __FILE__ );
define( 'WP_PLUGIN_BASE_DIR', plugin_dir_path( WP_PLUGIN_BASE_FILE ) );
define( 'WP_PLUGIN_BASE_URL', plugin_dir_url( WP_PLUGIN_BASE_FILE ) );

if ( file_exists( WP_PLUGIN_BASE_DIR . 'vendor/autoload.php' ) ) {
	require_once WP_PLUGIN_BASE_DIR . 'vendor/autoload.php';
}

/**
 * Function access to the shared instance of the plugin.
 *
 * Used in lieu of a singleton.
 *
 * @throws \Exception In case the WP_Plugin_Factory class is not found.
 * @return Core
 */
function wp_plugin_base() {
	if ( ! class_exists( __NAMESPACE__ . '\\WP_Plugin_Factory' ) ) {
		throw new \Exception( __NAMESPACE__ . '\\WP_Plugin_Factory class cannot be found.' );
	}

	return WP_Plugin_Factory::create();
}

/**
 * Function that's hooked into plugins loaded.
 *
 * @return void
 */
function load_plugin() {
	$instance = wp_plugin_base();
	$instance->init();
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\\load_plugin' );
