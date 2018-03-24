<?php
namespace Mindsize\WP_Plugin_Base;

use WP_CLI;

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
class Core {

	/**
	 * Container for template loader instance.
	 */
	protected $template_loader;

	/**
	 * Constructor.
	 */
	public function init() {
		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			WP_CLI::add_command( WP_PLUGIN_BASE_SLUG, __NAMESPACE__ . '\\CLI' );
		}

		$this->template_loader = new Template_Loader();
	}

	/**
	 * Template loader
	 */
	public function template_loader() {
		return $this->template_loader;
	}
}
