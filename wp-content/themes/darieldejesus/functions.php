<?php
/**
 * Platano Blog functions and definitions
 *
 * Set of cuntions and definitions needed by the custom template.
 *
 */

/**
 * Register Google fonts for Platano Blog.
 *
 * @since Platano Blog 0.0.1
 *
 * @return string Google fonts URL for the theme.
 */
if ( ! function_exists( 'google_fonts_url' ) ) {

	function google_fonts_url() {
		return add_query_arg( ['family' => 'Open+Sans:300,400,600,700'], 'https://fonts.googleapis.com/css' );
	}

}

/**
 * Queue for all styles.
 *
 * @since Platano Blog 0.0.1
 */
function load_styles() {
	// Add Google fonts.
	wp_enqueue_style( 'google_fonts', google_fonts_url() );

	// Bootstrap.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

	// Font Awesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	// OWL Carousel
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style( 'owl-carousel-transitions', get_template_directory_uri() . '/css/owl.transitions.css' );

	// Meanmenu
	wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/css/meanmenu.css' );

	// Normalize
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );

	// Main
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );

	// Default style
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Responsive
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );	
}

/**
 * Queue for all scripts.
 *
 * @since Platano Blog 0.0.1
 */
function load_scripts() {
	// Modernizr JS
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js' );
	
	// Boostrap
	wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
	
	// MeanMenu
	wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array('jquery'), null, true );
	
	// OWL Carousel
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
	
	// ScrollUp
	wp_enqueue_script( 'scrollup', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array('jquery'), null, true );

	// Plugins
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), null, true );
	
	// Main
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
* This function call `platanoblog_styles` and `platanoblog_scripts`.
*/
function load_assets() {
	// Enqueues CSS files.
	load_styles();
	// Enqueues JS files.
	load_scripts();
}
add_action( 'wp_enqueue_scripts', 'load_assets' );

/**
 * Function which allow me load a component.
 */
function get_template_component( $component ) {
	return get_template_part( 'components/' . $component );
}