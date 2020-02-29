<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
if ( fw_ext('page-builder') ) {
	$options = array(
		'post' => array(
			'title' => __('Single Post', 'bloger'),
			'type' => 'tab',
			'options' => array(
				'post-box' => array(
					'title' => __('Single Post Settings', 'bloger'),
					'type' => 'box',
					'options' => array(

						'single_layout' => array(
							'label' => __('Single Post Layout', 'bloger'),
							'type' => 'image-picker',
							'value' => 'inherit',
							'desc' => __('Single post layout ex left-sidebar;right-sidebar;full-width', 'bloger'),
							'choices' => array(
													
								'fw-col-md-12' => array(
									'small' => array(
										'height' => 60,
										'src' => get_template_directory_uri().
										'/framework/theme/options/img/full.png'
									),
								),
								'fw-col-md-8 left' => array(
									'small' => array(
										'height' => 60,
										'src' => get_template_directory_uri().
										'/framework/theme/options/img/left.png'
									),
								),
								'fw-col-md-8 right' => array(
									'small' => array(
										'height' => 60,
										'src' => get_template_directory_uri().
										'/framework/theme/options/img/right.png'
									),
								),
							),

						),

					'single_sidebar' => array(
						'label'   => __( 'Sidebar', 'bloger' ),
						'desc' => __('Select unique sidebar for single post', 'bloger'),
						'type'    => 'select',
						'choices' => FW_Shortcode_Widget_Area::get_sidebars()
					),					
					)
				),
			)
		),

	);
}