<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'margin' => array(
		'label' => __('Column Margin', 'bloger') ,
		'desc' => __('Column margin.Choose default to keep theme margin', 'bloger') ,
		'type' => 'select',
		'choices' => array(
			'default' => __('Default', 'bloger') ,
			'no-margin' => __('No left and right margin', 'bloger')
		)
	) ,
	'padding' => array(
		'label' => __('Column Padding', 'bloger') ,
		'desc' => __('Give custom padding to column in px', 'bloger') ,
		'type' => 'slider',
		'properties' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		) ,
	) ,
	'bg_color' => array(
		'label' => __('Background Color', 'bloger') ,
		'desc' => __('Give custom background color of column.', 'bloger') ,
		'type' => 'rgba-color-picker',
		'value' => 'rgba(255, 255, 255, 0)',
	) ,
);
