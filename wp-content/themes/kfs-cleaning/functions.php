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
		'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600..800&family=Figtree:wght@400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'kfs-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'kfs-fonts' ),
		filemtime( get_template_directory() . '/assets/css/main.css' )
	);
	wp_enqueue_script(
		'kfs-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/main.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kfs_enqueue_assets' );

// Pages that render their own #quote form: the front page and the service
// pages (each has a page-{slug}.php template).
function kfs_has_quote_form() {
	if ( is_front_page() ) return true;
	return is_page() && file_exists( get_template_directory() . '/page-' . get_post_field( 'post_name' ) . '.php' );
}

// Link to a homepage section — a same-page jump on the homepage, a full URL elsewhere.
function kfs_section_url( $id ) {
	return is_front_page() ? '#' . $id : home_url( '/#' . $id );
}

// Quote-form link: the form on this page if there is one, otherwise the homepage form.
function kfs_quote_url() {
	return kfs_has_quote_form() ? '#quote' : home_url( '/#quote' );
}

// Where FormSubmit sends the visitor after a quote request: back to the same page, at the form.
function kfs_thanks_url() {
	$base = is_front_page() ? home_url( '/' ) : get_permalink();
	return add_query_arg( 'thanks', '1', $base ) . '#quote';
}

// Rank Math marks every page as an Article by a Person. On the homepage drop
// both; on service pages replace them with a Service offered by the business.
function kfs_service_schema( $data ) {
	if ( ! kfs_has_quote_form() ) return $data;
	unset( $data['ProfilePage'] );
	if ( isset( $data['WebPage']['author'] ) ) unset( $data['WebPage']['author'] );
	foreach ( $data as $key => $node ) {
		if ( is_array( $node ) && isset( $node['@type'] ) && in_array( 'Article', (array) $node['@type'], true ) ) unset( $data[ $key ] );
	}
	if ( is_front_page() ) return $data;
	$service = array(
		'@type'      => 'Service',
		'@id'        => get_permalink() . '#service',
		'name'       => get_the_title(),
		'url'        => get_permalink(),
		'areaServed' => array(
			array( '@type' => 'State', 'name' => 'Massachusetts' ),
			array( '@type' => 'State', 'name' => 'New Hampshire' ),
		),
	);
	$desc = get_post_meta( get_the_ID(), 'rank_math_description', true );
	// Rank Math runs wp_kses_post_deep over the graph, which re-encodes a bare &; say "and".
	if ( $desc ) $service['description'] = str_replace( ' & ', ' and ', html_entity_decode( $desc, ENT_QUOTES, 'UTF-8' ) );
	if ( ! empty( $data['publisher']['@id'] ) ) $service['provider'] = array( '@id' => $data['publisher']['@id'] );
	if ( ! empty( $data['WebPage']['@id'] ) ) $service['mainEntityOfPage'] = array( '@id' => $data['WebPage']['@id'] );
	$data['kfsService'] = $service;
	return $data;
}
add_filter( 'rank_math/json_ld', 'kfs_service_schema', 99 );

// Remove emoji bloat
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
