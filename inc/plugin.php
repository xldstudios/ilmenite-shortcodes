<?php
/**
 * Base Plugin Class
 *
 * This class is extended in both admin and public and makes
 * config class available to both subclasses.
 * The classes also includes methods for adding WP filters and actions
 * and includes an init() function to setup filters and actions in public and admin
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes
 **/

abstract class Ilmenite_Shortcodes {
	
	protected $_config;
	
	/**
	 * Constuction Function
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	public function __construct( IS_Config $config ) {
		
		// Loads config
		$this->_config = $config;
		
		// Loads init function
		$this->init();
		
	}
	
	/**
	 * Init Function
	 *
	 * Used by public and admin to register filters and actions
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	abstract protected function init();
	
	protected function add_action( $action, $function = '', $priority = 10, $accepted_args = 1 ) {
		add_action( $action, array($this, $function == '' ? $action : $function ), $priority, $accepted_args );
	}
	
	protected function add_filter( $filter, $function, $priority = 10, $accepted_args = 1 ) {
		add_filter( $filter, array($this, $function == '' ? $filter : $function ), $priority, $accepted_args );
	}
	
	/**
	 * Loads Shortcodes
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	function shortcodes() {
		
		require_once(IS_SHORTCODES . '/buttons.php'); // Load buttons shortcode
		require_once(IS_SHORTCODES . '/code.php'); // Load code shortcode
		require_once(IS_SHORTCODES . '/columns.php'); // Load columns shortcode
		require_once(IS_SHORTCODES . '/divider.php'); // Load divider shortcode		
		
	}
	
}