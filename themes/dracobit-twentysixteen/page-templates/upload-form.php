<?php

/*
Template Name: Upload Form
*/

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="display: flex; flex-direction: column; height: 650px; justify-content: space-between;">

			<div class="row" style="height: 50px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex; align-items: center; justify-content: space-between;">
					<h3 style="margin: 10px 0;">Add Chapter</h3>
					<a href="<?php echo home_url( 'profile' ); ?>" style="color: #ccc; text-decoration: none;">Back to profile</a>
				</div>
			</div>
			<div class="row-fluid">
				<div class="row" style="height: 50px;">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="display: flex; align-items: center; height: 100%">
						<div class="upload-step">1</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="display: flex; align-items: center; height: 100%; padding: 0;">
						<h4>Enter Chapter title.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding: 0;">
						<textarea type="text" class="form-control upload-chapter-title" style="border-radius: 0; resize: none; height: 70px;" /></textarea>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="row" style="height: 50px;">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="display: flex; align-items: center; height: 100%">
						<div class="upload-step">2</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="display: flex; align-items: center; height: 100%; padding: 0;">
						<h4>Enter Chapter Content.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding: 0;">
						<textarea type="text" class="form-control upload-chapter-content" style="border-radius: 0; resize: none; height: 100px;" /></textarea>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="row" style="height: 50px;">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="display: flex; align-items: center; height: 100%">
						<div class="upload-step">3</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="display: flex; align-items: center; height: 100%; padding: 0;">
						<h4>Enter Chapter Tagline.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding: 0;">
						<textarea type="text" class="form-control upload-chapter-tagline" style="border-radius: 0; resize: none; height: 70px;" /></textarea>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="row" style="height: 50px;">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="display: flex; align-items: center; height: 100%">
						<div class="upload-step">4</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="display: flex; align-items: center; height: 100%; padding: 0;">
						<h4>Enter Chapter Version.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding: 0;">
						<input type="text" class="form-control upload-chapter-version" style="border-radius: 0; resize: none;" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding: 0;">
					<button type="button" class="btn btn-info upload-submit" style="width: 100%;">Upload Chapter</button>
				</div>
			</div>

    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
