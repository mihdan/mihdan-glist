<?php
/**
 * Plugin Name: Mihdan: Glist.
 */
 
add_action( 'init', 'register_gist_oembed_provider' );

function register_gist_oembed_provider() {
	wp_embed_register_handler(
		'gist',
		'~https://gist\.github\.com/([a-z0-9]+)/([a-z0-9]+)~im',
		'callback_gist_oembed_provider'
	);
}

function callback_gist_oembed_provider( $matches ) {
	return sprintf( '<script src="%s.js"></script>', $matches[0] );
}
