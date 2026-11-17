<?php
/**
 * Groupes de champs SCF enregistrés en JSON dans le plugin (versionnés avec Git).
 * Réduit le risque n°4 du benchmark : conflit ACF / SCF.
 */

defined( 'ABSPATH' ) || exit;

add_filter( 'acf/settings/save_json', fn() => ALTO_CORE_DIR . 'acf-json' );

add_filter( 'acf/settings/load_json', function ( array $paths ) {
	$paths[] = ALTO_CORE_DIR . 'acf-json';
	return $paths;
} );
