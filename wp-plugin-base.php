<?php
namespace Mindsize\Plugin_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Name:       WordPress Plugin Base
 * Description:       This is a sample plugin that was created with mindsize/wp-plugin-base
 * Author:            Mindsize
 * Author URI:        http://mindsize.me
 * Version:           1.0.0
 * Requires at least: 4.4
 * Tested up to:      4.8
 */

define( 'WP_PLUGIN_BASE_VERSION', '1.0.0' );
define( 'WP_PLUGIN_BASE_SLUG', 'wp-plugin-base' );
define( 'WP_PLUGIN_BASE_FILE', __FILE__ );
define( 'WP_PLUGIN_BASE_DIR', plugin_dir_path( WP_PLUGIN_BASE_FILE ) );
define( 'WP_PLUGIN_BASE_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( WP_PLUGIN_BASE_FILE ) ), basename( WP_PLUGIN_BASE_FILE ) ) ) );

if( file_exists( WP_PLUGIN_BASE_DIR . 'vendor/autoload_52.php' ) ) {
	require( WP_PLUGIN_BASE_DIR . 'vendor/autoload_52.php' );
}

if( class_exists( __NAMESPACE__ .'\\WP_Plugin_Factory' ) ) {

	function wp_plugin_base() {
		return WP_Plugin_Factory::create();
	}

	add_action( 'plugins_loaded', __NAMESPACE__ . '\\wp_plugin_base' );
}
