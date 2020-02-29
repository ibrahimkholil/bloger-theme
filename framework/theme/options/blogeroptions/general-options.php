<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' );}
$options = array(
	'general' => array(
		'title'   => __( 'General Settings', 'bloger' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Image', 'bloger' ),
				'type'    => 'tab',
				'options' => array(						
                    'logo' => array(
                        'label' => __( 'User Image', 'bloger' ),
                        'desc' => __( 'Upload user image.Please make sure that is atleast 1200px by 1900px in dimension.', 'bloger' ),
                        'type' => 'upload'
                    ),
								                                      
				)
			),
			'general-box-second' => array(
				'title'   => __( 'Misc', 'bloger' ),
				'type'    => 'tab',
				'options' => array(
				
                    'ajax_enable' => array(
                        'label' => __( 'Enable Ajax Loading', 'bloger' ),
                        'desc' => __( 'Enable loading pages/posts via ajax.If you have any problem loading posts disable it', 'bloger' ),
                        'type' => 'switch',
                    ),	
					
                    'loading_img' => array(
                        'label' => __( 'Loading Image', 'bloger' ),
                        'desc' => __( 'Upload a gif loading image.', 'bloger' ),
                        'type' => 'upload',
                    ),	
					
					'excerpt' => array(
							'label' => __('Excerpt', 'bloger'),
							'desc' => __('Custom excerpt length.', 'bloger') ,
							'type' => 'slider',
							'properties' => array(
							'min' => 1,
							'max' => 100,
							'value'=>50,
							'step' => 1,	
							),		
						),	
						
                    'general_typo' => array(
						'type'  => 'typography',
						'value' => array(
							'family' => 'Arial',
							'size'   => 12,
							'style'  => '400',
							'color'  => '#000000'
						),
					   'components' => array(
							'family' => true,
							'size'   => false,
							'color'  => false
						),
						'label' => __('Body Font', 'bloger'),
						'desc'  => __('General body font', 'bloger'),
					),	
					
                    'heading_typo' => array(
						'type'  => 'typography',
						'value' => array(
							'family' => 'Arial',
							'size'   => 12,
							'style'  => '400',
							'color'  => '#000000'
						),
					   'components' => array(
							'family' => true,
							'size'   => false,
							'color'  => false
						),
						'label' => __('Heading Font', 'bloger'),
						'desc'  => __('Font for heading - h1,h2,h3,h4,h5 and h6', 'bloger'),
					),					
				)
			),			
		)
	)
);