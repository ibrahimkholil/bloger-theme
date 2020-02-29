<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' );}
$options = array(
    'header' => array(
        'title' => __( 'Header Settings', 'bloger' ),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __( 'Header Settings', 'bloger' ),
                'type' => 'box',
                'options' => array(
				
                    'social_show' => array(
                        'label' => __( 'Didplay Social Profile', 'bloger' ),
                        'desc' => __( 'Turn on to display social profile', 'bloger' ),
                        'type' => 'switch',
                    ),
					
                    'copyright_show' => array(
                        'label' => __( 'Didplay copyright text', 'bloger' ),
                        'desc' => __( 'Turn on to display copyright text', 'bloger' ),
                        'type' => 'switch',
                    ),
                )
            ),
        )
    )
);