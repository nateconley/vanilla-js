<?php

/**
 * Enqueue styles and scripts
 */
function vanilla_js_enqueue_scripts() {

	if ( is_front_page() ) {
		wp_enqueue_script(
			'vanilla-js-front-page-scripts',
			get_template_directory_uri() . '/assets/js/front-page.js',
			array(),
			filemtime( get_stylesheet_directory() . '/assets/js/front-page.js' ),
			true
		);
	}

	if ( is_home() ) {
		wp_enqueue_script(
			'vanilla-js-blog-scripts',
			get_template_directory_uri() . '/assets/js/blog.js',
			array(),
			filemtime( get_stylesheet_directory() . '/assets/js/blog.js' ),
			true
		);
	}

	wp_enqueue_style(
		'vanilla-js-style',
		get_template_directory_uri() . '/assets/dist/css/style.css',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/dist/css/style.css' ),
		'all'
	);

}

add_action( 'wp_enqueue_scripts', 'vanilla_js_enqueue_scripts' );

/**
 * Add the primary menu
 */
function vanilla_js_main_menu() {

	register_nav_menus(
		array(
			'primary' => __( 'Header Menu', 'vanilla-js' )
		)
	);

}

add_action( 'init', 'vanilla_js_main_menu' );
