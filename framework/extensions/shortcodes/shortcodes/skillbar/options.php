<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'skillbar' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Skillbar', 'bloger' ),
		'popup-title'   => __( 'Add/Edit Skillbar', 'bloger' ),
		'desc'          => __( 'Create your skillbar', 'bloger' ),
		'template'      => '{{=name}}',
		'popup-options' => array(
			'name' => array(
				'type'  => 'text',
				'label' => __('Name', 'bloger'),
				'desc' => __('Name of the skill', 'bloger') ,
			),
			'percentage' => array(
				'type'  => 'slider',
				'label' => __('Percentage', 'bloger'),
				'desc' => __('Skill percentage', 'bloger') ,
						'properties' => array(
							'min' => 1,
							'max' => 100,
							'step' => 1,	
							),
			)
		),
	)
);