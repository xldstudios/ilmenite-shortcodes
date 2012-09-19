<?php
/*
Plugin Name: Ilmenite Shortcodes
Plugin URI: http://www.xldstudios.com/plugins/ilmenite-shortcodes/
Description: A standard set of shortcodes.
Version: 1.1
Author: XLD Studios
Author URI: http://www.xldstudios.com
License: GPL2
*/

/**
 * Plugin Definitions
 **/

define( 'IS_VERSION', '1.0' );

define( 'IS_PLUGIN_PATH', dirname( __FILE__ ) );
define( 'IS_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'IS_PLUGIN_FILE', plugin_basename( __FILE__ ) );

define( 'IS_PLUGIN_INC', IS_PLUGIN_PATH . '/inc' );
define( 'IS_SHORTCODES', IS_PLUGIN_PATH . '/shortcodes' );

define( 'IS_ASSETS', IS_PLUGIN_URL . '/assets' );
define( 'IS_CSS', IS_ASSETS . '/css' );
define( 'IS_IMAGES', IS_ASSETS . '/images' );
define( 'IS_JS', IS_ASSETS . '/js' );

/**
 * Set up Plugin
 *
 * Loads all the plugin files and calls when appropriate.
 **/

require_once( IS_PLUGIN_INC . '/plugin.php' ); // Include base file
require_once( IS_PLUGIN_INC . '/config.php' ); // Get config file

$class_name = 'IS_';

// Load admin file if in the admin section
if( is_admin() ) {
	$class_name .= 'Admin';
	require_once( IS_PLUGIN_INC . '/admin.php' );
} else {
	$class_name .= 'Public';
	require_once( IS_PLUGIN_INC . '/theme-functions.php' );
	require_once( IS_PLUGIN_INC . '/public.php' );
}

/**
 * Configuration Data
 **/

$is_config_data = array(
	'plugin_file' => IS_PLUGIN_FILE,
	'version' => IS_VERSION
);

/**
 * Execute Plugin Class
 **/

$ilmenite_shortcode = new $class_name( new IS_Config( $is_config_data ) );

unset( $class_name, $is_config_data ); // Unset when done.

/**
 * Auto Update
 **/
add_action('init', 'is_auto_update');

function is_auto_update() {
	
	require_once( IS_PLUGIN_INC . '/auto-update.php' ); // Load auto update class
	
	$remote_update_link = 'http://www.xldstudios.com/updates/plugins/ilmenite-shortcodes/update.php';
	
	new WP_Auto_Update( IS_VERSION, $remote_update_link, IS_PLUGIN_FILE );
	
}