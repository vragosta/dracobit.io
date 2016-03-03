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
					<div id="header-logo-container" class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
						<h2 id="header-logo"><a href="<?php echo home_url(); ?>">dracobit.io</a></h2>
					</div>
					<div id="header-menu-container" class="col-xs-5 col-sm-4 col-md-5 col-lg-5">
			      <ul class="nav navbar-nav">
			        <li><a href="<?php echo home_url( 'home' ); ?>">Home</a></li>
							<li><a href="/tutorials">Tutorials</a></li>
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
							<li>
								<?php if( current_user_can( 'edit_posts' ) ) : ?>
									<a href="<?php echo admin_url(); ?>">WP-Admin</a>
								<?php endif; ?>
							</li>
						</ul>
					</div>

					<div id="header-controls-mask" class="col-xs-4 col-sm-5 col-md-5 col-lg-5">
						<div id="header-controls-container">
							<?php if ( ! is_user_logged_in() ) { ?>
								<a id="header-login-button" href="/login">Login</a>
								<a id="header-signup-button" href="/signup">Signup</a>
							<?php } ?>
							<?php if ( is_user_logged_in() ) { ?>
								<a id="header-display-name" href="/profile"><?php echo $current_user->display_name; ?></a>
								<span id="header-logout-container"><?php wp_loginout( home_url( '/' ) ); ?></span>
							<?php } ?>
						</div>
					</div>
				</div>
      </div>
    </nav>
