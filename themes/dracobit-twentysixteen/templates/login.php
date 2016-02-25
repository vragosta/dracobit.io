<?php

/**
 * Template Name: Login
 *
 * @package WordPress
 */

get_header(); ?>
<div id="login-container" class="row">
	<div id="login-form-mask">
		<div id="login-form-container" class="container">
			<?php echo do_shortcode('[login_form]'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
