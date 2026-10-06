<?php
/**
 * Noura theme functions and definitions.
 *
 * @package Noura
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'NOURA_VERSION', '1.1.0' );
define( 'NOURA_THEME_DIR', get_template_directory() );
define( 'NOURA_THEME_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'noura', NOURA_THEME_DIR . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup to valid HTML5.
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	// Add support for core block visual styles.
	add_theme_support( 'wp-block-styles' );

	// Make embedded content responsive.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles (loads style.css in the editor).
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	// Custom logo support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 48,
			'width'       => 180,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Style the editor with the theme.json palette.
	add_theme_support( 'editor-color-palette', array() );

	// Wide alignment support for full-bleed patterns.
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'noura_setup' );

/**
 * Registers navigation menu locations.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'noura' ),
			'footer'  => __( 'Footer menu', 'noura' ),
			'social'  => __( 'Social links menu', 'noura' ),
		)
	);
}
add_action( 'after_setup_theme', 'noura_register_menus' );

/**
 * Registers a footer widget area for classic widgets / legacy blocks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_register_sidebars() {
	register_sidebar(
		array(
			'name'          => __( 'Footer widgets', 'noura' ),
			'id'            => 'sidebar-footer',
			'description'   => __( 'Appears in the footer area on all pages.', 'noura' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'noura_register_sidebars' );

/**
 * Enqueues the theme stylesheet on the front end.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_enqueue_assets() {
	wp_enqueue_style(
		'noura-style',
		NOURA_THEME_URI . '/style.css',
		array(),
		NOURA_VERSION
	);

	// Front-end interactions: back-to-top button + animated stat counters.
	wp_enqueue_script(
		'noura-theme',
		NOURA_THEME_URI . '/assets/js/theme.js',
		array(),
		NOURA_VERSION,
		true
	);

	// Comment reply script for threaded comments.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'noura_enqueue_assets' );

/**
 * Enqueues editor-only tweaks for the block editor canvas.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_enqueue_editor_assets() {
	wp_enqueue_style(
		'noura-editor',
		NOURA_THEME_URI . '/assets/css/editor.css',
		array(),
		NOURA_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'noura_enqueue_editor_assets' );

/**
 * Registers custom block styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_register_block_styles() {
	// Button with a soft shadow.
	register_block_style(
		'core/button',
		array(
			'name'  => 'shadow',
			'label' => __( 'Shadow', 'noura' ),
		)
	);

	// Button with an outline look.
	register_block_style(
		'core/button',
		array(
			'name'  => 'outline-amber',
			'label' => __( 'Outline amber', 'noura' ),
		)
	);

	// Large display quote.
	register_block_style(
		'core/quote',
		array(
			'name'  => 'large',
			'label' => __( 'Large', 'noura' ),
		)
	);

	// Card-style group with padding + shadow.
	register_block_style(
		'core/group',
		array(
			'name'  => 'card',
			'label' => __( 'Card', 'noura' ),
		)
	);

	// Rounded image frame.
	register_block_style(
		'core/image',
		array(
			'name'  => 'framed',
			'label' => __( 'Framed', 'noura' ),
		)
	);
}
add_action( 'init', 'noura_register_block_styles' );

/**
 * Registers the "noura" block pattern category.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_register_pattern_category() {
	register_block_pattern_category(
		'noura',
		array(
			'label'       => __( 'Noura', 'noura' ),
			'description' => __( 'Patterns designed for the Noura theme.', 'noura' ),
		)
	);
}
add_action( 'init', 'noura_register_pattern_category' );

/**
 * Shortens excerpts to a tidy length.
 *
 * @since 1.0.0
 *
 * @param int $length Default excerpt length.
 * @return int
 */
function noura_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'noura_excerpt_length' );

/**
 * Replaces the default "[...]" excerpt suffix with a proper ellipsis.
 *
 * @since 1.0.0
 *
 * @param string $more Default excerpt more string.
 * @return string
 */
function noura_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'noura_excerpt_more' );

/**
 * Adds a "Continue reading" link to manual excerpts for a friendlier archive UX.
 *
 * @since 1.0.0
 *
 * @param string $excerpt The post excerpt.
 * @return string
 */
function noura_excerpt_read_more( $excerpt ) {
	if ( is_admin() ) {
		return $excerpt;
	}

	$link = sprintf(
		'<p class="noura-read-more"><a href="%1$s">%2$s</a></p>',
		esc_url( get_permalink() ),
		esc_html__( 'Continue reading', 'noura' )
	);

	return $excerpt . $link;
}
add_filter( 'get_the_excerpt', 'noura_excerpt_read_more' );

/**
 * Outputs a small SVG icon by name. Used by templates via pattern helpers.
 *
 * @since 1.0.0
 *
 * @param string $name Icon slug: arrow, check, star, quote.
 * @return string Escaped SVG markup.
 */
function noura_icon( $name ) {
	$icons = array(
		'arrow' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2 8h11M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'check' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M3 9.5l4 4L15 5" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'star'  => '<svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M9 1.5l2.3 4.9 5.2.6-3.9 3.6 1 5.2L9 13.1l-4.6 2.7 1-5.2L1.5 7l5.2-.6L9 1.5z"/></svg>',
		'quote' => '<svg width="28" height="28" viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11 6C6.6 7.6 4 10.8 4 15.4c0 3.5 2.1 5.6 4.8 5.6 2.4 0 4.2-1.8 4.2-4.1 0-2.2-1.6-3.9-3.7-4.1.4-2.3 2-4.2 4-5.3L11 6zm12 0c-4.4 1.6-7 4.8-7 9.4 0 3.5 2.1 5.6 4.8 5.6 2.4 0 4.2-1.8 4.2-4.1 0-2.2-1.6-3.9-3.7-4.1.4-2.3 2-4.2 4-5.3L23 6z"/></svg>',
	);

	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

/**
 * Adds the skip-link target ID to the main content landmark so the
 * "Skip to content" link in the header has somewhere to land.
 *
 * @since 1.1.0
 *
 * @param string $block_content Rendered block markup.
 * @param array  $block         Parsed block.
 * @return string
 */
function noura_skip_link_target( $block_content, $block ) {
	if (
		'core/group' === $block['blockName']
		&& isset( $block['attrs']['tagName'] )
		&& 'main' === $block['attrs']['tagName']
		&& false === strpos( $block_content, 'wp--skip-link--target' )
	) {
		$block_content = preg_replace(
			'/<main([^>]*)>/',
			'<main$1 id="wp--skip-link--target" tabindex="-1">',
			$block_content,
			1
		);
	}

	return $block_content;
}
add_filter( 'render_block', 'noura_skip_link_target', 10, 2 );

/**
 * Prints the copyright line used in the footer template part.
 * Keeping it in PHP avoids duplicating logic in block markup.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noura_copyright() {
	printf(
		/* translators: %1$s: current year, %2$s: site name. */
		esc_html__( '© %1$s %2$s. All rights reserved.', 'noura' ),
		esc_html( gmdate( 'Y' ) ),
		esc_html( get_bloginfo( 'name' ) )
	);
}
