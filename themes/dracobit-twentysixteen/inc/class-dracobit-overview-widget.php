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
		$id            = ( ! empty( $instance['id'] ) )            ? $instance['id']              : '';
		$categories    = ( ! empty( $instance['categories'] ) )    ? $instance['categories']      : array();
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>"><?php echo esc_html( __( 'ID:', 'storycorps' ) ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>" type="text" value="<?php echo esc_attr( $id ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>"><?php echo esc_html( __( 'Categories:', 'storycorps' ) ); ?></label>
			<select class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'categories' ) ); ?>[]" id="<?php echo esc_attr( $this->get_field_id( 'categories' ) ); ?>" multiple size="15">
				<?php
				$taxonomies = array(
					'themes',
					'category',
					'locations',
					'venue',
					'initiatives',
					'partners',
				);

				foreach ( $taxonomies as $taxonomy ) {
					$terms = get_terms( $taxonomy, array(
						'parent'  => 0,
					) );

					if ( $terms ) {
						printf( '<optgroup label="%s">', esc_html( ucfirst( $terms[0]->taxonomy ) ) );
						foreach ( $terms as $term ) {
							$value = sprintf( '%s-%s', $term->taxonomy, $term->term_id );
							printf( '<option value="%1$s" %3$s>%2$s</option>', esc_attr( $value ), esc_html( $term->name ), ( in_array( $value, $categories ) ) ? 'selected="selected"' : '' );
						}
						echo '</optgroup>';
					}
				}
				?>
			</select>
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
		$args['post_type'] = array( 'listen', 'podcast' );
		$args['posts_per_page'] = 1;
		$audio_shortcode = '[audio id="%s"]';

		if ( $instance['id'] ) {
			$args['p'] = $instance['id'];
			$args['post__in'] = $instance['id'];

		} else if ( $instance['categories'] ) {
			$args['tax_query'] = array();
			$categories        = array();

			foreach ( $instance['categories'] as $term ) {
				$term = explode( '-', $term );
				$categories[ $term[0] ][] = $term[1];
			}

			if ( $categories ) {
				foreach ( $categories as $taxonomy => $term_id ) {
					$args['tax_query'][] = array(
						'taxonomy' => $taxonomy,
						'field'    => 'term_id',
						'terms'    => $term_id,
					);
				}
			}
		}

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				$terms = wp_get_object_terms( $post->ID, 'themes' );

				$before = '<li class="widget story_widget"><h2>%s</h2>';
				$after = '<p class="story_content">%s</p></li>';
				$after_with_terms  = '<p class="story_content">%1$s</p><a class="story_taxonomy" href="%2$s" title="%3$s">%3$s<i class="fa fa-chevron-right"></i></a></li>';
				echo sprintf( $before,get_the_title() );
				echo do_shortcode( sprintf( $audio_shortcode, $post->ID ) );

				if ( $terms ) {
					echo sprintf( $after_with_terms, strip_tags( get_post_meta( $post->ID, 'short_description', true ) ), get_term_link( $terms[0] ), $terms[0]->name );
				} else {
					echo sprintf( $after, get_the_content() );
				}
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
		$instance['id']             = ( ! empty( $new_instance['id'] ) )             ? strip_tags( $new_instance['id'] )         : '';
		$instance['categories']     = ( ! empty( $new_instance['categories'] ) )     ? $new_instance['categories']               : array();

		return $instance;
	}
}
