<?php

/**
 * Controls attached to core sections
 *
 * @package vamtam/scuola
 */


return array(
	array(
		'label'     => esc_html__( 'Header Logo Type', 'scuola' ),
		'id'        => 'header-logo-type',
		'type'      => 'switch',
		'transport' => 'postMessage',
		'section'   => 'title_tagline',
		'choices'   => array(
			'image'      => esc_html__( 'Image', 'scuola' ),
			'site-title' => esc_html__( 'Site Title', 'scuola' ),
		),
		'priority' => 8,
	),
);


