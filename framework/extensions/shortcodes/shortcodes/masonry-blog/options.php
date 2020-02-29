<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'masonry' => array(
		'label' => __('Masonry', 'bloger') ,
		'type' => 'switch',
		'desc' => __('Masonry enabled pinterest layout', 'bloger') ,
	) ,
	'thumbnail' => array(
		'type' => 'select',
		'label' => __('Thumbnail', 'bloger') ,
		'desc' => __('Choose appropriate thumbnail size', 'bloger') ,
		'value' => 'medium',
		'choices' => array(
			'thumbnail' => __('Thumbnail', 'bloger') ,
			'medium' => __('Medium', 'bloger') ,
			'large' => __('Large', 'bloger') ,
			'full' => __('Full', 'bloger') ,
			'bloger-mid' => __('Photo-medium', 'bloger') ,
			'bloger-por' => __('Photo-portrait', 'bloger') ,
			'bloger-sq' => __('Photo-square', 'bloger')
		)
	) ,
	'column_no' => array(
		'type' => 'select',
		'label' => __('Column', 'bloger') ,
		'desc' => __('Define number of column for blog posts', 'bloger') ,
		'value' => 'fw-col-sm-4',
		'choices' => array(
			'fw-col-sm-12' => __('One', 'bloger') ,
			'fw-col-sm-6' => __('Two', 'bloger') ,
			'fw-col-sm-4' => __('Three', 'bloger') ,
			'fw-col-sm-3' => __('Four', 'bloger') ,
			'fw-col-sm-2' => __('Six', 'bloger') ,
		)
	) ,
	'post_no' => array(
		'label' => __('Post Number', 'bloger') ,
		'desc' => __('Number of posts per page.', 'bloger') ,
		'type' => 'slider',
		'value' => 5,
		'properties' => array(
			'min' => 1,
			'max' => 20,
			'step' => 1,
		) ,
	) ,
);
