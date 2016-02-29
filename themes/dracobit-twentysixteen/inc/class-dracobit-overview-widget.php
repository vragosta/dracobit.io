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

class Dracobit_Story_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'story_widget',
			__( 'Overview Widget', 'dracobit' ),
			array( 'description' => __( 'A custom widget for displaying the overview of the current tutorial.', 'dracobit' ), )
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title         = ( ! empty( $instance['title'] ) )         ? $instance['title']           : '';
		$id            = ( ! empty( $instance['id'] ) )            ? $instance['id']              : '';
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html( __( 'Title:', 'dracobit' ) ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $id ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>"><?php echo esc_html( __( 'ID:', 'dracobit' ) ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>" type="text" value="<?php echo esc_attr( $id ); ?>">
		</p>
		<?php
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

		$args = array();
		$args['post_type'] = array( 'tutorial' );
		$args['posts_per_page'] = 1;
		$audio_shortcode = '[audio id="%s"]';

		if ( $instance['title'] ) {

		} else if ( $instance['id'] ) {
			$args['p'] = $instance['id'];
			$args['post__in'] = $instance['id'];
		}

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

			$before = '<li class="widget story_widget"><h2>%s</h2>';
			$after = '<p class="story_content">%s</p></li>';
			echo sprintf( $before,get_the_title() );
			echo do_shortcode( sprintf( $audio_shortcode, $post->ID ) );

			echo sprintf( $after, get_the_content() );
			}
		}
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                   = array();
		$instance['title']          = ( ! empty( $new_instance['title'] ) )          ? strip_tags( $new_instance['title'] )      : '';
		$instance['id']             = ( ! empty( $new_instance['id'] ) )             ? strip_tags( $new_instance['id'] )         : '';

		return $instance;
	}
}
