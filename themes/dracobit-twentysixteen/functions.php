<?php
/**
 * Dracobit functions and definitions.
 *
 * Set up the theme and provide some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

define( 'DRACOBIT_VERSION', '1.0.0' );
define( 'DRACOBIT_WEBSITE_URL', home_url() );

if ( function_exists( 'json_url' ) ) {
	define( 'DRACOBIT_API_URL', json_url() );
}

include_once get_template_directory() . '/inc/tutorial-metabox.php';
include_once get_template_directory() . '/inc/chapter-metabox.php';
include_once get_template_directory() . '/inc/community-metabox.php';
include_once get_template_directory() . '/inc/class-wp-json-tutorial.php';
include_once get_template_directory() . '/inc/class-wp-json-chapter.php';
include_once get_template_directory() . '/inc/class-wp-json-community.php';
include_once get_template_directory() . '/inc/class-wp-json-options.php';

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar( false );

/**
 * Dracobit setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_setup() {
	/**
	 * Make Dracobit available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Dracobit, use a find and
	 * replace to change 'sc' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'dracobit', get_template_directory() . '/languages' );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Removes the auto generator of the paragraph tags when using the wordpress function 'the_content()'.
	remove_filter( 'the_content', 'wpautop' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
}
add_action( 'after_setup_theme', 'dracobit_setup' );

/**
 * Allows for wordpress to recognize all the css/js files,
 * and creates localized variable.
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_scripts() {
	global $post;

	wp_enqueue_style( 'vendors', get_template_directory_uri() . '/css/vendors.min.css', array(), DRACOBIT_VERSION, 'all' );
	wp_enqueue_style( 'dracobit', get_template_directory_uri() . '/style.min.css', array( 'vendors' ), DRACOBIT_VERSION, 'all' );

	wp_enqueue_script( 'vendors', get_template_directory_uri() . '/js/vendors.min.js', array( 'jquery' ), DRACOBIT_VERSION, true );
	wp_enqueue_script( 'dracobit', get_template_directory_uri() . '/js/dracobit.min.js', array( 'jquery', 'backbone', 'underscore', 'vendors' ), DRACOBIT_VERSION, true );

	wp_localize_script( 'dracobit', 'Dracobit', array(
		'currentPost' => $post->ID,
		'options'     => array(
			'search'  => home_url( '/?s=' ),
			'apiUrl'  => json_url(),
			'nonce'   => wp_create_nonce( 'wp_json' ),
			'homeUrl' => home_url(),
		),
	) );
}
add_action( 'wp_enqueue_scripts', 'dracobit_scripts' );

/**
 * Establishes the endpoints for each of the post types,
 * to be used by the backbone framework.
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_endpoints_init() {
	$tutorial_endpoint = new WP_JSON_Tutorial();
	$chapter_endpoint  = new WP_JSON_Chapter();
	$community_endpoint = new WP_JSON_Community();
	$options_endpoint  = new WP_JSON_Options();

	add_filter( 'json_endpoints', array( $tutorial_endpoint, 'register_routes' ) );
	add_filter( 'json_prepare_post', array( $tutorial_endpoint, 'data' ), 10, 3 );

	add_filter( 'json_endpoints', array( $chapter_endpoint, 'register_routes' ) );
	add_filter( 'json_prepare_post', array( $chapter_endpoint, 'data' ), 10, 3 );
	add_action( 'json_insert_post', array( $chapter_endpoint, 'update_post_meta' ), 10, 3 );

	add_filter( 'json_endpoints', array( $community_endpoint, 'register_routes' ) );
	add_filter( 'json_prepare_post', array( $community_endpoint, 'data' ), 10, 3 );
	add_action( 'json_insert_post', array( $community_endpoint, 'update_post_meta' ), 10, 3 );

	add_filter( 'json_endpoints', array( $options_endpoint, 'register_routes' ) );
}
add_action( 'wp_json_server_before_serve', 'dracobit_endpoints_init' );

/**
 * Registers the various post type sidebars.
 *
 * @since  1.0.0
 * @param  void
 * @return void
 */
function dracobit_widgets_init() {
	$sidebars = array( 'post', 'page', 'tutorial' );
	foreach ( $sidebars as $post_type ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Sidebar for post type: %s', 'dracobit' ), $post_type ),
			'id'            => $post_type . '-sidebar',
			'description'   => sprintf( __( 'Sidebar for post type: %s', 'dracobit' ), $post_type ),
			'before_widget' => '<div class="list-group"><a id="%1$s" class="widget widget-' . $post_type . ' %2$s list-group-item">',
			'after_widget'  => '</a></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'dracobit_widgets_init' );

if ( ! function_exists( 'dracobit_errors' ) ) {
	/**
	 * Used for tracking error messages.
	 *
	 * @since  1.0.0
	 * @param  void
	 * @return array $wp_error WP_Error Object
	 */
	function dracobit_errors() {
	  static $wp_error;
	  return isset( $wp_error ) ? $wp_error : ( $wp_error = new WP_Error( null, null, null ) );
	}
}

if ( ! function_exists( 'dracobit_comment_template' ) ) {
	/**
	 * Custom comment template.
	 *
	 * @since  1.0.0
	 * @param  array $comment WP_Comment object
	 * @param  array $args    Comment arguements
	 * @param  int   $depth   Comment Depth level
	 * @return void
	 */
	function dracobit_comment_template( $comment, $args, $depth ) {
	  if ( 'div' === $args['style'] ) {
      $tag       = 'div';
      $add_below = 'comment';
	  } else {
      $tag       = 'li';
      $add_below = 'div-comment';
	  }
	  ?>

	  <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	  <?php if ( 'div' != $args['style'] ) : ?>
	    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	  <?php endif; ?>
	  <div class="comment-author vcard">
	    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	    <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
	  </div>
	  <?php if ( $comment->comment_approved == '0' ) : ?>
	    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
	    <br />
	  <?php endif; ?>

	  <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
	    <?php
	    	printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
	    ?>
	  </div>

	  <?php comment_text(); ?>

	  <div class="reply">
	    <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	  </div>
	  <?php if ( 'div' != $args['style'] ) : ?>
	  </div>
	  <?php endif; ?>
	  <?php
	}
}

if ( ! function_exists( 'dracobit_login_redirect' ) ) {
	/**
	 * Redirects user to homepage if they are not logged in.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function dracobit_login_redirect() {
		if ( ! is_user_logged_in() ) {
			wp_redirect( home_url( '' ) );
			exit;
		}
	}
}

if ( ! function_exists( 'dracobit_login_check' ) ) {
	/**
	 * Determines if user is logged in or not.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function dracobit_login_check() {
		return ( ! is_user_logged_in() ) ? false : true;
	}
}

?>
