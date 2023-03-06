<?php

/**
 * Top level sections without panels
 *
 * @package vamtam/scuola
 */

global $vamtam_theme_customizer;

$thispath = VAMTAM_OPTIONS . 'top-level/';

if ( ! \VamtamElementorBridge::elementor_is_v3_or_greater() ) {
	$vamtam_theme_customizer->add_section( array(
		'title'       => esc_html__( 'Global Layout', 'scuola' ),
		'id'          => 'global-layout',
		'description' => '',
		'fields'      => include $thispath . 'global-layout.php',
	) );
}

$vamtam_theme_customizer->add_section( array(
	'title'       => esc_html__( 'Global Styles', 'scuola' ),
	'id'          => 'global-styles',
	'description' => '',
	'fields'      => include $thispath . 'global-styles.php',
) );

if ( ! vamtam_extra_features() ) {
	$vamtam_theme_customizer->add_section( array(
		'title'       => esc_html__( 'Header', 'scuola' ),
		'id'          => 'header',
		'description' => '',
		'fields'      => include $thispath . 'header.php',
	) );
}
