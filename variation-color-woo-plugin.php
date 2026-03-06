<?php
/**
 * Plugin Name: Variation Color Woo Plugin
 * Plugin URI: https://github.com/Auroraember-cyber/variation-color-woo-plugin
 * Description: Premium WooCommerce swatch plugin with 50 Tailwind blocks, React, Gutenberg + Elementor integration.
 * Version: 1.0.0
 * Author: Aurora EMBER-CYBER
 * Author URI: https://github.com/Auroraember-cyber
 */

if (!defined('ABSPATH')) exit;

define('VCWP_PATH', plugin_dir_path(__FILE__));
define('VCWP_URL', plugin_dir_url(__FILE__));

// Load Core Application
require_once VCWP_PATH . 'app/Core/Application.php';

// Boot the plugin
add_action('plugins_loaded', function() {
    VCWP\Core\Application::boot();
});
