<?php
/**
 * Theme Functions.
 *
 * @package THEME_NAME
 */


if ( ! defined( 'THEME_DIR_PATH' ) ) {
	define( 'THEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'THEME_DIR_URI' ) ) {
	define( 'THEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'THEME_URI' ) ) {
	define( 'THEME_URI', untrailingslashit( get_template_directory_uri() ) . '/assets' );
}

if ( ! defined( 'THEME_PATH' ) ) {
	define( 'THEME_PATH', untrailingslashit( get_template_directory() ) . '/assets' );
}

if ( ! defined( 'THEME_JS_URI' ) ) {
	define( 'THEME_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/js' );
}

if ( ! defined( 'THEME_JS_DIR_PATH' ) ) {
	define( 'THEME_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/js' );
}

if ( ! defined( 'THEME_IMG_URI' ) ) {
	define( 'THEME_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/src/img' );
}

if ( ! defined( 'THEME_CSS_URI' ) ) {
	define( 'THEME_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
}

if ( ! defined( 'THEME_CSS_DIR_PATH' ) ) {
	define( 'THEME_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/css' );
}

if ( ! defined( 'THEME_LIB_URI' ) ) {
	define( 'THEME_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/library' );
}

if ( ! defined( 'THEME_ARCHIVE_POST_PER_PAGE' ) ) {
	define( 'THEME_ARCHIVE_POST_PER_PAGE', 9 );
}

if ( ! defined( 'THEME_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
	define( 'THEME_SEARCH_RESULTS_POST_PER_PAGE', 9 );
}

require_once THEME_DIR_PATH . '/inc/helpers/autoloader.php';
require_once THEME_DIR_PATH . '/inc/helpers/template-tags.php';

function theme_get_theme_instance() {
	\THEME_NAME\Inc\THEME::get_instance();
}

theme_get_theme_instance();



