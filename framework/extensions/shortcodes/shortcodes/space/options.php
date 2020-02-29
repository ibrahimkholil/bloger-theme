<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'spacing_type' => array(
		'label' => __('Spacing type', 'bloger') ,
		'desc' => __('Select spacing if margin or padding', 'bloger') ,
		'type' => 'select',
		'choices' => array(
			'margin-top' => __('Margin-top', 'bloger') ,
			'padding-top' => __('Padding-top', 'bloger') ,
		) ,
	) ,
	'amount' => array(
		'label' => __('Amount', 'bloger') ,
		'desc' => __('Spacing in px', 'bloger') ,
		'type' => 'slider',
		'properties' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		) ,
	) ,
);