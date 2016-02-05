<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;

if ( ! function_exists( 'theme_setup_features' ) ) {

	/**
	 * Setup theme features.
	 */
	function theme_setup_features() {

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => 'Main Menu'
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Editor Style.
		 */
		// add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
	}
}

add_action( 'after_setup_theme', 'theme_setup_features' );

/**
 * Register widget areas.
 */
function theme_widgets_init() {
	register_sidebar(
		array(
			'name' => 'Main Sidebar',
			'id' => 'main-sidebar',
			'description' => 'Site Main Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 */
function theme_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'theme_flush_rewrite' );

/**
 * Load site scripts.
 */
function theme_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// General scripts.
	wp_enqueue_script( 'theme-main', $template_url . '/assets/javascript/main.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts', 1 );

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * TGM Plugin Activation
 */
require_once get_template_directory() . '/inc/tgmpa.php';
