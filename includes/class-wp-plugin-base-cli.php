<?php
namespace Mindsize\Plugin_Base;
use WP_CLI_Command;
use WP_CLI;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( ! class_exists( 'WP_CLI_Command' ) ) {
	return;
}

/**
 * CLI access to the sample plugin.
 *
 * This class adds CLI capabilities to the sample plugin by extending WP CLI. For now it just includes a basic game of
 * ping pong. A version that is impossible to win.
 *
 * @since     1.0.0
 * @author    Mindsize <info@mindsize.me>
 * @copyright Copyright (c) 2017 Mindsize <info@mindsize.me>
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 *
 * ## EXAMPLES
 *
 *     # Play a round of ping pong.
 *     $ wp wp-plugin-base ping
 *     pong
 */
class WP_Plugin_Base_CLI extends WP_CLI_Command {

	public function ping() {
		WP_CLI::line( 'pong' );
	}

}
