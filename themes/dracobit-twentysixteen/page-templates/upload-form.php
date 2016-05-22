<?php

/*
Template Name: Upload Form
*/

get_header(); ?>

<div class="dracobit-container container">
	<main class="row">
    <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8 upload-section-container">

			<div class="row upload-header-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Add Chapter</h3>
					<a href="<?php echo home_url( 'profile' ); ?>">Back to profile</a>
				</div>
			</div>

			<div class="row upload-message-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p class=" alert-danger upload-message">Uploading chapter... this may take a few minutes.</p>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="progress progress-striped active">
								<div class="bar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">1</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Upload an image.</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<div id="dracobit_dropzone_1" class="dracobit_dropzone span2">
							<div id="dracobit_dropzone_1_contents">
								<i class="fa fa-camera-retro fa-3x child-elements" data-id="1"></i>
								<p class="note child-elements" data-id="1">Select a Photo or Drag & Drop</p>
							</div>
						</div>
						<div id="dracobit_dropzone_preview_1" class="dracobit_dropzone_preview dropzone-previews" data-id="1"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11" id="remove-buttons">
						<button class="dracobit_dropzone_delete" data-id="1">Remove</button>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">2</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Enter Chapter title.</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<textarea type="text" class="form-control upload-chapter-title" /></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">3</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Enter Chapter Content.</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<textarea type="text" class="form-control upload-chapter-content" /></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">4</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Enter Chapter Short Description</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<textarea type="text" class="form-control upload-chapter-short-description" /></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">5</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Enter Chapter Tagline.</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<textarea type="text" class="form-control upload-chapter-tagline" /></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">6</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Enter Chapter Version.</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<input type="text" class="form-control upload-chapter-version" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row upload-chapter">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 upload-step-container">
						<div class="upload-step">7</div>
					</div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-content-text">
						<h4>Enter Tutorial that this chapter belongs too.</h4>
					</div>
				</div>
				<div class="row upload-content">
					<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<select name="upload-chapter-tutorial" class="form-control">
							<option></option>
							<?php
								$tutorials = new WP_Query( array( 'post_type' => 'tutorial' ) );
								while ( $tutorials->have_posts() ) : $tutorials->the_post(); ?>
									<option value="<?php echo $post->ID; ?>"><?php echo $post->post_title; ?></option><?php
								endwhile; wp_reset_postdata();
							?>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11 upload-submit-container">
					<button type="button" class="btn btn-info upload-submit">Upload Chapter</button>
				</div>
			</div>

    </section>
    <?php get_sidebar( get_post_type() ); ?>
  </main>
</div>

<?php get_footer(); ?>
