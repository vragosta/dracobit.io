<?php
/**
 * Community post type endpoint and functions.
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

//Blocking direct access to this file.
defined( 'ABSPATH' ) || exit;

class WP_JSON_Community {
	/**
	 * Register custom endpoints.
	 *
	 * @since  1.0.0
	 * @param  array $routes Existing routes
	 * @return array $routes Existing routes with new additions
	 */
   public function register_routes( $routes ) {
     $routes['/community'] = array(
       array( array( $this, 'get_communities' ), WP_JSON_Server::READABLE ),
       array( array( $this, 'create_community' ), WP_JSON_Server::CREATABLE | WP_JSON_Server::ACCEPT_JSON ),
     );

     $routes['/community/(?P<id>\d+)'] = array(
       array( array( $this, 'get_community' ), WP_JSON_Server::READABLE ),
       array( array( $this, 'edit_community' ), WP_JSON_Server::EDITABLE | WP_JSON_Server::ACCEPT_JSON ),
     );

     return $routes;
   }

   public function update_post_meta( $post, $data, $update ) {
    //  if ( isset( $data['image'] ) ) {
    //    update_post_meta( $post['ID'], 'photo', $data['image'] );
    //  }

     if ( isset( $data['members'] ) ) {
       update_post_meta( $post['ID'], 'members', $data['members'] );
     }

     if ( isset( $data['moderators'] ) ) {
       update_post_meta( $post['ID'], 'moderators', $data['moderators'] );
     }

     if ( isset( $data['owners'] ) ) {
       update_post_meta( $post['ID'], 'owners', $data['owners'] );
     }

     if ( isset( $data['community_tier'] ) ) {
       update_post_meta( $post['ID'], 'community_tier', $data['community_tier'] );
     }

     if ( isset( $data['owners'] ) ) {
       update_post_meta( $post['ID'], 'owners', $data['owners'] );
     }

     if ( isset( $data['community_tier'] ) ) {
       update_post_meta( $post['ID'], 'community_tier', $data['community_tier'] );
     }

     if ( isset( $data['chapters'] ) ) {
       update_post_meta( $post['ID'], 'chapters', $data['chapters'] );
     }

     if ( isset( $data['tutorials'] ) ) {
       update_post_meta( $post['ID'], 'tutorials', $data['tutorials'] );
     }

     if ( $update == true ) {
       if ( isset( $data['members'] ) ) {
         update_post_meta( $post['ID'], 'members', $data['members'] );
       }

       if ( isset( $data['moderators'] ) ) {
         update_post_meta( $post['ID'], 'moderators', $data['moderators'] );
       }

       if ( isset( $data['owners'] ) ) {
         update_post_meta( $post['ID'], 'owners', $data['owners'] );
       }

       if ( isset( $data['community_tier'] ) ) {
         update_post_meta( $post['ID'], 'community_tier', $data['community_tier'] );
       }

       if ( isset( $data['owners'] ) ) {
         update_post_meta( $post['ID'], 'owners', $data['owners'] );
       }

       if ( isset( $data['community_tier'] ) ) {
         update_post_meta( $post['ID'], 'community_tier', $data['community_tier'] );
       }

       if ( isset( $data['chapters'] ) ) {
         update_post_meta( $post['ID'], 'chapters', $data['chapters'] );
       }

       if ( isset( $data['tutorials'] ) ) {
         update_post_meta( $post['ID'], 'tutorials', $data['tutorials'] );
       }
     }
   }

   /**
 	 * Expose data on API.
 	 *
 	 * @since  1.0.0
 	 * @param  array  $data         Data from API
 	 * @param  array  $post         WP_Post object
 	 * @return array  $output/$data API data
 	 */
 	public function data( $data, $post ) {
 		if ( 'community' === $post['post_type'] ) {
 		// 	$photo = get_post( ( $post['ID'] - 1 ) );
      //
 		// 	wp_update_post( array(
 		// 		'ID'          => $photo->ID,
 		// 		'post_parent' => $post['ID']
 		// 	) );
      //
 		// 	$photo_attachments = get_attached_media( 'image', $post['ID'] );
      //
 		// 	foreach ( $photo_attachments as $attachment ) {
 		// 		$photos[] = wp_get_attachment_image_src( $attachment->ID, 'medium' );
 		// 	}

 			$output = array(
 				'ID'                    => $data['ID'],
 				'author'                => $data['author'],
 				'classes'               => implode( ' ', get_post_class( '', $post['ID'] ) ),
 				'content'               => $data['content'],
 				'community_tier'        => get_post_meta( $post['ID'], 'community_tier', true ),
 				'date'                  => date( "F j, Y", strtotime($data['date'] ) ),
 				'date_gmt'              => $data['date_gmt'],
 				'date_tz'               => $data['date_tz'],
 				'featured_image'        => $data['featured_image'],
 				'link'                  => $data['link'],
 				'meta'                  => $data['meta'],
 			// 	'photo'                 => isset( $photos[0] ) ? $photos[0][0] : 'https://storycorpsme.s3.amazonaws.com/uploads/2015/03/storycorps.png',
 				'members'               => get_post_meta( $post['ID'], 'members', true ),
 				'moderators'            => get_post_meta( $post['ID'], 'moderators', true ),
 				'owners'                => get_post_meta( $post['ID'], 'owners', true ),
        'chapters'              => get_post_meta( $post['ID'], 'chapters', true ),
        'tutorials'             => get_post_meta( $post['ID'], 'tutorials', true ),
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
	 * Get all the communities.
	 *
	 * @since  1.0.0
	 * @param  array            $filter        Filters that were set on request
	 * @param  int              $page          Pagination variable
	 * @return WP_JSON_Response $wp_json_posts All communities
	 */
	public function get_communities( $filter = array(), $page = 1 ) {
		global $wp_json_posts;
		return $wp_json_posts->get_posts( $filter, 'view', 'community', $page );
	}

  /**
	 * Get a specific Community.
	 *
	 * @since  1.0.0
	 * @param  int              $id            Chapter ID
	 * @return WP_JSON_Response $wp_json_posts Specific community
	 */
   public function get_community( $id ) {
     global $wp_json_posts;
     return $wp_json_posts->get_post( $id, 'view' );
   }

  /**
	 * Create an community.
	 *
	 * @since  1.0.0
	 * @param  array                     $data          Data from API
	 * @return WP_JSON_Response/WP_Error $wp_json_posts Updated posts table with new community/Login error
	 */
	public function create_community( $data ) {
		global $wp_json_posts;
		$current_user_id = get_current_user_id();
		if ( empty( $current_user_id ) ) {
			return new WP_Error( 'json_not_logged_in', __( 'You are not currently logged in.' ), array( 'status' => 401 ) );
		}
		$data['type']   = 'community';
		$data['author'] = $data['author'] ? $data['author'] : $current_user_id;
		$data['status'] = 'publish';
		return $wp_json_posts->create_post( $data );
	}

  /**
	 * Edit a community.
	 *
	 * @since  1.0.0
	 * @param  int              $id            Community ID
	 * @param  array            $data          Data from API
	 * @param  array            $_header       Headers
	 * @return WP_JSON_Response $wp_json_posts Updated posts table with edited community
	 */
   public function edit_community( $id, $data, $_header ) {
     global $wp_json_posts;
     return $wp_json_posts->edit_post( $id, $data, $_header );
   }
}
