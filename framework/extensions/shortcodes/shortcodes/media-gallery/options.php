<?php if (!defined('FW')) { die('Forbidden');}

$options = array(
    'masonry' => array(
        'label' => __('Enable masonry', 'bloger'),
		'desc'  => __('Enable pinterest masonry grid layout', 'bloger'),
        'type' => 'switch'
    ),
	
    'no_margin' => array(
        'label' => __('Marginless column', 'bloger'),
        'type' => 'switch',
		'desc'  => __('No spacing between images column', 'bloger'),
    ),
    'display_title' => array(
        'label' => __('Display title', 'bloger'),
		'desc'  => __('Variation in displaying title', 'bloger'),
        'type' => 'select',
        'choices' => array(
            'hidden' => __('Hidden title', 'bloger'),
            'overlay' => __('Overlay title', 'bloger'),
            'bottom' => __('Title in bottom', 'bloger'),
        )		
    ),
    'title_size' => array(
        'label' => __('Title style', 'bloger'),
		'desc'  => __('For wider image title spacing and font will be bigger and for smaller it will be smaller', 'bloger'),
        'type' => 'select',
        'choices' => array(
            'large' => __('Bigger title', 'bloger'),
            'small' => __('Smaller title', 'bloger'),
        )		
    ),    
    'column_no' => array(
        'type' => 'select',
        'label' => __('Column', 'bloger'),
		'desc'  => __('Set the number of gallery column', 'bloger'),
        'value' => 'col-sm-3',
        'choices' => array(
            'bit-col-1' => __('One', 'bloger'),
            'bit-col-2' => __('Two', 'bloger'),
            'bit-col-3' => __('Three', 'bloger'),
            'bit-col-4' => __('Four', 'bloger'),
        )
    ),
    
    'thumbnail' => array(
        'type' => 'select',
        'label' => __('Thumbnail size', 'bloger'),
		'desc'  => __('Set the desired thumbnail size', 'bloger'),
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
    
    'bg_image' => array(
        'label' => __('Images', 'bloger'),
		'desc'  => __('Upload gallery images.Press controll/cmd key for multi select', 'bloger'),
        'type' => 'multi-upload'
    )
    
    
);