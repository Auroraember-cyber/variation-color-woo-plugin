<?php
if (!defined('ABSPATH')) exit;

add_action('init', function() {
    for ($i = 1; $i <= 50; $i++) {
        register_block_type('vcwp/block-' . $i, [
            'editor_script' => 'vcwp-editor-script',
            'render_callback' => function($attributes) use ($i) {
                return file_get_contents(VCWP_PATH . "app/Builder/TailwindComponents/block-$i.html");
            }
        ]);
    }
});
