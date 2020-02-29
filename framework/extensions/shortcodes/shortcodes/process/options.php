<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'column_no' => array(
		'type' => 'select',
		'label' => __('Column', 'bloger') ,
		'desc' => __('Define number of column for process', 'bloger') ,
		'value' => 'fw-col-sm-4',
		'choices' => array(
			'fw-col-sm-12' => __('One', 'bloger') ,
			'fw-col-sm-6' => __('Two', 'bloger') ,
			'fw-col-sm-4' => __('Three', 'bloger') ,
			'fw-col-sm-3' => __('Four', 'bloger') ,
			'fw-col-sm-2' => __('Six', 'bloger') ,
		)
	) ,
	
	'process' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Process', 'bloger' ),
		'popup-title'   => __( 'Add/Edit Process', 'bloger' ),
		'desc'          => __( 'Create Process', 'bloger' ),
		'template'      => '{{=step}}',
		'popup-options' => array(
			'step' => array(
				'type'  => 'text',
				'label' => __('Step', 'bloger'),
				'desc' => __('Type process step; ex-1,2,3....', 'bloger') ,
			),
			'title' => array(
				'type'  => 'text',
				'label' => __('Title', 'bloger'),
				'desc' => __('Type process title.You can link title if you wish', 'bloger') ,
			)			
		),
	)
);