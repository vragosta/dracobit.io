<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage StoryCorps
 * @since      1.0.0
 */

// ISSUE: Figure out why this is not working
if ( is_active_sidebar( 'tutorials-sidebar' ) ) : ?>
	<aside class="col-xs-12 col-sm-3 col-md-3 col-lg-3" role="complementary">
		<?php dynamic_sidebar( 'tutorials-sidebar' ); ?>
	</aside>
<?php endif; ?>
