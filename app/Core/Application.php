<?php
namespace VCWP\Core;

class Application {
    public static function boot() {
        // Admin
        if (is_admin()) {
            require_once VCWP_PATH . 'app/Admin/AdminMenu.php';
        }

        // Frontend
        require_once VCWP_PATH . 'app/Frontend/SwatchRenderer.php';

        // Builder
        require_once VCWP_PATH . 'app/Builder/GutenbergBlock.php';
        require_once VCWP_PATH . 'app/Builder/ElementorWidget.php';

        // Licensing
        require_once VCWP_PATH . 'app/Licensing/LicenseManager.php';
    }
}
