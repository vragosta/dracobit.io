<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

// Blocking direct access to this file.
defined( 'ABSPATH' ) || exit;

class WP_JSON_Tutorial {
	/**
	 * Register custom endpoints.
	 *
	 * @param  array $routes
	 * @return array
	 */
	public function register_routes( $routes ) {
		$routes['/tutorial'] = array(
			array( array( $this, 'get_tutorials' ), WP_JSON_Server::READABLE ),
		);

		$routes['/tutorial/(?P<id>\d+)'] = array(
			array( array( $this, 'get_tutorial' ), WP_JSON_Server::READABLE ),
		);

		return $routes;
	}

	/**
	 *
	 * @param  array  $data
	 * @param  array  $post
	 * @param  string $context
	 * @return array
	 */
	function data( $data, $post, $context ) {
		if ( 'tutorial' === $post['post_type'] ) {
			$output = array(
				'ID'                    => $data['ID'],
				'classes'               => implode( ' ', get_post_class( '', $post['ID'] ) ),
				'content'               => $data['content'],
				'date'                  => date("F j, Y", strtotime($data['date'] ) ),
				'date_gmt'              => $data['date_gmt'],
				'date_tz'               => $data['date_tz'],
				'featured_image'        => $data['featured_image'],
				'link'                  => $data['link'],
				'meta'                  => $data['meta'],
				'short_description'     => strip_tags( get_post_meta( $post['ID'], 'short_description', true ) ),
				'slug'                  => $data['slug'],
				'terms'                 => $data['terms'],
				'title'                 => $data['title'],
				'type'                  => $data['type'],
				'tagline'               => get_post_meta( $post['ID'], 'tagline', true ),
				'version'               => get_post_meta( $post['ID'], 'version', true ),
				'credits'               => array(
					'author'       => get_post_meta( $post['ID'], 'credit_author', true ),
					'team'         => get_post_meta( $post['ID'], 'credit_team', true ),
					'contributors' => get_post_meta( $post['ID'], 'credit_contributors', true ),
				),
			);

			return $output;
		}

		return $data;
	}

	/**
	 *
	 * @param  array $filter
	 * @param  int   $page
	 * @return WP_JSON_Response
	 */
	public function get_tutorials( $filter = array(), $page = 1 ) {
		global $wp_json_posts;
			$output = $wp_json_posts->get_posts( $filter, 'view', 'tutorial', $page );
		return $output;
	}

	/**
	 *
	 * @param  int $id
	 * @return WP_JSON_Response
	 */
	public function get_tutorial( $id ) {
		global $wp_json_posts;
			$output = $wp_json_posts->get_post( $id, 'view' );
		return $output;
	}

}
