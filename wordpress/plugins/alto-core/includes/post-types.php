<?php
/**
 * Type de contenu « Projet ».
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', function () {
	register_post_type( 'projet', array(
		'labels'       => array(
			'name'          => __( 'Projets', 'alto-core' ),
			'singular_name' => __( 'Projet', 'alto-core' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-building',
		'rewrite'      => array( 'slug' => 'projets' ),
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );
} );
