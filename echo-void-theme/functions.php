<?php
if ( ! defined( 'ECHO_VOID_VERSION' ) ) {
	define( 'ECHO_VOID_VERSION', '1.0.0' );
}

function echovoid_enqueue_fonts() {
    wp_enqueue_style(
        'echovoid-fonts',
        'https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'echovoid_enqueue_fonts');

function echo_void_setup() {
	load_theme_textdomain( 'echo-void-theme', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'echo-void-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'echo-void-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'echo_void_setup' );

function echo_void_assets() {
	wp_enqueue_style( 'echo-void-main', get_template_directory_uri() . '/assets/css/main.css', array(), ECHO_VOID_VERSION );
	wp_enqueue_script( 'echo-void-main', get_template_directory_uri() . '/assets/js/main.js', array(), ECHO_VOID_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'echo_void_assets' );

function echo_void_excerpt_length() {
	return 22;
}
add_filter( 'excerpt_length', 'echo_void_excerpt_length' );
