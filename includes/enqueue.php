<?php
/**
 * Add enqueue scripts/styles
 */
add_action( 'after_setup_theme', 'egg_enqueue' );
function egg_enqueue() {
	add_action( 'wp_enqueue_scripts', 'egg_styles', 999 );
	add_action( 'wp_enqueue_scripts', 'egg_scripts', 999 );
}


/**
 * Load in the base styles
 */
function egg_styles() {
	global $wp_styles; // global variable for ie stylesheet

	// register main stylesheet
	wp_register_style( 'egg-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.css?' . date("U"), array(), '', 'all' ); // Dev
	//wp_register_style( 'egg-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), '', 'all' ); // Production

	wp_enqueue_style( 'egg-stylesheet');
}


/**
 * Load in the base scripts
 */
function egg_scripts() {
	global $wp_scripts; // global variable for for ie scripts
	
	/* move core jQuery to footer * /
	wp_deregister_script('jquery');
	wp_register_script('jquery', includes_url( '/js/jquery/jquery.js' ), false, null, true);
	
	/* Adding scripts file in the footer */
	wp_register_script( 'egg-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js?' . date("U"), array( 'jquery' ), '', true ); // Dev
	//wp_register_script( 'egg-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true ); // Production
	
	// enqueue styles and scripts
	wp_enqueue_script( 'egg-js');
}


/**
 * Remove jQuery Migrate and wp-embed scripts
 * Be absolutely sure you are ok to do this, and test your code afterwards.
 */
add_filter( 'wp_default_scripts', 'egg_dequeue_jquery_migrate' );
function egg_dequeue_jquery_migrate( &$scripts ) {
	if (! is_admin() ) {
		$scripts->remove( 'wp-embed');
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}
