<?php
/**
 * Columns Shortcode
 *
 * Creates percentage based columns.
 *
 * @since Ilmenite Shortcodes 1.0
 * @version 1.0
 * @package Ilmenite Shortcodes
 **/

function ilmenite_shortcode_column($atts, $content = null, $code) {
    return '<div class="'.$code.'">' . do_shortcode(trim($content)) . '</div>';
}

function ilmenite_shortcode_column_last($atts, $content = null, $code) {
    return '<div class="'.str_replace('_last','',$code).' last">' . do_shortcode(trim($content)) . '</div><div class="clearboth"></div>';
}

add_shortcode('one_half', 'ilmenite_shortcode_column');
add_shortcode('one_third', 'ilmenite_shortcode_column');
add_shortcode('one_fourth', 'ilmenite_shortcode_column');
add_shortcode('one_fifth', 'ilmenite_shortcode_column');
add_shortcode('one_sixth', 'ilmenite_shortcode_column');

add_shortcode('two_third', 'ilmenite_shortcode_column');
add_shortcode('three_fourth', 'ilmenite_shortcode_column');
add_shortcode('two_fifth', 'ilmenite_shortcode_column');
add_shortcode('three_fifth', 'ilmenite_shortcode_column');
add_shortcode('four_fifth', 'ilmenite_shortcode_column');
add_shortcode('five_sixth', 'ilmenite_shortcode_column');

add_shortcode('one_half_last', 'ilmenite_shortcode_column_last');
add_shortcode('one_third_last', 'ilmenite_shortcode_column_last');
add_shortcode('one_fourth_last', 'ilmenite_shortcode_column_last');
add_shortcode('one_fifth_last', 'ilmenite_shortcode_column_last');
add_shortcode('one_sixth_last', 'ilmenite_shortcode_column_last');

add_shortcode('two_third_last', 'ilmenite_shortcode_column_last');
add_shortcode('three_fourth_last', 'ilmenite_shortcode_column_last');
add_shortcode('two_fifth_last', 'ilmenite_shortcode_column_last');
add_shortcode('three_fifth_last', 'ilmenite_shortcode_column_last');
add_shortcode('four_fifth_last', 'ilmenite_shortcode_column_last');
add_shortcode('five_sixth_last', 'ilmenite_shortcode_column_last');