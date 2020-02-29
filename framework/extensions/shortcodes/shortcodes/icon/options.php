<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Icon', 'bloger' ),
		'popup-title'   => __( 'Add/Edit icon', 'bloger' ),
		'desc'          => __( 'Create your icon', 'bloger' ),
		'template'      => '{{=icon_title}}',
		'popup-options' => array(
			'icon_used' => array(
				'type'  => 'icon',
				'label' => __('Icon', 'bloger'),
				'desc' => __('Choose any icon from icon picker', 'bloger') ,
			),
			'icon_title' => array(
				'type'  => 'textarea',
				'label' => __('Title', 'bloger'),
				'desc' => __('Icon title', 'bloger') ,
			)
		),
	)
);