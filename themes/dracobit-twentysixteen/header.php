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
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Brand</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
						<li class="active"><a href="/blog">Home</a></li>
						<li><a href="/tutorial">Tutorials</a></li>
						<?php if ( current_user_can( 'edit_posts' ) ) { ?>
							<li><a href="<?php echo admin_url(); ?>">WP-Admin</a></li>
						<?php } ?>
		      </ul>
		    </div>

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
		</nav>
