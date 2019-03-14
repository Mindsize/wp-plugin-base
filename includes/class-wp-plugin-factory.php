<?php
/**
 * File that holds the WP Plugin Factory.
 *
 * It implements a shared instance. Functional access calls this
 * which returns a stored instance of a plugin.
 *
 * @package Mindsize\WP_Plugin_Base
 */
namespace Mindsize\WP_Plugin_Base;

/**
 * Plugin factory, so we get one shared instance of the class that's not a singleton.
 *
 * @since     1.0.0
 * @author    Mindsize <info@mindsize.me>
 * @copyright Copyright (c) 2017 Mindsize <info@mindsize.me>
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */
class WP_Plugin_Factory {
	/**
	 * Method that either creates an instance of Core, or returns the
	 * previously created instance of Core.
	 *
	 * @return Core
	 */
	public static function create() {
		static $plugin = null;

		if ( null === $plugin ) {
			$plugin = new Core();
		}

		return $plugin;
	}
}
