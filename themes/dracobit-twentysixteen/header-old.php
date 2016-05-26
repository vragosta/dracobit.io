<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
		<title><?php bloginfo(); wp_title( '|', true ); ?></title>

		<?php
			if ( is_singular() || is_page( 'profile' ) ) wp_enqueue_script( 'comment-reply' );
			wp_head();
			$current_user = wp_get_current_user();
		?>
	</head>

	<body <?php body_class(); ?>>

		<nav class="navbar navbar-default navbar-fixed-top" style="border-color: #383838;">
			<div id="header-outer-container" class="container">
				<div id="header-inner-container" class="row">
					<div class="navbar-header" style="padding-top: 11px; padding-right: 15px;">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar-collapse">
						 	<i class="fa fa-bars"></i>
						</button>

						<h2 id="header-logo"><a href="<?php echo home_url(); ?>">dracobit.io</a></h2>
		 		  </div>

					<div class="collapse navbar-collapse" id="header-navbar-collapse">
						<ul class="nav navbar-nav" style="">
							<li><a href="/blog">Home</a></li>
							<li><a href="/tutorial">Tutorials</a></li>

						 	<li>
								<?php if( current_user_can( 'edit_posts' ) ) : ?>
									<a href="<?php echo admin_url(); ?>">WP-Admin</a>
								<?php else : ?>
									<a href="">More</a>
								<?php endif; ?>
							</li>
						</ul>

						<?php
							if ( ! is_user_logged_in() ) {
								echo dracobit_login_form_fields();
							}
						?>

						<?php if ( is_user_logged_in() ) { ?>
							<div class="header-logout-container">
								<span class="pull-right" id="header-logout"><?php wp_loginout( home_url( '/' ) ); ?></span>
								<a class="pull-right" id="header-display-name" href="/profile"><?php echo $current_user->display_name; ?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</nav>