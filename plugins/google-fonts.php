<?php
/* plugin to activate google fonts */
function rmccc_add_fonts(){
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?/family=late:400,900');
    wep_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts', 'rmcc_add_google_fornts');
?>