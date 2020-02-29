<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	
	'resume' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Resume', 'bloger' ),
		'popup-title'   => __( 'Add/Edit Resume', 'bloger' ),
		'desc'          => __( 'Create Resume', 'bloger' ),
		'template'      => '{{=date}}',
		'popup-options' => array(
			'date' => array(
				'type'  => 'text',
				'label' => __('Date', 'bloger'),
				'desc' => __('Duration for this position', 'bloger') ,
				'value' => 'Jan 2016 - Mar 2017',
			),
			'position' => array(
				'type'  => 'text',
				'label' => __('Position', 'bloger'),
				'desc' => __('Position during this time', 'bloger') ,
				'value' =>'Developer',
			),
			'company' => array(
				'type'  => 'text',
				'label' => __('Company', 'bloger'),
				'desc' => __('Name of the company. You can link the company url', 'bloger') ,
				'value' => 'Google Inc',
			),
			'description' => array(
				'type'  => 'textarea',
				'label' => __('Description', 'bloger'),
				'desc' => __('Detail summary of this position', 'bloger') ,
				'value' => 'I worked as a Web Developer at Google for 1 years. I create websites using wordpress.',
			),			
		),
	)
);