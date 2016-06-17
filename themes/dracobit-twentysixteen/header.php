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
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dracobit-header" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Dracobit.io</a>
		    </div>

		    <div class="collapse navbar-collapse" id="dracobit-header">
		      <ul class="nav navbar-nav"><?php
						if ( dracobit_login_check() ) { ?>
							<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/blog/' ) ? 'active' : '' ; ?>"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Home</a></li>
							<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/tutorial/' ) ? 'active' : '' ; ?>"><a href="<?php echo esc_url( home_url( '/tutorial' ) ); ?>">Tutorials</a></li>
							<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/chapter/' ) ? 'active' : '' ; ?>"><a href="<?php echo esc_url( home_url( '/chapter' ) ); ?>">Chapters</a></li><?php
							if ( current_user_can( 'edit_posts' ) ) { ?>
								<li><a href="<?php echo esc_url( admin_url() ); ?>">WP-Admin</a></li><?php
							} ?>
							<li class="<?php echo ( $_SERVER['REQUEST_URI'] == '/profile/' ) ? 'active' : '' ; ?>"><a href="<?php echo esc_url( home_url( '/profile' ) ); ?>"><?php echo esc_html( $current_user->display_name ); ?></a></li>
							<li><a id="dracobit-logout-submit">Logout</a></li><?php
						} else { ?>
							<li class="dracobit-login">
								<fieldset id="dracobit-login-form" class="form-inline">
									<div class="input-group">
										<input name="dracobit-login-username" id="dracobit-login-username" class="form-control" placeholder="Username" type="text" aria-describedby="login-username-icon" required />
									</div>
									<div class="input-group">
										<input name="dracobit-login-password" id="dracobit-login-password" class="form-control" placeholder="Password" type="password" aria-describedby="login-password-icon" required />
									</div>
									<input type="hidden" name="dracobit-login-nonce" value="<?php echo wp_create_nonce( 'dracobit-login-nonce' ); ?>"/>
									<button id="dracobit-login-submit" class="btn btn-info">Submit</button>
								</fieldset>
							</li><?php
						} ?>
		      </ul>
		    </div>
		  </div>
		</nav>
