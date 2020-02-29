<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

?>

<div class="fw-btn <?php echo esc_attr( $atts['align'] ); ?>">
	<a href="<?php echo esc_url( $atts['link'] ); ?>" target="<?php echo esc_attr( $atts['target'] ); ?>" class="fw-btn <?php echo esc_attr($atts['theme']);?>">
		<?php echo do_shortcode($atts['label']); ?>
	</a>
</div>	

