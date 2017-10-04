<?php

/**
 * Plugin factory, so we get one shared instance of the class that's not a singleton.
 */
class WP_Plugin_Factory {
	public static function create() {
		static $plugin = null;

		if ( null === $plugin ) {
			$plugin = new WP_Plugin_Base();
		}

		return $plugin;
	}
}
