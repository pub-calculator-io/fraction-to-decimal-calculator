<?php
/*
Plugin Name: CI Fraction to decimal calculator
Plugin URI: https://www.calculator.io/fraction-to-decimal-calculator/
Description: The fraction to decimal calculator allows the user to convert fractions to decimal points while specifying the rounding options.
Version: 1.0.0
Author: Fraction to Decimal Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_fraction_to_decimal_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Fraction to Decimal Calculator by www.calculator.io";

function display_calcio_ci_fraction_to_decimal_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Fraction to Decimal Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_fraction_to_decimal_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_fraction_to_decimal_calculator', 'display_calcio_ci_fraction_to_decimal_calculator' );