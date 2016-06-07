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

  $response = wp_remote_get( $url );
  $issues = json_decode( wp_remote_retrieve_body( $url ) );

  return $issues;
}

function dracobit_generate_shortcode( $atts ) {
  $atts = shortcode_atts( array(
      'state'      => 'all',
      'assignee'   => '',
  		'creator'	   => '',
      'labels'     => '',
      'sort'     => 'updated',
      'direction'     => '',
    	'repo'       => 'vragosta'
  ), $atts );

  array_walk_recursive( $atts, 'sanitize_text_field' );

  if ( ! empty( $atts['repo'] ) ) {
    $milestones = dracobit_get_milestones( $atts );
  } else {
    return "Error: No repository found.";
  }

  foreach( $milestones as $milestone ) {
    $output .= $milestone->title;
  }

  return $output;
}
add_shortcode( 'dracobit', 'dracobit_generate_shortcode' );

?>
