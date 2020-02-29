<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => __( 'Divider Type', 'bloger' ),
				'desc'    => __( 'Here you can set the styling and size of the HR element', 'bloger' ),
				'choices' => array(
				    'space' => __( 'Whitespace', 'bloger' ),
					'line'  => __( 'Line', 'bloger' ),
					'circular-left' => __( 'Circular left full width', 'bloger' ),
					'icon-center-small' => __( 'Icon center small', 'bloger' ),
					'icon-center-full' => __( 'Icon center full', 'bloger' )
					
				)
			)
		),
		'choices'     => array(
			'space' => array(
				'height' => array(
					'label' => __( 'Height', 'bloger' ),
					'desc'  => __( 'How much whitespace do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'bloger' ),
					'type'  => 'text',
					'value' => '50'
				)
			),
			'icon-center-small' => array(
				'icon' => array(
					'label' => __( 'Icon', 'bloger' ),
					'desc'  => __( 'Pick an icon for divider', 'bloger' ),
					'type'  => 'icon',
					'value' => 'fa fa-home'
				)
			),	
			'icon-center-full' => array(
				'icon' => array(
					'label' => __( 'Icon', 'bloger' ),
					'desc'  => __( 'Pick an icon for divider', 'bloger' ),
					'type'  => 'icon',
					'value' => 'fa fa-home'
				)
			),			
		)
	)
);
