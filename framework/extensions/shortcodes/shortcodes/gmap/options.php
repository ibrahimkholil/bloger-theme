<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'data_map' => array(
		'type'  => 'textarea',
		'label' =>  __('Map code', 'bloger'),
		'desc' => sprintf(
				__( 'Get the embed code from %shere%s .', 'bloger' ),
				'<a target="_blank" href="https://www.google.com/maps/">',
				'</a>'
			),
	),

	'map_height' => array(
		'label' => __('Map Height', 'bloger'),
		'desc'  => __('Set map height in px', 'bloger'),
		'type'  => 'slider',
		'properties' => array(
        'min' => 1,
        'max' => 1000,
        'step' => 1,	
        ),		
	),
);