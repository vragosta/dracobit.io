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

class WP_JSON_Chapter {
	/**
	 * Register custom endpoints.
	 *
	 * @since  1.0.0
	 * @param  array $routes Existing routes
	 * @return array $routes Existing routes with new additions
	 */
	public function register_routes( $routes ) {
		$routes['/chapter'] = array(
			array( array( $this, 'get_chapters' ), WP_JSON_Server::READABLE ),
			array( array( $this, 'create_chapter' ), WP_JSON_Server::CREATABLE | WP_JSON_Server::ACCEPT_JSON ),
		);

		$routes['/chapter/(?P<id>\d+)'] = array(
			array( array( $this, 'get_chapter' ), WP_JSON_Server::READABLE ),
			array( array( $this, 'edit_chapter' ), WP_JSON_Server::EDITABLE | WP_JSON_Server::ACCEPT_JSON )
		);

		return $routes;
	}

	/**
	 * Update post meta when API is hit.
	 *
	 * @since  1.0.0
	 * @param  WP_Post $post   WP_Post object
	 * @param  array   $data   $_POST data from request
	 * @param  boolean $update If request is update
	 * @return void
	 */
	public function update_post_meta( $post, $data, $update ) {
		if ( isset( $data['image'] ) ) {
			update_post_meta( $post['ID'], 'photo', $data['image'] );
		}

		if ( isset( $data['short_description'] ) ) {
			update_post_meta( $post['ID'], 'short_description', $data['short_description'] );
		}

		if ( isset( $data['tagline'] ) ) {
			update_post_meta( $post['ID'], 'tagline', $data['tagline'] );
		}

		if ( isset( $data['version'] ) ) {
			update_post_meta( $post['ID'], 'version', $data['version'] );
		}

		if ( isset( $data['tutorial'] ) ) {
			update_post_meta( $post['ID'], 'tutorial', $data['tutorial'] );
		}

		if ( isset( $data['keywords'] ) ) {
			if ( taxonomy_exists( 'keywords' ) ) {
				if ( is_string( $data['keywords'] ) ) {
					$keywords = sanitize_text_field( $data['keywords'] );
					wp_set_object_terms( $post['ID'], $keywords, 'keywords' );
				} elseif ( is_array( $data['keywords'] ) ) {
					$keywords = array_map( 'sanitize_text_field', $data['keywords'] );
					wp_set_object_terms( $post['ID'], $keywords, 'keywords' );
				}
			}
		}

		if ( $update == true ) {
			if ( isset( $data['tagline'] ) ) {
				update_post_meta( $post['ID'], 'tagline', $data['tagline'] );
			}

			if ( isset( $data['version'] ) ) {
				update_post_meta( $post['ID'], 'version', $data['version'] );
			}

			if ( isset( $data['tutorial'] ) ) {
				update_post_meta( $post['ID'], 'tutorial', $data['tutorial'] );
			}

			if ( isset( $data['short_description'] ) ) {
				update_post_meta( $post['ID'], 'short_description', $data['short_description'] );
			}

			if ( isset( $data['keywords'] ) ) {
				if ( taxonomy_exists( 'keywords' ) ) {
					if ( is_string( $data['keywords'] ) ) {
						$keywords = sanitize_text_field( $data['keywords'] );
						wp_set_object_terms( $post['ID'], $keywords, 'keywords' );
					} elseif ( is_array( $data['keywords'] ) ) {
						$keywords = array_map( 'sanitize_text_field', $data['keywords'] );
						wp_set_object_terms( $post['ID'], $keywords, 'keywords' );
					}
				}
			}
		}
	}

	/**
	 * Expose data on API.
	 *
	 * @since  1.0.0
	 * @param  array  $data         TODO
	 * @param  array  $post         TODO
	 * @param  string $context      TODO
	 * @return array  $output/$data TODO
	 */
	public function data( $data, $post, $context ) {
		if ( 'chapter' === $post['post_type'] ) {
			$photo = get_post( ( $post['ID'] - 1 ) );

			wp_update_post( array(
				'ID'          => $photo->ID,
				'post_parent' => $post['ID']
			) );

			$photo_attachments = get_attached_media( 'image', $post['ID'] );

			foreach ( $photo_attachments as $attachment ) {
				$photos[] = wp_get_attachment_image_src( $attachment->ID, 'medium' );
			}

			$output = array(
				'ID'                    => $data['ID'],
				'author'                => $data['author'],
				'classes'               => implode( ' ', get_post_class( '', $post['ID'] ) ),
				'content'               => $data['content'],
				'short_description'     => get_post_meta( $post['ID'], 'short_description', true ),
				'date'                  => date("F j, Y", strtotime($data['date'] ) ),
				'date_gmt'              => $data['date_gmt'],
				'date_tz'               => $data['date_tz'],
				'featured_image'        => $data['featured_image'],
				'link'                  => $data['link'],
				'meta'                  => $data['meta'],
				'photo'                 => isset( $photos[0] ) ? $photos[0][0] : 'https://storycorpsme.s3.amazonaws.com/uploads/2015/03/storycorps.png',
				'tagline'               => get_post_meta( $post['ID'], 'tagline', true ),
				'version'               => ( get_post_meta( $post['ID'], 'version', true ) ) ? get_post_meta( $post['ID'], 'version', true ) : '1.0',
				'tutorial'              => get_post_meta( $post['ID'], 'tutorial', true ),
				'keywords'              => wp_get_post_terms( $post['ID'], 'keywords', array( 'fields' => 'names' ) ),
				'slug'                  => $data['slug'],
				'terms'                 => $data['terms'],
				'title'                 => $data['title'],
				'type'                  => $data['type']
			);

			return $output;
		}

		return $data;
	}

	/**
	 * Get all the chapters.
	 *
	 * @param  array            $filter TODO
	 * @param  int              $page   TODO
	 * @return WP_JSON_Response $output TODO
	 */
	public function get_chapters( $filter = array(), $page = 1 ) {
		global $wp_json_posts;
			$output = $wp_json_posts->get_posts( $filter, 'view', 'chapter', $page );
		return $output;
	}

	/**
	 * Get a specific Chapter.
	 *
	 * @since  1.0.0
	 * @param  int              $id     TODO
	 * @return WP_JSON_Response $output TODO
	 */
	public function get_chapter( $id ) {
		global $wp_json_posts;
			$output = $wp_json_posts->get_post( $id, 'view' );
		return $output;
	}

	/**
	 * Create an interview.
	 *
	 * @since  1.0.0
	 * @param  array            $data TODO
	 * @return WP_JSON_Response void  TODO
	 */
	public function create_chapter( $data ) {
		global $wp_json_posts;
		$current_user_id = get_current_user_id();
		if ( empty( $current_user_id ) ) {
			return new WP_Error( 'json_not_logged_in', __( 'You are not currently logged in.' ), array( 'status' => 401 ) );
		}
		$data['type']   = 'chapter';
		$data['author'] = $data['author'] ? $data['author'] : $current_user_id;
		$data['status'] = 'publish';
		return $wp_json_posts->create_post( $data );
	}

	/**
	 * Edit a chapter.
	 *
	 * @since  1.0.0
	 * @param  int              $id      TODO
	 * @param  array            $data    TODO
	 * @param  array            $_header TODO
	 * @return WP_JSON_Response void     TODO
	 */
	public function edit_chapter( $id, $data, $_headers = array() ) {
		global $wp_json_posts;
		return $wp_json_posts->edit_post( $id, $data, $_headers );
	}
}
