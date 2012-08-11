<?php
/**
 * Admin Class
 *
 * Extends the plugin class with features run on the admin panel.
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes
 **/

class IS_Admin extends Ilmenite_Shortcodes {
	
	
	/**
	 * Admin Init Function
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	protected function init() {
		
		// Runs the activation function
		register_activation_hook( $this->_config->plugin_file, array( $this, 'activate' ) );
		
	}
	
	/**
	 * Activate Function
	 *
	 * Code that is run when plugin is activated.
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	public function activate() {
		
	}
	
}