<?php
/**
 * Code Markup Shortcode
 *
 * Used similar to the <pre> element in HTML
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes 1.0
 **/

function ilmenite_code_shortcode( $atts, $content = null ) {
	
	// Set up arguments
	extract( shortcode_atts( array( 
		'codetype' => ''
	), $atts ) );
	
	
	// Create the shortcode output
	$output .= '<pre data-codetype="' . $codetype . '">';
		$output .= do_shortcode($content);
	$output .= '</pre>';
}