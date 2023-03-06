<?php
/**
 * Theme options / Styles / Global Colors and Backgrounds
 *
 * @package vamtam/scuola
 */

$vamtam_global_styles = array(

array(
	'label'       => esc_html__( 'Accent Colors', 'scuola' ),
	'description' => esc_html__( 'Most of the design elements are attached to the accent colors below. You can easily create your own skin by changing these colors.', 'scuola' ) . ( vamtam_use_accent_preview() ? '' : '<p style="color: red; font-weight: bold">' . esc_html__( 'We have detected that your browser does not support CSS variables. This has a serious impact on performance and changing the accent color will require a full preview refresh. Please consider using Firefox, Chrome or Safari when using the Theme Customizer.', 'scuola' ) . '</p>' ),
	'id'          => 'accent-color',
	'type'        => 'color-row',
	'choices'     => array(
		1 => esc_html__( 'Accent 1', 'scuola' ),
		2 => esc_html__( 'Accent 2', 'scuola' ),
		3 => esc_html__( 'Accent 3', 'scuola' ),
		4 => esc_html__( 'Accent 4', 'scuola' ),
		5 => esc_html__( 'Accent 5', 'scuola' ),
		6 => esc_html__( 'Accent 6', 'scuola' ),
		7 => esc_html__( 'Accent 7', 'scuola' ),
		8 => esc_html__( 'Accent 8', 'scuola' ),
	),
	'compiler'  => true,
	'transport' => vamtam_use_accent_preview() ? 'postMessage' : 'refresh',
	'with_hc' => true,
),

array(
	'label'  => esc_html__( 'Side Widget Areas', 'scuola' ),
	'type'   => 'heading',
	'id'     => 'layout-body-regular-sidebars',
),

array(
	'label'   => esc_html__( 'Left', 'scuola' ),
	'id'      => 'left-sidebar-width',
	'type'    => 'select',
	'choices' => array(
		'33.333333' => '1/3',
		'20' => '1/5',
		'25' => '1/4',
	),
	'compiler'  => true,
	'transport' => 'postMessage',
),

array(
	'label'       => esc_html__( 'Right', 'scuola' ),
	'id'          => 'right-sidebar-width',
	'type'        => 'select',
	'choices'     => array(
		'33.333333' => '1/3',
		'20'        => '1/5',
		'25'        => '1/4',
	),
	'compiler'  => true,
	'transport' => 'postMessage',
),

array(
	'label'  => esc_html__( 'Styles', 'scuola' ),
	'type'   => 'heading',
	'id'     => 'body-styles',
),

);

if ( defined( 'ELEMENTOR_VERSION' ) ) {
	$element_ids_to_remove = [ 'layout-body-regular-sidebars', 'left-sidebar-width', 'right-sidebar-width' ];

	if ( \VamtamElementorBridge::elementor_is_v3_or_greater() ) {
		$element_ids_to_remove[] = 'accent-color';
	}

	foreach( $vamtam_global_styles as  $key => $global_style ) {
		if( in_array( $global_style[ 'id' ], $element_ids_to_remove ) ) {
			unset( $vamtam_global_styles[ $key ] );
		}
	}
}

$migration_notice = array(
	'label'  => esc_html__( 'Notice', 'scuola' ),
	'description'  => esc_html__( 'Our Global Styles options are now part of Elementor\'s Global Settings. To access them open the Elementor editor and click on the hamburger menu button, then under "Site Settings" you should see the options under "Global Fonts/Colors" respectively.', 'scuola' ),
	'type'   => 'vamtam-info',
	'id'     => 'theme-options-migration-notice',
);

if ( defined( 'ELEMENTOR_VERSION' ) ) {
	if ( \VamtamElementorBridge::elementor_is_v3_or_greater() ) {
		$vamtam_global_styles[] = $migration_notice;
	}
} else {
	if ( \VamtamElementorBridge::elementor_is_v3_or_greater() ) {
		$vamtam_global_styles[] = array(
			'label'  => esc_html__( 'Warning', 'scuola' ),
			'description'  => esc_html__( 'Please enable Elementor editor to be able to adjust Global Styles.', 'scuola' ),
			'type'   => 'vamtam-info',
			'id'     => 'theme-options-migration-warning',
		);
		$vamtam_global_styles[] = $migration_notice;
	}
}

return $vamtam_global_styles;
