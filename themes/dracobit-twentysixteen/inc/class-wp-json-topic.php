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

class WP_JSON_Topic {
	/**
	 * Register custom endpoints.
	 *
	 * @since  1.0.0
	 * @param  array $routes Existing routes
	 * @return array $routes Existing routes with new additions
	 */
	public function register_routes( $routes ) {
		$routes['/topic'] = array(
			array( array( $this, 'get_topics' ), WP_JSON_Server::READABLE ),
		);

		$routes['/topic/(?P<id>\d+)'] = array(
			array( array( $this, 'get_topic' ), WP_JSON_Server::READABLE ),
		);

		return $routes;
	}

	/**
	 * TODO
	 *
	 * @since  1.0.0
	 * @param  array  $data         TODO
	 * @param  array  $post         TODO
	 * @param  string $context      TODO
	 * @return array  $output/$data TODO
	 */
	function data( $data, $post, $context ) {
		if ( 'topic' === $post['post_type'] ) {
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
				'tagline'               => get_post_meta( $post['ID'], 'tagline', true ),
				'version'               => ( get_post_meta( $post['ID'], 'version', true ) ) ? get_post_meta( $post['ID'], 'version', true ) : '1.0',
				'chapters'              => get_posts( array(
					'post_type' => 'chapter',
					'order'     => 'asc',
					'numberposts' => 20,
					'turorial'  => $data['terms']['topic']
				) ),
				'slug'                  => $data['slug'],
				'terms'                 => $data['terms'],
				'title'                 => $data['title'],
				'type'                  => $data['type'],
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
	 * TODO
	 *
	 * @since  1.0.0
	 * @param  array            $filter TODO
	 * @param  int              $page   TODO
	 * @return WP_JSON_Response $output TODO
	 */
	public function get_topics( $filter = array(), $page = 1 ) {
		global $wp_json_posts;
			$output = $wp_json_posts->get_posts( $filter, 'view', 'topic', $page );
		return $output;
	}

	/**
	 * TODO
	 *
	 * @since  1.0.0
	 * @param  int              $id     TODO
	 * @return WP_JSON_Response $output TODO
	 */
	public function get_topic( $id ) {
		global $wp_json_posts;
			$output = $wp_json_posts->get_post( $id, 'view' );
		return $output;
	}

}
