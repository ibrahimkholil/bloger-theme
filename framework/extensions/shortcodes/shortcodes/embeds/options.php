<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'URL', 'bloger' ),
		'desc'  => sprintf(
				__( 'Put embed url here.All wordpress %ssupported embed%s source can be used.', 'bloger' ),
				'<a target="_blank" href="https://codex.wordpress.org/Embeds">',
				'</a>')
),
);