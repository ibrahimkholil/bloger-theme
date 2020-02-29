<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
	/*
	@returns array
	@package bloger
	*/
}

$options = array(
		
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'me_type' => array(
				'type'    => 'select',
				'label'   => __( 'Theme', 'bloger' ),
				'desc'    => __( 'Select display type.', 'bloger' ),
				'choices' => array(
				    'simple' => __( 'Simple', 'bloger' ),
					'compact'  => __( 'Compact', 'bloger' ),					
				)
			)
		),
		'choices'     => array(
			'simple' => array(
			
				'name'  => array(
					'label' => __( 'Name', 'bloger' ),
					'desc'  => __( 'Type your name', 'bloger' ),
					'type'  => 'text',
					'value' => 'John Doe',
				),
				'title'  => array(
					'label' => __( 'Title', 'bloger' ),
					'desc'  => __( 'Your designation', 'bloger' ),
					'type'  => 'text',
					'value' => 'Freelancer / Web-developer',
				),				
			),
			'compact' => array(
			
				'name'  => array(
					'label' => __( 'Name', 'bloger' ),
					'desc'  => __( 'Type your name', 'bloger' ),
					'type'  => 'text',
				),
				'main'  => array(
					'label' => __( 'Typer Head', 'bloger' ),
					'desc'  => __( 'Typer fixed heading', 'bloger' ),
					'type'  => 'text',
				),				
				'desc'  => array(
					'label' => __( 'Typer Content', 'bloger' ),
					'desc'  => __( 'Typer typing moving part.Please separe textblock by ;', 'bloger' ),
					'type'    => 'textarea',
				),
			)			
		)
	),		
		
		
	'social_profiles'=> array(

		'type'          => 'addable-popup',
		'label'         => __( 'Social profiles', 'bloger' ),
		'popup-title'   => __( 'Add/Edit profiles', 'bloger' ),
		'desc'          => __( 'Create profiles', 'bloger' ),
		'template'      => '<i class="{{= source}}"></i>',
		'popup-options' => array(
		
			'source' => array(
				'type'  => 'icon',
				'value' => 'fa fa-facebook',
				'label' => __('Social profile type', 'bloger')
			),			
			
				'link' => array(
				'type'  => 'text',
				'value' => 'www.facebook.com',
				'label' => __('Profile link', 'bloger')
			),		
		),
		
	)
);