<?php

/**
 * Register the widget into the theme.
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_add_communities_meta_box() {
  add_meta_box(
    'communities',
    __( 'Communities', 'dracobit' ),
    'dracobit_communities_meta_box_callback',
    'community'
  );
}
add_action( 'add_meta_box', 'dracobit_add_communities_meta_box' );

if ( ! function_exists( 'dracobit_communities_meta_box_callback' ) ) {
	/**
	 * Callback when registering widget that displays content in backend.
	 *
	 * @since  1.0.0
	 * @param  array $post WP_Post object
	 * @return void
	 */
	function dracobit_communities_meta_box_callback( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'dracobit_save_communities_meta_box_data', 'dracobit_meta_box_nonce' );

    $members        = get_post_meta( $post->ID, 'members', true );
    $moderators     = get_post_meta( $post->ID, 'moderators', true );
    $owners         = get_post_meta( $post->ID, 'owners', true );
    $community_tier = get_post_meta( $post->ID, 'community_tier', true );
    $chapters       = get_post_meta( $post->ID, 'chapters', true );
    $tutorials      = get_post_meta( $post->ID, 'tutorials', true ); ?>

    <table style="width: 100%;">
      <tr>
        <td>
          <label for="members"><<?php echo esc_html( __( 'Members:', 'dracobit' ) ); ?></label>
        </td>
        <td>
          <textarea id="members" name="members" style="width: 100%;"><?php echo esc_attr( $members ); ?></textarea>
        </td>
      </tr>

      <tr>
        <td>
          <label for="moderators"><<?php echo esc_html( __( 'Moderators:', 'dracobit' ) ); ?></label>
        </td>
        <td>
          <textarea id="moderators" name="moderators" style="width: 100%;"><?php echo esc_attr( $moderators ); ?></textarea>
        </td>
      </tr>

      <tr>
        <td>
          <label for="owners"><<?php echo esc_html( __( 'owners:', 'dracobit' ) ); ?></label>
        </td>
        <td>
          <textarea id="owners" name="owners" style="width: 100%;"><?php echo esc_attr( $owners ); ?></textarea>
        </td>
      </tr>

      <tr>
        <td>
          <label for="community_tier"><<?php echo esc_html( __( 'Community Tier:', 'dracobit' ) ); ?></label>
        </td>
        <td>
          <textarea id="community_tier" name="community_tier" style="width: 100%;"><?php echo esc_attr( $community_tier ); ?></textarea>
        </td>
      </tr>

      <tr>
        <td>
          <label for="chapters"><<?php echo esc_html( __( 'Chapters:', 'dracobit' ) ); ?></label>
        </td>
        <td>
          <textarea id="chapters" name="chapters" style="width: 100%;"><?php echo esc_attr( $chapters ); ?></textarea>
        </td>
      </tr>

      <tr>
        <td>
          <label for="tutorials"><<?php echo esc_html( __( 'Tutorials:', 'dracobit' ) ); ?></label>
        </td>
        <td>
          <textarea id="tutorials" name="tutorials" style="width: 100%;"><?php echo esc_attr( $tutorials ); ?></textarea>
        </td>
      </tr>
    </table>

    <?php
  }
}

/**
 * Saves the meta box data for the communities post type.
 *
 * @since  1.0.0
 * @param  int  $post_id WP_Post object ID
 * @return void
 */
function dracobit_save_communities_meta_box_data( $post_id ) {
  /**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['dracobit_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['dracobit_meta_box_nonce'], 'dracobit_save_communities_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'community' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	}

  // Sanitize user input.
  $members         = sanitize_text_field( $_POST['members'] );
	$moderators      = sanitize_text_field( $_POST['moderators'] );
	$owners          = sanitize_text_field( $_POST['owners'] );
	$community_tier  = sanitize_text_field( $_POST['community_tier'] );
	$chapters        = sanitize_text_field( $_POST['chapters'] );
  $tutorials       = sanitize_text_field( $_POST['tutorials'] );

  // Update the meta field in the database.
  update_post_meta( $post_id, 'members', $members );
  update_post_meta( $post_id, 'moderators', $moderators );
  update_post_meta( $post_id, 'owners', $owners );
  update_post_meta( $post_id, 'community_tier', $community_tier );
  update_post_meta( $post_id, 'chapters', $chapters );
  update_post_meta( $post_id, 'tutorials', $tutorials );

}
add_action( 'save_post', 'dracobit_save_communities_meta_box_data' );
