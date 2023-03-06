<?php
return array(
	'name' => esc_html__( 'Help', 'scuola' ),
	'auto' => true,
	'config' => array(

		array(
			'name' => esc_html__( 'Help', 'scuola' ),
			'type' => 'title',
			'desc' => '',
		),

		array(
			'name' => esc_html__( 'Help', 'scuola' ),
			'type' => 'start',
			'nosave' => true,
		),
//----
		array(
			'type' => 'docs',
		),

			array(
				'type' => 'end',
			),
	),
);
