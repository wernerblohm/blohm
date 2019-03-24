<?php
/**
 * Check and setup theme's default settings
 *
 * @package blohm
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'blohm_setup_theme_default_settings' ) ) {
	function blohm_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$blohm_posts_index_style = get_theme_mod( 'blohm_posts_index_style' );
		if ( '' == $blohm_posts_index_style ) {
			set_theme_mod( 'blohm_posts_index_style', 'default' );
		}

		// Sidebar position.
		$blohm_sidebar_position = get_theme_mod( 'blohm_sidebar_position' );
		if ( '' == $blohm_sidebar_position ) {
			set_theme_mod( 'blohm_sidebar_position', 'right' );
		}

		// Container width.
		$blohm_container_type = get_theme_mod( 'blohm_container_type' );
		if ( '' == $blohm_container_type ) {
			set_theme_mod( 'blohm_container_type', 'container' );
		}
	}
}
