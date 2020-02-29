<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label' => __('Full Width', 'bloger') ,
		'desc'  => __('Is section full-width or boxed?', 'bloger'),
		'type' => 'switch',
		
	) ,
	 	
	'border_top' => array(
		'label' => __('Border Top', 'bloger') ,
		'desc'  => __('Section border top ', 'bloger'),
		'type' => 'slider',
		'value' => 5,
		'properties' => array(
			'min' => 0,
			'max' => 5,
			'step' => .5,	
        ),
	) ,
     'border_color' => array(
		'type' => 'rgba-color-picker',
		'label' => __('Top color', 'bloger') ,
		'desc'  => __('Color', 'bloger'),
		'value' => 'rgb(243,101,35)',
	) ,	
	
	'padding' => array(
		'label' => __('Padding Top-Bottom', 'bloger') ,
		'desc'  => __('Section padding top and bottom in em unit', 'bloger'),
		'type' => 'slider',
		'value' => 3,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'step' => .5,	
        ),
	) ,

	'padding_l' => array(
		'label' => __('Padding Left-Right', 'bloger') ,
		'desc'  => __('Section padding left and right in em unit', 'bloger'),
		'type' => 'slider',
		'value' => 3,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'step' => .5,	
        ),
	) ,
	
	'background' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'bg_type' => array(
				'type' => 'select',
				'label' => __('Background type', 'bloger') ,
				'desc'  => __('Choose background as color or image', 'bloger'),
				'choices' => array(
					'' => __('---', 'bloger') ,
					'color' => __('Color', 'bloger') ,
					'image' => __('Image', 'bloger') ,
				)
			)
		) ,
		'choices' => array(
			'color' => array(
				'selected_color' => array(
					'type' => 'rgba-color-picker',
					'label' => __('Color', 'bloger') ,
					'desc'  => __('Pick background color', 'bloger'),
				) ,
			) ,
			'image' => array(
				'image_selected' => array(
					'label' => __('Image', 'bloger') ,
					'type' => 'upload',
					'desc'  => __('Upload an image.', 'bloger'),
					'images_only' => true,
				) ,
				'overlay' => array(
					'type' => 'rgba-color-picker',
					'label' => __('Overlay', 'bloger') ,
					'desc'  => __('Background image overlay color', 'bloger'),
					'value' => 'rgba(255, 255, 255, 0)',
				) ,
				'fixed' => array(
					'label' => __('Image attachment', 'bloger') ,
					'desc'  => __('Is attachment fixed?', 'bloger'),
					'type' => 'switch',
				) ,
			)
		)
	) ,
);