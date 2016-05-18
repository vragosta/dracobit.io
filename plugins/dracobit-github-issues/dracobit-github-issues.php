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

function dracobit_get_milestones( $atts ) {
  $url = "https://api.github.com/repos/vragosta/dracobit.io/milestones";

  $response = wp_remote_get( $url );

  $milestones = json_decode( wp_remote_retrieve_body ( $response ) );

  return $milestones;
}

function dracobit_get_issues( $atts, $milestone ) {
  $url = "https://api.github.com/repos/vragosta/dracobit.io/issues";

  $query = array();
}

function dracobit_generate_shortcode( $atts ) {
  $atts = shortcode_atts( array(
      'state'      => 'all',
      'assignee'   => 'Frankie',
  		'creator'	   => '',
      'labels'     => '',
      'sort'     => 'updated',
      'direction'     => '',
    	'repo'       => ''
  ), $atts );

  $milestones = dracobit_get_milestones( $atts );

  foreach( $milestones as $milestone ) {
    $output .= $milestone->title . '<br>';
  }

  return $output;
}
add_shortcode( 'dracobit', 'dracobit_generate_shortcode' );

?>
