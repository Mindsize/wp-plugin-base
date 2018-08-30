<?php
namespace Mindsize\WP_Plugin_Base;

use Gamajo_Template_Loader;

/**
 * Template loader which allows for WordPress template files that can even be overridden from the theme.
 *
 * @since     1.0.0
 * @author    Mindsize <info@mindsize.me>
 * @copyright Copyright (c) 2017 Mindsize <info@mindsize.me>
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */
class TemplateLoader extends Gamajo_Template_Loader
{

    /**
     * Prefix for filter names.
     *
     * @since 1.0.0
     *
     * @var string
     */
    protected $filter_prefix = WP_PLUGIN_BASE_SLUG;

    /**
     * Directory name where custom templates for this plugin should be found in the theme.
     *
     * @since 1.0.0
     *
     * @var string
     */
    protected $theme_template_directory = WP_PLUGIN_BASE_SLUG;

    /**
     * Reference to the root directory path of this plugin.
     *
     * Can either be a defined constant, or a relative reference from where the subclass lives.
     *
     * @since 1.0.0
     *
     * @var string
     */
    protected $plugin_directory = WP_PLUGIN_BASE_DIR;

    /**
     * Directory name where templates are found in this plugin.
     *
     * Can either be a defined constant, or a relative reference from where the subclass lives.
     *
     * e.g. 'templates' or 'includes/templates', etc.
     *
     * @since 1.1.0
     *
     * @var string
     */
    protected $plugin_template_directory = 'templates';
}
