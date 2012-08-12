<?php
/**
 * Public Class Extend
 *
 * Functions run on the public side
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes
 **/

class IS_Public extends Ilmenite_Shortcodes {
	
	/**
	 * Init Function
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	protected function init() {
		
		$this->add_filter( 'wp_head', 'stylesheets' ); // Add stylesheets to wp_head
		
	}
	
	/**
	 * Loads Plugin Stylesheets
	 *
	 * @since Ilmenite Shortcodes 1.0
	 **/
	public function stylesheets() {
			
		// wp_register_style( $handle, $src, $deps, $ver, $media ); 
		wp_register_style('ilmenite-shortcodes', IS_CSS . '/shortcodes.css', false, IS_VERSION, 'all');
		
		// Enqueue
		wp_enqueue_style('ilmenite-shortcodes');
		
	}
	
}