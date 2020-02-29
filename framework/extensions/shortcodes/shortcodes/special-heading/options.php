<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Heading Title', 'bloger' ),
		'desc'  => __( 'Write the heading title content', 'bloger' ),
	),
	'subtitle' => array(
		'type'  => 'text',
		'label' => __( 'Heading Subtitle', 'bloger' ),
		'desc'  => __( 'Write the heading subtitle content', 'bloger' ),
	),
	'heading' => array(
		'type'    => 'select',
		'label'   => __('Heading Size', 'bloger'),
		'desc'  => __( 'Select heading from h1 to h6', 'bloger' ),
		'choices' => array(
			'h1' => 'H1',
			'h2' => 'H2',
			'h3' => 'H3',
			'h4' => 'H4',
			'h5' => 'H5',
			'h6' => 'H6',
		)
	),
	'centered' => array(
		'type'    => 'switch',
		'label'   => __('Centered', 'bloger'),
		'desc'  => __( 'Is it centered heading?', 'bloger' ),
	),
	'no_underline' => array(
		'type'    => 'switch',
		'label'   => __('No Underline', 'bloger'),
		'desc'  => __( 'Don\'t\' display header underline', 'bloger' ),
	)	
);
