<?php

/**
 * Theme options / Layout / General
 *
 * @package vamtam/scuola
 */

return array(

	array(
		'label'       => esc_html__( 'Content Width', 'scuola' ),
		'description' => wp_kses( __( 'There is no live preview for this option.<br>If you have changed this option, please clear Elementor\'s cache from Elementor/Tools/Regenerate CSS', 'scuola' ), 'vamtam-admin' ),
		'id'          => 'site-max-width',
		'type'        => 'number',
		'compiler'    => true,
		'input_attrs' => array( 'min' => 300 ),
		'transport'   => 'postMessage',
	),
);


