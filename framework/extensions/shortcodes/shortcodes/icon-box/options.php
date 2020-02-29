<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Icon', 'bloger'),
		'desc'  => __('Choose any icon from icon picker', 'bloger'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title', 'bloger' ),
		'desc'  => __('Icon box title', 'bloger'),
	),
	'content' => array(
		'type'  => 'wp-editor',
		'label' => __( 'Content', 'bloger' ),
		'desc'  => __( 'Enter the desired content', 'bloger' ),
	),
);