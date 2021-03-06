<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','font-awesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// Add Footer Widgets
/**
 * Register our sidebars and widgetized areas.
 *
 */

// Alter Widgets
require_once( get_stylesheet_directory() . '/inc/widget/widgets.php' );

// Alter Theme Customizer options
require_once( get_stylesheet_directory() . '/inc/customize/options.php' );

?>
