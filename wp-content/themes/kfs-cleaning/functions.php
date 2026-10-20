<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function kfs_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'kfs-cleaning' ) ) );
}
add_action( 'after_setup_theme', 'kfs_theme_setup' );

function kfs_enqueue_assets() {
	wp_enqueue_style(
		'kfs-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'kfs-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'kfs-fonts' ),
		'1.3'
	);
	wp_enqueue_script(
		'kfs-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		'1.3',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kfs_enqueue_assets' );

// Remove emoji bloat
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
