<?php
/**
 * TODO
 *
 * @package    WordPress
 * @subpackage Dracobit
 * @since      1.0.0
 */

// Blocking direct access to this file.
defined( 'ABSPATH' ) || exit;

/**
 * TODO.
 *
 * @param  string $post_type TODO.
 * @param  bool   $refresh   TODO.
 * @return string            TODO.
 */
function dracobit_get_incrementor( $post_type, $refresh = false ) {
	$incrementor_key   = 'dracobit';
	$incrementor_group = 'incrementors';
	$incrementor_value = wp_cache_get( $incrementor_key, $incrementor_group );

	if ( false === $incrementor_value || true === $refresh ) {
		$incrementor_value = $post_type . time();
		wp_cache_set( $incrementor_key, $incrementor_value, $incrementor_group );
	}

	return $incrementor_value;
}

/**
 * TODO.
 *
 * @param int    $post_id TODO.
 * @param object $post    TODO.
 * @param bool   $update  TODO.
 */
function dracobit_invalidate_cache_on_save( $post_id, $post, $update ) {
	do_action( 'dracobit_invalidate_cache', $post_id, $post );
}
add_action( 'save_post', 'dracobit_invalidate_cache_on_save', 10, 3 );

/**
 * TODO.
 *
 * @param string $new_status TODO.
 * @param string $old_status TODO.
 * @param object $post       TODO.
 */
function dracobit_invalidate_cache_on_status_change( $new_status, $old_status, $post ) {
	do_action( 'dracobit_invalidate_cache', $post->ID, $post );
}
add_action( 'transition_post_status', 'dracobit_invalidate_cache_on_status_change', 10, 3 );

/**
 * TODO.
 *
 * @param string $post_id TODO.
 * @param object $post    TODO.
 */
function dracobit_purge_cache( $post_id, $post ) {
	switch ( $post->post_type ) {
		case 'tutorial':
			dracobit_varnish_purge( DRACOBIT_WEBSITE_URL, '/tutorial', true );
			dracobit_varnish_purge( DRACOBIT_API_URL,     '/animation', true );
			dracobit_get_incrementor( 'animations', true );
			break;
	}
}
add_action( 'dracobit_invalidate_cache', 'dracobit_purge_cache', 10, 2 );

/**
 * TODO.
 *
 * @param string $endpoint  TODO.
 * @param bool   $purge_all TODO.
 */
function dracobit_varnish_purge( $endpoint, $purge_all = false ) {
	$site_url = home_url( '/' );
	$url      = parse_url( $site_url );

	if ( defined( VHP_VARNISH_IP ) && false !== VHP_VARNISH_IP ) {
		$varnish_ip = VHP_VARNISH_IP;
	}

	if ( true === $purge_all ) {
		$url_regex = '.*';
		$varnish_purge_method = 'regex';
	} else {
		$url_regex = '';
		$varnish_purge_method = 'default';
	}

	$http = 'http://';
	if ( isset( $varnish_ip ) && null !== $varnish_ip ) {
		$purge = $http . $varnish_ip . $endpoint . $url_regex;
	} else {
		$purge = $site_url . $endpoint . $url_regex;
	}

	wp_remote_request( $purge, array(
		'method'  => 'PURGE',
		'headers' => array(
			'host'           => $url['host'],
			'X-Purge-Method' => $varnish_purge_method
		)
	) );
}
