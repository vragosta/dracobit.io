<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
		<title><?php bloginfo(); wp_title( '|', true ); ?></title><?php
		if ( is_singular() || is_page( 'profile' ) ) wp_enqueue_script( 'comment-reply' );
		wp_head();
		$current_user = wp_get_current_user(); ?>
	</head>

	<body <?php body_class(); ?>>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".dracobit-header" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">Dracobit.io</a>
		    </div>

		    <div class="collapse navbar-collapse dracobit-header"><?php
						if ( dracobit_login_check() ) { ?>
							<ul class="nav navbar-nav">
								<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/blog/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/blog/' ); ?>">Home</a></li>
								<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/browse/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/browse/' ); ?>">Browse</a></li>
								<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/about/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/about/' ); ?>">About</a></li>
								<li class="toggle-display <?php echo ( $_SERVER['REQUEST_URI'] == '/upload/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/upload/' ); ?>">Add Content</a></li>
								<li class="toggle-display <?php echo ( $_SERVER['REQUEST_URI'] == '/profile/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/profile/' ); ?>">View Profile</a></li>
								<li class="toggle-display"><a class="dracobit-logout-submit">Logout</a></li>
							</ul>
							<div class="row-fluid">
								<div class="dropdown">
									<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo esc_html( $current_user->display_name ); ?></button>
									<ul class="dropdown-menu">
										<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/upload/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/upload/' ); ?>">Add Content</a></li>
										<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/profile/' ) ? 'active' : '' ; ?>"><a href="<?php echo home_url( '/profile/' ); ?>">View Profile</a></li>
										<li><a class="dracobit-logout-submit">Logout</a></li>
									</ul>
								</div>
							</div><?php
						} else { ?>
							<ul class="nav navbar-nav">
								<li class="dracobit-login">
									<fieldset class="form-inline dracobit-login-form">
										<div class="input-group">
											<input name="dracobit-login-username" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
										</div>
										<div class="input-group">
											<input name="dracobit-login-password" class="form-control" placeholder="Password" type="password" aria-describedby="login-password-icon" required />
										</div>
										<input type="hidden" name="dracobit-login-nonce" value="<?php echo wp_create_nonce( 'dracobit-login-nonce' ); ?>"/>
										<button class="btn btn-info dracobit-login-submit">Submit</button>
									</fieldset>
								</li>
							</ul><?php
						} ?>
		      </ul>
		    </div>
		  </div>
		</nav>
