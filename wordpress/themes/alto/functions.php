<?php
/**
 * Thème Alto : chargement des ressources.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	$dir = get_theme_file_uri( 'assets' );
	$ver = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'alto', $dir . '/css/main.css', array(), $ver );
	wp_enqueue_script( 'alto', $dir . '/js/main.js', array(), $ver, array( 'strategy' => 'defer', 'in_footer' => true ) );
} );
