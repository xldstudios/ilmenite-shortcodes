<?php
/**
 * Divider Shortcode
 *
 * Creates a divider shortcode, with optional top link.
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes
 **/

function ilmenite_shortcode_divider() {
	return '<div class="divider"></div>';
}
add_shortcode('divider', 'ilmenite_shortcode_divider');

function ilmenite_shortcode_divider_top() {
	return '<div class="divider top"><a href="#">'.__('Top','ilshortcode').'</a></div>';
}
add_shortcode('divider_top', 'ilmenite_shortcode_divider_top');

function ilmenite_shortcode_divider_padding() {
	return '<div class="divider_padding"></div>';
}
add_shortcode('divider_padding', 'ilmenite_shortcode_divider_padding');

function ilmenite_shortcode_divider_line() {
	return '<div class="divider_line"></div>';
}
add_shortcode('divider_line', 'ilmenite_shortcode_divider_line');

function ilmenite_shortcode_clearboth() {
   return '<div class="clearboth"></div>';
}
add_shortcode('clearboth', 'ilmenite_shortcode_clearboth');