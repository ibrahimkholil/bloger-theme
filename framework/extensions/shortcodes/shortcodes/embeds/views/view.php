<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

	<div class="fw-embed">
		<?php echo wp_oembed_get(esc_attr($atts['url'])); ?>
	</div>
