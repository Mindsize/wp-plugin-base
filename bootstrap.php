<?php
namespace Mindsize\HerpADerp;

define('WP_PLUGIN_BASE_VERSION', '1.0.0');
define('WP_PLUGIN_BASE_SLUG', 'wp-plugin-base');
define('WP_PLUGIN_BASE_FILE', __FILE__);
define('WP_PLUGIN_BASE_DIR', plugin_dir_path(WP_PLUGIN_BASE_FILE));
define('WP_PLUGIN_BASE_URL', plugin_dir_url(WP_PLUGIN_BASE_FILE));

function wp_plugin_base()
{
    return PluginFactory::create();
}

function load_plugin()
{
    $instance = wp_plugin_base();
    $instance->init();
}
