<?php
/**
 * Plugin Name: Ilmenite Shortcodes
 * Plugin URI: https://github.com/xldstudios/ilmenite-shortcodes
 * Author: XLD Studios
 * Author URI: http://www.xldstudios.com/
 * Description: A small shortcodes plugin that contains only the shortcodes that we have found most essential to include on our clients websites to reduce bloat.
 * Version: 1.2
 * Text Domain: ilshortcodes
 * License: GPL2
 */

/**
 * Get some constants ready for paths when your plugin grows
 */
define( 'ILS_VERSION', '1.2' );
define( 'ILS_PATH', dirname( __FILE__ ) );
define( 'ILS_PATH_INCLUDES', dirname( __FILE__ ) . '/inc' );
define( 'ILS_FOLDER', basename( ILS_PATH ) );
define( 'ILS_URL', plugins_url() . '/' . ILS_FOLDER );
define( 'ILS_URL_INCLUDES', ILS_URL . '/inc' );

class Ilmenite_Shortcodes {

	/**
	 *
	 * Assign everything as a call from within the constructor
	 */
	function __construct() {

		// Add scripts and styles
		add_action( 'wp_enqueue_scripts', array( $this, 'ils_add_JS' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'ils_add_CSS' ) );

		// Register activation and deactivation hooks
		register_activation_hook( __FILE__, array( $this, 'ils_on_activate_callback' ) );
		register_deactivation_hook( __FILE__, array( $this, 'ils_on_deactivate_callback' ) );

		// Make shortcodes available
		add_action( 'init', array( $this, 'ils_shortcodes' ) );

		// Add the textdomain and support translation
		add_action( 'plugins_loaded', array( $this, 'ils_add_textdomain' ) );

		// Add plugin updater
		add_action( 'init', array( $this, 'ils_plugin_update' ) );
	}

	/**
	 * Adding JavaScript scripts
	 */
	function ils_add_JS() {

		// Make sure jQuery is loaded
		wp_enqueue_script( 'jquery' );

	}

	/**
	 * Add CSS styles
	 */
	function ils_add_CSS() {

		// Register Shortcodes CSS
		wp_register_style( 'ilmenite-shortcodes', plugins_url( '/assets/css/shortcodes.css', __FILE__ ), false, ILS_VERSION, 'all' );

		// Enqueue Styles
		wp_enqueue_style( 'ilmenite-shortcodes' );
	}

	/**
	 * Register activation hook
	 */
	function ils_on_activate_callback() {
		// do something on activation
	}

	/**
	 * Register deactivation hook
	 */
	function ils_on_deactivate_callback() {
		// do something when deactivated
	}

	/**
	 * Load Shortcodes
	 */
	function ils_shortcodes() {

		// Buttons Shortcode
		require_once( ILS_PATH_INCLUDES . '/shortcodes/buttons.php' );

		// Code Shortcode
		require_once( ILS_PATH_INCLUDES . '/shortcodes/code.php' );

		// Columns Shortcode
		require_once( ILS_PATH_INCLUDES . '/shortcodes/columns.php' );

		// Divider Shortcode
		require_once( ILS_PATH_INCLUDES . '/shortcodes/divider.php' );

		// Intro Text Shortcode
		require_once( ILS_PATH_INCLUDES . '/shortcodes/intro-text.php' );

	}

	/**
	 * Add textdomain for plugin
	 */
	function ils_add_textdomain() {
		load_plugin_textdomain( 'ilshortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Auto Update Support
	 *
	 * Adds support for auto-updating from GitHub repository.
	 *
	 * @since  1.2
	 */
	function ils_plugin_update() {

		// Include updater class
		require_once( ILS_PATH_INCLUDES . '/updater.php' );

		define( 'WP_GITHUB_FORCE_UPDATE', true );

		if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

			$config = array(
				'slug'               => plugin_basename( __FILE__ ),
				'proper_folder_name' => 'ilmenite-shortcodes',
				'api_url'            => 'https://api.github.com/repos/xldstudios/ilmenite-shortcodes',
				'raw_url'            => 'https://raw.github.com/xldstudios/ilmenite-shortcodes/master',
				'github_url'         => 'https://github.com/xldstudios/ilmenite-shortcodes',
				'zip_url'            => 'https://github.com/xldstudios/ilmenite-shortcodes/archive/master.zip',
				'sslverify'          => true,
				'requires'           => '3.0',
				'tested'             => '3.6',
				'readme'             => 'README.md',
			);

			new WP_GitHub_Updater( $config );

		}

	}

}

// Initialize everything
$is_shortcodes = new Ilmenite_Shortcodes();