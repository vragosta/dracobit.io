<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
		<title><?php bloginfo(); wp_title( '|', true ); ?></title>

		<?php
			wp_head();
			$current_user = wp_get_current_user();
		?>
	</head>

	<body <?php body_class(); ?>>

		<nav class="navbar navbar-default navbar-fixed-top">
      <div id="header-outer-container" class="container">
				<div id="header-inner-container" class="row">
					<div id="header-logo-container" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<h2 id="header-logo"><a href="<?php echo home_url(); ?>">dracobit.io</a></h2>
					</div>
					<div id="header-menu-container" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			      <ul class="nav navbar-nav">
			        <li><a href="/blog">Home</a></li>
							<li><a href="/tutorial">Tutorials</a></li>
							<!-- -->
							<li>
								<?php if( current_user_can( 'edit_posts' ) ) : ?>
									<a href="<?php echo admin_url(); ?>">WP-Admin</a>
								<?php else : ?>
									<li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">One more separated link</a></li>
					          </ul>
					        </li>
								<?php endif; ?>
							</li>
						</ul>
					</div>
					<div id="header-login-container" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<?php echo dracobit_login_form_fields(); ?>
					</div>
				</div>
      </div>
		</nav>
