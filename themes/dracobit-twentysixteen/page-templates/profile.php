<?php

/**
 * Template Name: Profile
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<legend>Profile</legend>

    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
