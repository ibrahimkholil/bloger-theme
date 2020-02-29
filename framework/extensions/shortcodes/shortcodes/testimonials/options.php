<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'testimonial' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Testimonials', 'bloger' ),
		'popup-title'   => __( 'Add/Edit Testimonials', 'bloger' ),
		'desc'          => __( 'Add testimonials', 'bloger' ),
		'template'      => '{{=name}}',
		'popup-options' => array(

			'name' => array(
				'type'  => 'text',
				'label' => __('Name', 'bloger'),
				'desc' => __('Place person name', 'bloger') ,
				'value'=> __('John Doe','bloger')
			),
			'company' => array(
				'type'  => 'text',
				'label' => __('Company', 'bloger'),
				'desc' => __('Company name. You can link company name', 'bloger') ,
				'value'=> __('Apple Inc','bloger')
			),			
			'content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'bloger'),
				'desc' => __('Put testimonial content', 'bloger') ,
				'value'=> __('Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.','bloger')
			),			
		),
	)
);