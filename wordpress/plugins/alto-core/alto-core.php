<?php
/**
 * Plugin Name: Alto Core
 * Description: Fonctionnalités métier du site Alto (type « Projet », champs SCF versionnés).
 * Version: 0.1.0
 * Requires at least: 7.1
 * Requires PHP: 8.3
 * Text Domain: alto-core
 */

defined( 'ABSPATH' ) || exit;

define( 'ALTO_CORE_DIR', plugin_dir_path( __FILE__ ) );

require_once ALTO_CORE_DIR . 'includes/post-types.php';
require_once ALTO_CORE_DIR . 'includes/fields-json.php';
