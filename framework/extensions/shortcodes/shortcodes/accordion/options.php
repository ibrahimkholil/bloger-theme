<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Accordion', 'bloger' ),
		'popup-title'   => __( 'Add/Edit Accordion', 'bloger' ),
		'desc'          => __( 'Create Accordion', 'bloger' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'bloger'),
				'desc'    => __( 'Enter title', 'bloger' ),
			),
			'tab_content' => array(
						'label'   => __( 'Content', 'bloger' ),
						'desc'    => __( 'Enter the accordion content', 'bloger' ),
						'type'    => 'wp-editor',
						'tinymce' => true,
						'reinit'  => true,
						'wpautop' => false,
			)
		),
	)
);