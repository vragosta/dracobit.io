<?php

/**
 * Plugin Name: Foobar
 * Description: Hits GitHub API to retrieve Issues, and generates a shortcode to display them.
 * Version: 1.0.0
 * Author: Dracobit
 * Author URI: http://dracobit.io/
 * Text Domain: dracobit
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

//[foobar]
function foobar_func( $atts ) {
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );

?>
