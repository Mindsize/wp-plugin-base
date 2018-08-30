<?php
/**
 * Plugin Name:       WordPress Plugin Base
 * Description:       This is a sample plugin that was created with mindsize/wp-plugin-base
 * Author:            Mindsize
 * Author URI:        http://mindsize.me
 * Version:           1.0.0
 * Requires at least: 4.4
 * Tested up to:      4.8
 */

namespace Mindsize\WP_Plugin_Base;

require_once 'vendor/autoloader.php';
require_once 'bootstrap.php';

add_action('plugins_loaded', __NAMESPACE__ . '\\load_plugin');
