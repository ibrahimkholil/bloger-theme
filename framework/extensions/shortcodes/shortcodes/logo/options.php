<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

 'items' => array(
		'label' => __('Items', 'bloger'),
		'desc' => __('Items per view', 'bloger') ,
		'type' => 'slider',
		'value' => 4,
		'properties' => array(
			'min' => 1,
			'max' => 10,
			'step' => 1,	
        ),		
	),
	
	'logo' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Logo', 'bloger' ),
		'popup-title'   => __( 'Add/Edit Logo', 'bloger' ),
		'desc'          => __( 'Add client logo', 'bloger' ),
		'template'      => '<img style= "width:80px;height:40px" src="{{= image.url }}" >',
		'popup-options' => array(
			'image' => array(
				'type'  => 'upload',
				'label' => __('Image', 'bloger'),
				'desc' => __('Upload client logo image here', 'bloger') ,
			)
		),
	)
);