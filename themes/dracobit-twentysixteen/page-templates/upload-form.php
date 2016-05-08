<?php

/*
Template Name: Upload Form
*/

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<div class="row" style="height: 50px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex; align-items: center; justify-content: space-between;">
					<h3 style="margin: 10px 0;">Add Chapter</h3>
					<a href="<?php echo home_url( 'profile' ); ?>" style="color: #ccc; text-decoration: none;">Back to profile</a>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex; align-items: center;">
					<div class="upload-step">1</div>
					<h4 style="float: left; margin: 0 0 0 20px;">Enter title.</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<textarea type="text" class="form-control" style="border-radius: 0; resize: none;" /></textarea>
				</div>
			</div>
    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>
