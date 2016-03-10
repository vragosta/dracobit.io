<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage StoryCorps
 * @since      1.0.0
 */

if ( is_active_sidebar( sprintf( '%s-sidebar', get_post_type() ) ) ) : ?>
	<aside class="dracobit-sidebar col-xs-12 col-sm-4 col-md-4 col-lg-4" role="complementary">
		<?php dynamic_sidebar( sprintf( '%s-sidebar', get_post_type() ) ); ?>
	</aside>
<?php endif; ?>
