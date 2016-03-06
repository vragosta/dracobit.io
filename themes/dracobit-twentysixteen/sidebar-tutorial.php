<?php
/**
 * The sidebar for the tutorial post type
 *
 * @package    WordPress
 * @subpackage StoryCorps
 * @since      1.0.0
 */

if ( is_active_sidebar( 'tutorial-sidebar' ) ) : ?>
	<aside id="tutorial-sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4" role="complementary">
		<section style="position: fixed; padding: 10px;">
			<?php dynamic_sidebar( 'tutorial-sidebar' ); ?>
		</section>
	</aside>
<?php endif; ?>
