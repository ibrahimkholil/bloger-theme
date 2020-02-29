<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(

	'taxonomy' => array(
		'type'  => 'multi-select',
		'label' => __('Population', 'bloger'),
		'desc'  => __('Show post from categories or single category.', 'bloger'),
		 'population' => 'taxonomy',
		 'source' => 'portfolio-category',

	),
	
    'masonry' => array(
        'label' => __('Enable masonry', 'bloger'),
		'desc'  => __('Enable pinterest style grid layout.', 'bloger'),
        'type' => 'switch'
    ),

    'post_no' => array(
        'label' => __('Post No', 'bloger'),
		'desc'  => __('No of posts per page.', 'bloger'),
        'type' => 'slider',
		'value' => 5,
		    'properties' => array(
				'min' => 1,
				'max' => 20,
				'step' => 1,
			),
	),
	
    'no_margin' => array(
        'label' => __('Marginless column', 'bloger'),
        'type' => 'switch',
		'desc'  => __('No spacing between posts column', 'bloger'),
    ),
    'display_title' => array(
        'label' => __('Display title', 'bloger'),
		'desc'  => __('Variation in displaying title', 'bloger'),
        'type' => 'select',
        'choices' => array(
            'hidden' => __('Hidden title', 'bloger'),
            'bottom' => __('Title in bottom', 'bloger'),
        )		
    ),
   
    'column_no' => array(
        'type' => 'select',
        'label' => __('Column no', 'bloger'),
		'desc'  => __('Set the number of column', 'bloger'),
        'value' => 'col-sm-3',
        'choices' => array(
            'fw-col-sm-12' => __('One', 'bloger'),
            'fw-col-sm-6' => __('Two', 'bloger'),
            'fw-col-sm-4' => __('Three', 'bloger'),
            'fw-col-sm-3' => __('Four', 'bloger'),
            'fw-col-sm-2' => __('Six', 'bloger')
        )
    ),
    
    'thumbnail' => array(
        'type' => 'select',
        'label' => __('Thumbnail size', 'bloger'),
		'desc'  => __('Select the thumbnail size', 'bloger'),
        'value' => 'medium',
        'choices' => array(
            'thumbnail' => __('Thumbnail', 'bloger'),
            'medium' => __('Medium', 'bloger'),
            'large' => __('Large', 'bloger'),
            'full' => __('Full', 'bloger'),
			'bloger-por' => __('Portrait size', 'bloger'),
			'bloger-sq' => __('Square size', 'bloger'),
			'bloger-mid' => __('Landscape size', 'bloger')
            
        )
    ),   
);