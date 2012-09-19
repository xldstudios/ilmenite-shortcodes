<?php
/**
 * Intro Text Shortcode
 *
 * @since Ilmenite Shortcodes 1.1
 * @version 1.0
 **/
 
add_shortcode('intro_text','ilmenite_introtext_shortcode');

function ilmenite_introtext_shortcode( $atts, $content = null ) {
	
	// Set up arguments
	extract( shortcode_atts( array( 
		'class' => ''
	), $atts ) );
	
	
	// Create the shortcode output
	$output .= '<div class="intro-text ' . $class . '">';
		$output .= do_shortcode($content);
	$output .= '</div>';
}