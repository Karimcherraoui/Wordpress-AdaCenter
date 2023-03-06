<?php

/**
 * Theme options /Header
 *
 * @package vamtam/scuola
 */


if ( VamtamElementorBridge::is_elementor_pro_active() ) {
	return [];
}

return array(

	array(
		'label'       => esc_html__( 'Header Height', 'scuola' ),
		'description' => esc_html__( 'This is the area above the slider. Includes the height of the menu for two line header layouts.', 'scuola' ),
		'id'          => 'header-height',
		'type'        => 'number',
		'compiler'    => true,
		'transport'   => 'postMessage',
		'input_attrs' => array(
			'min' => 30,
			'max' => 300,
		),
	),

	array(
		'label'     => esc_html__( 'Show Empty WooCommerce Cart in Header', 'scuola' ),
		'id'        => 'show-empty-header-cart',
		'type'      => 'switch',
		'transport' => 'postMessage',
	),
);


