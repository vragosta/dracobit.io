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
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dracobit-header" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">Dracobit.io</a>
		    </div>

		    <div class="collapse navbar-collapse" id="dracobit-header">
		      <ul class="nav navbar-nav">
						<li class="active"><a href="/blog">Home</a></li>
						<li><a href="/tutorial">Tutorials</a></li>
						<?php
							if ( current_user_can( 'edit_posts' ) ) { ?>
								<li><a href="<?php echo admin_url(); ?>">WP-Admin</a></li><?php
							}

							if ( ! is_user_logged_in() ) {
								echo '<li class="dracobit-login">' . dracobit_login_form_fields() . '</li>';
							}

							if ( is_user_logged_in() ) { ?>
								<li><a href="/profile"><?php echo $current_user->display_name; ?></a></li>
								<li><?php wp_loginout( home_url( '/' ) ); ?></li><?php
							}
						?>
		      </ul>
		    </div>
		  </div>
		</nav>
