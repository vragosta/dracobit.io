<?php

/**
 * Template Name: Browse
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
		<section class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="height: 200px; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
			<div class="row-fluid" style="height: 58%; display: flex; flex-direction: column; justify-content: flex-end;">
				<span style="font-size: 32px;">Browse</span>
			</div>
			<div class="dracobit-browse-content row-fluid">
				<li class="active"><a href="<?php echo home_url( '/topic/' ); ?>">Topics</a></li>
				<li><a href="<?php echo home_url( '/tutorial/' ); ?>">Tutorials</a></li>
				<li><a href="<?php echo home_url( '/chapter/' ); ?>">Chapters</a></li>
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>
