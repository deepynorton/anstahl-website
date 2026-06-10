<?php
/**
 * Anstahl Engineering V3 theme functions.
 *
 * @package Anstahl_Engineering
 */

defined( 'ABSPATH' ) || exit;

define( 'ANSTAHL_VERSION', '3.0.0' );
define( 'ANSTAHL_DIR', get_template_directory() );
define( 'ANSTAHL_URI', get_template_directory_uri() );

require_once ANSTAHL_DIR . '/inc/theme-data.php';
require_once ANSTAHL_DIR . '/inc/template-tags.php';

/**
 * Theme setup.
 *
 * @return void
 */
function anstahl_setup() {
	load_theme_textdomain( 'anstahl-engineering', ANSTAHL_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 48,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'anstahl-engineering' ),
		'footer'  => __( 'Footer Navigation', 'anstahl-engineering' ),
	) );

	add_image_size( 'anstahl-card', 720, 405, true );
	add_image_size( 'anstahl-hero', 1920, 1080, true );
}
add_action( 'after_setup_theme', 'anstahl_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function anstahl_enqueue_assets() {
	wp_enqueue_style(
		'anstahl-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Rajdhani:wght@600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'anstahl-main',
		ANSTAHL_URI . '/assets/css/main.css',
		array( 'anstahl-fonts' ),
		ANSTAHL_VERSION
	);

	wp_enqueue_style(
		'anstahl-style',
		get_stylesheet_uri(),
		array( 'anstahl-main' ),
		ANSTAHL_VERSION
	);

	wp_enqueue_script(
		'anstahl-main',
		ANSTAHL_URI . '/assets/js/main.js',
		array(),
		ANSTAHL_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'anstahl_enqueue_assets' );

/**
 * Add defer to theme script.
 *
 * @param string $tag    Script tag.
 * @param string $handle Handle.
 * @return string
 */
function anstahl_defer_scripts( $tag, $handle ) {
	if ( 'anstahl-main' === $handle ) {
		return str_replace( ' src', ' defer src', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'anstahl_defer_scripts', 10, 2 );

/**
 * Register widget areas.
 *
 * @return void
 */
function anstahl_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'anstahl-engineering' ),
		'id'            => 'footer-1',
		'description'   => __( 'Optional footer widget area.', 'anstahl-engineering' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget__title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'anstahl_widgets_init' );

/**
 * Custom excerpt length.
 *
 * @return int
 */
function anstahl_excerpt_length() {
	return 28;
}
add_filter( 'excerpt_length', 'anstahl_excerpt_length' );

/**
 * Custom excerpt more.
 *
 * @return string
 */
function anstahl_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'anstahl_excerpt_more' );

/**
 * Add skip link and body classes.
 *
 * @param array<string> $classes Body classes.
 * @return array<string>
 */
function anstahl_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'anstahl_body_classes' );

/**
 * Disable emoji scripts for performance.
 *
 * @return void
 */
function anstahl_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'anstahl_disable_emojis' );
