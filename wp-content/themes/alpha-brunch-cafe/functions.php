<?php
/**
 * Alpha Brunch Cafe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alpha Brunch Cafe
 */

if ( ! defined( 'ALPHA_BRUNCH_CAFE_VERSION' ) ) {
	define( 'ALPHA_BRUNCH_CAFE_VERSION', wp_get_theme()->get( 'Version' ) );	
}

if ( ! function_exists( 'alpha_brunch_cafe_setup' ) ) :
	function alpha_brunch_cafe_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'block-nav-menus' );
		add_theme_support( 'experimental-link-color' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'alpha-brunch-cafe' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alpha_brunch_cafe_setup' );

/**
 * Enqueue scripts and styles.
 */
function alpha_brunch_cafe_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array( 'dashicons' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'alpha-brunch-cafe-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
}
add_action( 'wp_enqueue_scripts', 'alpha_brunch_cafe_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function alpha_brunch_cafe_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	wp_enqueue_style( 'alpha-brunch-cafe-admin-style', get_stylesheet_directory_uri() . '/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	wp_enqueue_style(
		'alpha-brunch-cafe-admin-css',
		get_template_directory_uri() . '/css/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

}
add_action( 'admin_enqueue_scripts', 'alpha_brunch_cafe_admin_scripts' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/core/init.php';

/** 
 * admin Info
 */
require get_template_directory() . '/core/admin-info.php';

/** 
 * Customizer
 */
require get_template_directory() . '/core/section-pro/customizer.php';