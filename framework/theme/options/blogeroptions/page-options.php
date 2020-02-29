<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'pagesettings' => array(
        'title'   => __( 'Page Settings', 'bloger' ),
        'type'    => 'tab',
        'options' => array(
            'pagesettings-box' => array(
                'title'   => __( 'Page Settings', 'bloger' ),
                'type'    => 'box',
                'options' => array(
					'no_header' => array(
						'type'    => 'switch',
						'label'   => __('Display Header', 'bloger'),
						'desc'  => __( 'Hidden page header ex for homepage', 'bloger' ),
						'right-choice' => array(
								'value' => '',
								'label' => __( 'No', 'bloger' )
						),
						'left-choice'  => array(
								'value' => '1',
								'label' => __( 'Yes', 'bloger' )
						),						
					),	
					'no_footer' => array(
						'type'    => 'switch',
						'label'   => __('Display Footer', 'bloger'),
						'desc'  => __( 'Hidden page footer widgets', 'bloger' ),
						'right-choice' => array(
								'value' => '',
								'label' => __( 'No', 'bloger' )
						),
						'left-choice'  => array(
								'value' => '1',
								'label' => __( 'Yes', 'bloger' )
						),						
					),
					'no_footer' => array(
						'type'    => 'switch',
						'label'   => __('Display Footer', 'bloger'),
						'desc'  => __( 'Hidden page footer widgets', 'bloger' ),
						'right-choice' => array(
								'value' => '',
								'label' => __( 'No', 'bloger' )
						),
						'left-choice'  => array(
								'value' => '1',
								'label' => __( 'Yes', 'bloger' )
						),						
					),					
					'bg_image' => array(
						'type'    => 'upload',
						'label'   => __('Image', 'bloger'),
						'desc'  => __( 'Use this image as page background', 'bloger' ),
					),	
					'bg_color' => array(
						'type'    => 'rgba-color-picker',
						'label'   => __('Color', 'bloger'),
						'desc'  => __( 'If image is used then color will be used as image overlay', 'bloger' ),
					),					
                )
            ),
        )   
    )
);