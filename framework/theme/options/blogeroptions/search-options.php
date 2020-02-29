<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
if ( fw_ext('page-builder') ) {
	$options = array(
		'search' => array(
			'title' => __('Search Page', 'bloger'),
			'type' => 'tab',
			'options' => array(
				'blog-box' => array(
					'title' => esc_html__('Search Page Settings', 'bloger'),
					'type' => 'box',
					'options' => array(

						'search' => array(
							'label' => __('Search Page Layout', 'bloger'),
							'type' => 'image-picker',
							'value' => '1',
							'desc' => __('Search Page ex left-sidebar;right-sidebar;full-width', 'bloger'),
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
						
					'search_sidebar' => array(
						'label'   => __( 'Sidebar', 'bloger' ),
						'desc' => __('Select unique sidebar for search page', 'bloger'),
						'type'    => 'select',
						'choices' => FW_Shortcode_Widget_Area::get_sidebars()
					),
					
					)
				),
			)
		),

	);
}