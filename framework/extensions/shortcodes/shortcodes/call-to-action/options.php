<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'type'  => 'textarea',
		'label' => __( 'Title', 'bloger' ),
		'desc'  => __( 'Title of call to action.This can be left blank', 'bloger' )
	),
	'message'       => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'bloger' ),
		'desc'  => __( 'Enter some content for this call to action', 'bloger' )
	),
	'button_label'  => array(
		'label' => __( 'Button Label', 'bloger' ),
		'desc'  => __( 'This is the text that appears on your button', 'bloger' ),
		'type'  => 'text',
		'value' => 'Click'
	),
	'button_link'   => array(
		'label' => __( 'Button Link', 'bloger' ),
		'desc'  => __( 'Where should your button link to', 'bloger' ),
		'type'  => 'text',
		'value' => '#'
	),
	'button_target' => array(
		'type'    => 'switch',
		'label'   => __( 'Open Link in New Window', 'bloger' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window', 'bloger' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'bloger'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'bloger'),
		),
	),
);