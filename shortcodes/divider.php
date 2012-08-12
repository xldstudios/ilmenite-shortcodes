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

function lucent_shortcode_divider() {
	return '<div class="divider"></div>';
}
add_shortcode('divider', 'lucent_shortcode_divider');

function lucent_shortcode_divider_top() {
	return '<div class="divider top"><a href="#">'.__('Top','lucent').'</a></div>';
}
add_shortcode('divider_top', 'lucent_shortcode_divider_top');

function lucent_shortcode_divider_padding() {
	return '<div class="divider_padding"></div>';
}
add_shortcode('divider_padding', 'lucent_shortcode_divider_padding');

function lucent_shortcode_divider_line() {
	return '<div class="divider_line"></div>';
}
add_shortcode('divider_line', 'lucent_shortcode_divider_line');

function lucent_shortcode_clearboth() {
   return '<div class="clearboth"></div>';
}
add_shortcode('clearboth', 'lucent_shortcode_clearboth');