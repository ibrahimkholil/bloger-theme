<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
'subtitle' => array(
		'type'  => 'text',
		'label' => __( 'Top title', 'bloger' ),
		'desc'  => __( 'Write the heading subtitle content', 'bloger' ),
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( ' Title', 'bloger' ),
		'desc'  => __( 'Write the heading title content', 'bloger' ),
	),
	'des'    => array(
		'type'  => 'text',
		'label' => __( ' Description', 'bloger' ),
		'desc'  => __( 'Write the heading title content', 'bloger' ),
	),
	

	'centered' => array(
		'type'    => 'switch',
		'label'   => __('Centered', 'bloger'),
		'desc'  => __( 'Is it centered heading?', 'bloger' ),
	),
	'color_top' => array(
		'type' => 'rgba-color-picker',
		'label' => __('Top color', 'bloger') ,
		'desc'  => __('Color', 'bloger'),
		'value' => 'rgba(255, 255, 255, 0)',
	) ,	
);
