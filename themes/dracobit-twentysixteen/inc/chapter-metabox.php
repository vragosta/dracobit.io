<?php

/**
 * Register the widget into the theme.
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_add_chapters_meta_box() {
	add_meta_box(
		'chapters',
		__( 'Chapters', 'dracobit' ),
		'dracobit_chapters_meta_box_callback',
		'chapter'
	);
}
add_action( 'add_meta_boxes', 'dracobit_add_chapters_meta_box' );

if ( ! function_exists( 'dracobit_chapters_meta_box_callback' ) ) {
	/**
	 * Callback when registering widget that displays content in backend.
	 *
	 * @since  1.0.0
	 * @param  array $post WP_Post object
	 * @return void
	 */
	function dracobit_chapters_meta_box_callback( $post ) {
		// Add a nonce field so we can check for it later.
		wp_nonce_field( 'dracobit_save_chapters_meta_box_data', 'dracobit_meta_box_nonce' );

		$version           = get_post_meta( $post->ID, 'version', true );
		$topic             = get_post_meta( $post->ID, 'topic', true );
		$tutorial          = get_post_meta( $post->ID, 'tutorial', true );
		$short_description = get_post_meta( $post->ID, 'short_description', true );
		$keywords          = get_post_meta( $post->ID, 'keywords', true ); ?>

		<table style="width: 100%;">
			<tr>
				<td>
					<label for="version"><?php echo esc_html( __( 'Version:', 'dracobit' ) ); ?></label>
				</td>
				<td>
					<textarea type="text" id="version" name="version" style="width: 100%;"><?php echo esc_textarea( $version ); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="topic"><?php echo esc_html( __( 'Topic:', 'dracobit' ) ); ?></label>
				</td>
				<td>
					<textarea type="text" id="topic" name="topic" style="width: 100%;"><?php echo esc_textarea( $topic ); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="tutorial"><?php echo esc_html( __( 'Tutorial:', 'dracobit' ) ); ?></label>
				</td>
				<td>
					<textarea type="text" id="tutorial" name="tutorial" style="width: 100%;"><?php echo esc_textarea( $tutorial ); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="short_description"><?php echo esc_html( __( 'Short Description:', 'dracobit' ) ); ?></label>
				</td>
				<td>
					<textarea type="text" id="short_description" name="short_description" style="width: 100%;"><?php echo esc_textarea( $short_description ); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="keywords"><?php echo esc_html( __( 'Keywords:', 'dracobit' ) ); ?></label>
				</td>
				<td>
					<textarea type="text" id="keywords" name="keywords" style="width: 100%;"><?php echo esc_textarea( $keywords ); ?></textarea>
				</td>
			</tr>
		</table>

		<?php
	}
}

/**
 * Saves the meta box data for the chapter post type.
 *
 * @since  1.0.0
 * @param  int  $post_id WP_Post object ID
 * @return void
 */
function dracobit_save_chapters_meta_box_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['dracobit_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['dracobit_meta_box_nonce'], 'dracobit_save_chapters_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'chapter' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	}

	// Sanitize user input.
	$version           = sanitize_text_field( $_POST['version'] );
	$topic             = sanitize_text_field( $_POST['topic'] );
	$tutorial          = sanitize_text_field( $_POST['tutorial'] );
	$short_description = sanitize_text_field( $_POST['short_description'] );
	$keywords          = sanitize_text_field( $_POST['keywords'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'version', $version );
	update_post_meta( $post_id, 'topic', $topic );
	update_post_meta( $post_id, 'tutorial', $tutorial );
	update_post_meta( $post_id, 'short_description', $short_description );
	update_post_meta( $post_id, 'keywords', $keywords );

}
add_action( 'save_post', 'dracobit_save_chapters_meta_box_data' );
