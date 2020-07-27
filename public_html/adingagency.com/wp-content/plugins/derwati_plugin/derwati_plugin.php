<?php
/**
 * Plugin Name: Derwati WordPress Theme Plugin Bundle
 * Plugin URI: http://themeforest.net/user/ridianur
 * Description: This is plugin bundle for Derwati WordPress Theme.
 * Author: ridianur
 * Author URI: http://themeforest.net/user/ridianur
 * Version: 1
 */




if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'DERWATI__FILE__', __FILE__ );
define( 'DERWATI_URL', plugins_url( '/', DERWATI__FILE__ ) );

/**
 * Load Hello World
 *
 * Load the plugin after Elementor (and other plugins) are loaded.
 *
 * @since 1.0.0
 */
function derwati_plg_load() {
	// Load localization file
	load_plugin_textdomain( 'derwati_plg' );

	// Require the main plugin file
	require( __DIR__ . '/plugin.php' );
}
add_action( 'plugins_loaded','derwati_plg_load' );


function derwati_plg_fail_load_out_of_date() {
	if ( ! current_user_can( 'update_plugins' ) ) {
		return;
	}

	$file_path = 'elementor/elementor.php';

	$upgrade_link = wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' ) . $file_path, 'upgrade-plugin_' . $file_path );
	$message = '<p>' . __( 'Derwati Plugin is not working because you are using an old version of Elementor.', 'derwati_plg' ) . '</p>';
	$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $upgrade_link, __( 'Update Elementor Now', 'derwati_plg' ) ) . '</p>';

	echo '<div class="error">' . $message . '</div>';
}


//adding optiontree into themes
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );
	/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );



//include elementor addon
include('inc/elementor-addon.php');

//include portfolio custom post type,metaboxes & single portfolio script
include('inc/portfolio.php');
include('inc/portfolio-metaboxes.php');

//include page metabox
include('inc/page-metaboxes.php');

//include post metabox
include('inc/post-metaboxes.php');

//include custom footer
include('inc/footer.php');

//include custom header
include('inc/header.php');

//include admin custom script 
include('inc/admin-script.php');

//include single portfolio function
include('inc/single-portfolio.php');


//custom widget
//include about us widget
include('inc/about-us.php');
//flickrfeed widget & shortcode
include('inc/flickr-feed.php');
include('inc/flickr-widget.php');

//included sharing
include('inc/sharebox.php');

//included one click importer
include('inc/one-click.php');


//optiontree included function
//included theme options export/import
include('inc/theme-import.php');
//included theme options
include('inc/theme-options.php');

function admin_style() {
  wp_enqueue_style('admin-styles', DERWATI_URL.'inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


//plugin translation
function rdn_textdomain_translation() {
    load_plugin_textdomain('derwati_plg', false, dirname(plugin_basename(__FILE__)) . '/lang/');
} // end custom_theme_setup
add_action('after_setup_theme', 'rdn_textdomain_translation');

