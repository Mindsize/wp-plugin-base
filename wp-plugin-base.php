<?php
/**
 * Plugin Name:       AAAA Test 888
 * Description:       Herp a Derp
 * Author:            Mindsize
 * Author URI:        http://mindsize.me
 * Version:           1.0.0
 * Requires at least: 4.4
 * Tested up to:      4.8
 */

namespace Mindsize\WP_Plugin_Base;

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';

add_action('plugins_loaded', __NAMESPACE__ . '\\load_plugin');
