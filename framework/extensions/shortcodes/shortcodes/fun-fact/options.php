<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Icon', 'bloger'),
		'desc'  => __('Choose any icon from icon picker.Leave blank to hide icon', 'bloger'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title', 'bloger' ),
		'desc'  => __('Counter number', 'bloger'),
		'value' => '69875'
	),
	'content' => array(
		'type'  => 'text',
		'label' => __( 'Content', 'bloger' ),
		'desc'  => __( 'Enter the counter content', 'bloger' ),
		'value'=>'Lines of code'
	),
);