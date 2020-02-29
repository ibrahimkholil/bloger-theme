<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'label' => array(
		'label' => __('Label', 'bloger') ,
		'desc' => __('This is the text that appears on your button', 'bloger') ,
		'type' => 'text',
		'value' => 'Submit'
	) ,
	'link' => array(
		'label' => __('Link', 'bloger') ,
		'desc' => __('Where should your button link to?', 'bloger') ,
		'type' => 'text',
		'value' => '#'
	) ,
	'theme' => array(
		'type' => 'select',
		'label' => __('Button theme', 'bloger') ,
		'desc' => __('This maybe black or white.', 'bloger') ,
		'choices' => array(
			'white' => __('White', 'bloger') ,
			'black' => __('Black', 'bloger') ,
		)
	) ,
	'align' => array(
		'type' => 'select',
		'label' => __('Button alignment', 'bloger') ,
		'desc' => __('Button alignment.It will be left,right or center', 'bloger') ,
		'choices' => array(
			'align-left' => __('Left', 'bloger') ,
			'align-center' => __('Center', 'bloger') ,
			'align-right' => __('Right', 'bloger') ,
		)
	) ,
	'target' => array(
		'type' => 'switch',
		'label' => __('Link target', 'bloger') ,
		'desc' => __('Open link in new window?', 'bloger') ,
		'value' => '_self',
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'bloger') ,
		) ,
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'bloger') ,
		) ,
	) ,
);