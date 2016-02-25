<?php

/**
 * Template Name: Signup
 *
 * Handles authentication, registering, resetting passwords, forgot password,
 * and other user handling.
 *
 * @package WordPress
 */

get_header(); ?>

<div id="signup-container" class="row">
	<div id="signup-form-mask">
		<div id="signup-form-container" class="container">
			<?php echo do_shortcode('[register_form]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
