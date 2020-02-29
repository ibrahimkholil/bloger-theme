<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' );}
$options = array(
	'additional' => array(
		'title'   => __( 'Extra Settings', 'bloger' ),
		'type'    => 'tab',
		'options' => array(
			'additional-box' => array(
				'title'   => __( 'Extra Settings', 'bloger' ),
				'type'    => 'box',
				'options' => array(
                    'social_links' => array(
                        'type' => 'addable-popup',
                        'label' => __('Social Profile', 'bloger'),
                        'desc' => __('Add your social media links', 'bloger'),
                        'popup-title' => __('Add/Edit Social Profile', 'bloger'),

                        'template' => '<i class="{{= vendor}}"></i>',
                        'popup-options' => array(

                            'url' => array(
                                'label' => __('Profile url', 'bloger'),
                                'desc' => __('Enter profile url', 'bloger'),
                                'type' => 'text',
                            ),

                            'vendor' => array(
                                'label' => __('Icon', 'bloger'),
                                'desc' => __('Pick correct icon against the url', 'bloger'),
                                'type' => 'icon',

                            ),
                        ),
                    ),

					'sidebar' => array(
                        'type' => 'addable-popup',
                        'label' => __('Custom sidebar', 'bloger'),
                        'desc' => __('Add as many as sidebar you need', 'bloger'),
                        'popup-title' => __('Add Sidebars', 'bloger'),

                        'template' => '{{=sidebar_id}}',
                        'popup-options' => array(

                            'sidebar_id' => array(
                                'label' => __('Sidebar ID', 'bloger'),
                                'desc' => __('Sidebar ID must be unique.', 'bloger'),
                                'type' => 'text',
                            ),
                        ),
                    ),
										
                    'copyright' => array(
                        'label' => __('Copyright', 'bloger'),
                        'desc' => __('Enter copyright text', 'bloger'),
                        'type' => 'wp-editor',
                        'tinymce' => true,
                        'reinit' => true,
                    ),
                    'custom_css' => array(
                        'label' => __('Custom CSS', 'bloger'),
                        'desc' => __('Put your css.This rule will override other css rules.', 'bloger'),
                        'type' => 'textarea',
                    ),					
				)
			),
		)
	)
);