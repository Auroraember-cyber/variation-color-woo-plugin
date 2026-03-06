<?php
namespace VCWP\Frontend;

if (!defined('ABSPATH')) exit;

add_action('woocommerce_single_product_summary', function() {
    global $product;
    if (!$product) return;

    echo '<div class="vcwp-swatch-wrapper">';
    echo ' <!-- Tailwind swatches will be rendered here --> ';
    echo '</div>';
}, 20);
