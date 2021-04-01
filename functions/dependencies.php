<?php 
//LOAD SCRIPTS
function enqueue_dmi_scripts() {
    wp_enqueue_script('Bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/js/all.js', false, null, null, false);
    wp_enqueue_script('dmi-scripts', get_template_directory_uri() . '/assets/js/dmiScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_dmi_scripts');
//LOAD CSS
function enqueue_dmi_styles() {
    wp_enqueue_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('dmi-styles', get_template_directory_uri() . '/assets/styles/dmiStyles.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_dmi_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'dynamic-marketing' ),
));
// Nav Walker
