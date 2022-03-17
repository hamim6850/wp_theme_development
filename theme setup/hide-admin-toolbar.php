<?php

//hide admin bar

add_filter('show_admin_bar', '__return_false');

function hide_admin_bar() {
    ?>
    <style type="text/css">
        .show-admin-bar {display: none !important;}
    </style>
    <?php

}
add_action('admin_print_scripts-profile.php', 'hide_admin_bar');
//end
