<?php

/**
 * Register the widget into the theme
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_add_languages_meta_box() {
	add_meta_box(
		'languages',
		__( 'Tutorials', 'dracobit' ),
		'dracobit_languages_meta_box_callback',
		'language'
	);
}
add_action( 'add_meta_boxes', 'dracobit_add_languages_meta_box' );

/**
 * Callback when registering widget that displays content in backend
 */
function dracobit_languages_meta_box_callback( $post ) {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'dracobit_save_languages_meta_box_data', 'dracobit_meta_box_nonce' );

	/**
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$contributors = get_post_meta( $post->ID, 'contributors', true );
	$tutorials    = get_post_meta( $post->ID, 'tutorials', true ); ?>

	<table style="width: 100%;">
		<tr>
			<td>
				<label for="contributors"><?php echo esc_html( __( 'Contributors:', 'dracobit' ) ); ?></label>
			</td>
			<td>
				<textarea type="text" name="contributors" style="width: 100%;"><?php echo esc_textarea( $contributors ); ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label for="tutorials"><?php echo esc_html( __( 'Tutorials:', 'dracobit' ) ); ?></label>
			</td>
			<td>
				<textarea type="text" name="tutorials" style="width: 100%;"><?php echo esc_textarea( $tutorials ); ?></textarea>
			</td>
		</tr>
	</table>

	<?php
}

/**
 * Saves the meta box data for the language post type
 */
function dracobit_save_languages_meta_box_data( $post_id ) {
	/**
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['dracobit_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['dracobit_meta_box_nonce'], 'dracobit_save_languages_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'language' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	}

	// Sanitize user input.
	$contributors = sanitize_text_field( $_POST['contributors'] );
	$tutorials     = sanitize_text_field( $_POST['tutorials'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'contributors', $contributors );
	update_post_meta( $post_id, 'tutorials', $tutorials );

}
add_action( 'save_post', 'dracobit_save_languages_meta_box_data' );
