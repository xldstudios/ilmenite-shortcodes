<?php
/**
 * Buttons Shortcode
 *
 * This shortcode makes it easy to add buttons without having
 * to use HTML classes in the editor.
 *
 * [button style="" text="" link=""]
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes
 **/

add_shortcode('button','ilmenite_shortcode_button');

function ilmenite_shortcode_button($atts) {

	// Set up arguments for the shortcode
	extract( shortcode_atts( array(
		'style' => '',
		'text' => '',
		'link' => ''
	), $atts ) );

	if($style == "")
		$class = 'button';
	if($style == "blue")
		$class = 'button-primary';
	if($style == "orange")
		$class = 'button-warning';
	if($style == "red")
		$class = 'button-error';
	if($style == "light-blue")
		$class = 'button-info';

		$output .= '<a class="button ' . $class . '" href="' . $link . '">' . $text . '</a>';

	return $output;

}