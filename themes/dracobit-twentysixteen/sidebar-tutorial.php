<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage StoryCorps
 * @since      1.0.0
 */

$tutorials = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC' ) );

if ( is_active_sidebar( 'tutorials-sidebar' ) ) : ?>
	<aside id="tutorials-sidebar" class="col-xs-12 col-sm-3 col-md-3 col-lg-3" role="complementary">
		<section id="tutorials-nav-container">
			<legend>Tutorials</legend>
			<div class="list-group">

			<?php if ( $tutorials->have_posts() ) {
				while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>

					<a href="#tutorial-<?php echo $post->post_name; ?>" class="list-group-item" name="<?php echo $post->post_name; ?>" data-tab="<?php echo $tutorials->current_post; ?>">
						<div class="row">
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<p id="tutorials-version">v<?php echo get_post_meta( $post->ID, 'version', true); ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="list-group-item-text"><?php echo get_post_meta( $post->ID, 'tagline', true ); ?></p>
							</div>
						</div>
					</a>

					<?php endwhile;
				}
			?>
			</div>
		</section>
		<?php dynamic_sidebar( 'tutorials-sidebar' ); ?>
	</aside>
<?php endif; ?>
