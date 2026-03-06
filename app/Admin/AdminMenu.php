<?php
namespace VCWP\Admin;

if (!defined('ABSPATH')) exit;

add_action('admin_menu', function() {
    add_menu_page(
        'VCWP Settings',
        'VCWP',
        'manage_options',
        'vcwp-settings',
        function() {
            echo '<div class="wrap"><h1>Variation Color Woo Plugin Settings</h1></div>';
        },
        'dashicons-art',
        56
    );
});
