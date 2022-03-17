<?php

//hide admin bar
define('AMM_HAT_VERSION', '1.0');
define('AMM_HAT_PLUGIN_URL', plugin_dir_url(__FILE__));
define('AMM_HAT_PLUGIN_DIR', plugin_dir_path(__FILE__));

add_filter('show_admin_bar', '__return_false');
add_action('admin_print_scripts-profile.php', 'amm_hat_add_css_style');

function amm_hat_add_css_style() {
    ?>
    <style type="text/css">
        .show-admin-bar {display: none !important;}
    </style>
    <?php

}
//end
