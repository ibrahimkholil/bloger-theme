<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
if ( fw_ext('page-builder') ) {
$options = array(
    'gallery' => array(
        'title' => __('Portfolio Archive', 'bloger'),
        'type' => 'tab',
        'options' => array(
            'gallery-box' => array(
                'title' => esc_html__('Portfolio Archive Settings', 'bloger'),
                'type' => 'box',
                'options' => array(

                    'archive_gallery' => array(
                        'label' => __('Portfolio Layout', 'bloger'),
                        'type' => 'image-picker',
                        'value' => '1',
                        'desc' => __('Archive layout ex left-sidebar;right-sidebar;full-width', 'bloger'),
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
                    'gallery_column_no' => array(
                        'type' => 'select',
                        'label' => __('Column number', 'bloger'),
                        'desc' => __('Column no ex single column;double column', 'bloger'),
                        'value' => 'fw-col-sm-6',
                        'choices' => array(
                            'fw-col-sm-12' => __('One', 'bloger'),
                            'fw-col-sm-6' => __('Two', 'bloger'),
                            'fw-col-sm-4' => __('Three', 'bloger'),
                            'fw-col-sm-3' => __('Four', 'bloger'),
                        )
                    ),
				'gallery_sidebar' => array(
					'label'   => __( 'Sidebar', 'bloger' ),
					'desc' => __('Select unique sidebar for gallery page', 'bloger'),
					'type'    => 'select',
					'choices' => FW_Shortcode_Widget_Area::get_sidebars()
				),					
                )
            ),
        )
    ),

);

}