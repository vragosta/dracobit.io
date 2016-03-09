<?php

/**
 * Register the widget into the theme
 */
function dracobit_add_tutorials_meta_box() {
	add_meta_box(
		'tutorials',
		__( 'Tutorials', 'dracobit' ),
		'dracobit_tutorials_meta_box_callback',
		'tutorial'
	);
}
add_action( 'add_meta_boxes', 'dracobit_add_tutorials_meta_box' );

/**
 * Callback when registering widget that displays content in backend
 */
function dracobit_tutorials_meta_box_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'dracobit_save_tutorials_meta_box_data', 'dracobit_meta_box_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$tagline  = get_post_meta( $post->ID, 'tagline', true );
	$version  = get_post_meta( $post->ID, 'version', true );
	$overview = get_post_meta( $post->ID, 'overview', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td>
				<label for="tagline"><?php echo esc_html( __( 'Tagline:', 'dracobit' ) ); ?></label>
			</td>
			<td>
				<input type="text" id="tagline" name="tagline" value="<?php echo esc_attr( $tagline ); ?>" style="width: 100%;">
			</td>
		</tr>
		<tr>
			<td>
				<label for="version"><?php echo esc_html( __( 'Version:', 'dracobit' ) ); ?></label>
			</td>
			<td>
				<input type="text" id="version" name="version" value="<?php echo esc_attr( $version ); ?>" style="width: 100%;">
			</td>
		</tr>
		<tr>
			<td>
				<label for="overview"><?php echo esc_html( __( 'Overview:', 'dracobit' ) ); ?></label>
			</td>
			<td>
				<?php
					wp_editor( $overview, 'overview', array(
						'media_buttons' => false,
						'editor_height' => 200,
						'textarea_name' => 'overview',
					) );
				?>
			</td>
		</tr>
	</table>

	<?php
}

/**
 * Saves the meta box data for the tutorials post type
 */
function dracobit_save_tutorials_meta_box_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['dracobit_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['dracobit_meta_box_nonce'], 'dracobit_save_tutorials_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'tutorial' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */

	// Sanitize user input.
	$tagline  = sanitize_text_field( $_POST['tagline'] );
	$version  = sanitize_text_field( $_POST['version'] );
	$overview = $_POST['overview'];

	// Update the meta field in the database.
	update_post_meta( $post_id, 'tagline', $tagline );
	update_post_meta( $post_id, 'version', $version );
	update_post_meta( $post_id, 'overview', $overview );

}
add_action( 'save_post', 'dracobit_save_tutorials_meta_box_data' );
