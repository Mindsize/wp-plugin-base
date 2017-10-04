<?php

/**
 * WP Plugin Base main class file.
 *
 * This class file is the base of this WordPress sample plugin, someday it will do great things.
 *
 * @since     1.0.0
 * @author    Mindsize <info@mindsize.me>
 * @copyright Copyright (c) 2017 Mindsize <info@mindsize.me>
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WP_Plugin_Base {
	/**
	 * Constructor.
	 */
	public function __construct() {
		// Register the CLI command if we're running WP_CLI
		if( defined( 'WP_CLI' ) && WP_CLI ) {
			WP_CLI::add_command( 'wp-plugin-base', 'WP_Plugin_Base_CLI' );
		}
	}
}