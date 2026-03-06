<?php
if (!defined('ABSPATH')) exit;

add_action('elementor/widgets/widgets_registered', function() {
    for ($i = 1; $i <= 50; $i++) {
        class_alias('VCWP\\Builder\\ElementorWidgetBase', 'VCWP_Block_' . $i);
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new ('VCWP_Block_' . $i)());
    }
});

namespace VCWP\Builder;

class ElementorWidgetBase extends \Elementor\Widget_Base {
    public function get_name() { return 'vcwp_block'; }
    public function get_title() { return 'VCWP Block'; }
    public function get_icon() { return 'eicon-color-picker'; }
    public function get_categories() { return ['general']; }
    protected function render() {
        echo file_get_contents(VCWP_PATH . 'app/Builder/TailwindComponents/block-1.html');
    }
}
