<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage StoryCorps
 * @since      1.0.0
 */

// ISSUE: Figure out why this is not working
if ( is_active_sidebar( 'tutorial-sidebar' ) ) : ?>
	<aside class="col-xs-12 col-sm-4" role="complementary">
		<?php dynamic_sidebar( 'tutorial-sidebar' ) ); ?>
	</aside>
<?php endif; ?>
