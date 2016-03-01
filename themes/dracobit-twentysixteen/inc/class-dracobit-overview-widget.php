<?php
/**
 * Builds Dracobit' custom Overview widget
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

// Blocking direct access to this file.
defined( 'ABSPATH' ) || exit;

class Dracobit_Overview_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'overview_widget',
			__( 'Overview Widget', 'dracobit' ),
			array( 'description' => __( 'A custom widget for displaying the overview of the current tutorial.', 'dracobit' ), )
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		global $post;
		$args                   = array();
		$args['post_type']      = array( 'tutorial' );
		$args['posts_per_page'] = 1;
		$args['p']              = $post->ID;
		$query = new WP_Query( $args );

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				$before = '<li class="widget dracobit-overview-widget"><h2>%s</h2>';
				$after  = '<p class="dracobit-overview-content">%s</p></li>';
				echo sprintf( $before, 'Overview' );
				$overview = apply_filters( 'the_content', get_post_meta( $post->ID, 'overview', true ) );
				echo sprintf( $after, $overview );
			}
		}
	}
}

?>
