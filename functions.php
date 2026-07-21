<?php

require_once 'class-social-walker.php';
require_once 'class-image-cover-block.php';
require_once 'functions/actions.php';
require_once 'functions/filters.php';
require_once 'functions/sidebars.php';

add_filter( 'body_class', 'nyctech_body_class_filter', 11 );
add_action( 'wp_enqueue_scripts', 'nyctech_load_js_scripts' );
add_action( 'wp_enqueue_scripts', 'nyctech_load_icomoon' );
add_action( 'after_setup_theme', 'nyctech_theme_support' );
add_action( 'init', 'nyctech_check_title_support' );

add_action( 'pre_get_posts', 'nyctech_modify_main_query' );
add_action( 'wp_head', 'nyctech_opengraph_tags' );

// Register and load all the widgets.
add_action( 'widgets_init', 'nyctech_load_widgets' );

/* -------------------------------------------------------------------------- */


/**
 * Provide a fallback if theme-support for title-tag not avaiable
 *
 * On the homepage, it add the site description to the site name. On
 * other pages, it add the site name to the standard page title
 *
 * @since 1.0
 * @uses  wp_title filter
 *
 * @param  string $title the title of the page
 * @param  string $sep a separator. one or more characters to divide the
 *        page title
 * @param  string $seplocation can be 'left' or 'right'. default: left.
 * @return string
 */
/*
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                    MENUS AND SIDEBARS                   *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */

register_nav_menus(
	array(
		'main_menu'   => 'Main Menu',
		'footer_menu' => 'Footer Menu',
	)
);

function nyctech_the_date( $format = '', $before = '', $after = '', $display = true ) {
	global $currentday, $previousday;

	$the_date = '';

	$the_date = $before . get_the_date( $format ) . $after;

	/**
	 * Filters the date of the post, for display.
	 *
	 * @since 0.71
	 *
	 * @param string $the_date The formatted date string.
	 * @param string $format   PHP date format.
	 * @param string $before   HTML output before the date.
	 * @param string $after    HTML output after the date.
	 */
	$the_date = apply_filters( 'the_date', $the_date, $format, $before, $after );

	if ( $display ) {
		echo $the_date;
	} else {
		return $the_date;
	}
}
