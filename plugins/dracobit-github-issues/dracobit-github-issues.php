<?php

/**
 * Plugin Name: Dracobit Github Issues
 * Description: Hits GitHub API to retrieve issues, and generates a shortcode to display them.
 * Version: 1.0.0
 * Author: Dracobit
 * Author URI: http://dracobit.io/
 * Text Domain: dracobit
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

function dracobit_generate_shortcode( $atts ) {
  $atts = shortcode_atts( array(
      'state'      => 'all',
      'assignee'   => '',
  		'creator'	   => '',
      'labels'     => '',
      'sort'     => 'updated',
      'direction'     => '',
    	'repo'       => ''
  ), $atts );

  return $atts;
}
add_shortcode( 'dracobit', 'dracobit_generate_shortcode' );

?>
