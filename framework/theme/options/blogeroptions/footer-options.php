<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' );}
$options = array(
    'footer' => array(
        'title' => __( 'Footer Settings', 'bloger' ),
        'type' => 'tab',
        'options' => array(
            'footer-box' => array(
                'title' => __( 'Footer Settings', 'bloger' ),
                'type' => 'box',
                'options' => array(
				
                    'footer_social_show' => array(
                        'label' => __( 'Show Social Profile', 'bloger' ),
                        'desc' => __( 'Turn on to display social profile', 'bloger' ),
                        'type' => 'switch',
                    ),
					
                    'footer_copyright_show' => array(
                        'label' => __( 'Show Copyright', 'bloger' ),
                        'desc' => __( 'Turn on to display copyright text', 'bloger' ),
                        'type' => 'switch',
                    ),
                )
            ),
        )
    )
);