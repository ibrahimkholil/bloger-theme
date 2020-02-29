<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

	<?php if ( 'line' === $atts['style']['ruler_type'] ): ?>
		<div class="fw-divider-line"><hr/></div>
	<?php endif; ?>

	<?php if ( 'space' === $atts['style']['ruler_type'] ): ?>
		<div class="fw-divider-space" style="padding-top: <?php echo esc_attr($atts['style']['space']['height']); ?>px;"></div>
	<?php endif; ?>


	<?php if ( 'icon-center-full' === $atts['style']['ruler_type'] ): ?>
		<div class="fw-divider divider-center">
			<i class="<?php echo esc_attr($atts['style']['icon-center-full']['icon']); ?>"></i>
		</div>	
	<?php endif; ?>

	<?php if ( 'icon-center-small' === $atts['style']['ruler_type'] ): ?>
		<div class="fw-divider divider-short divider-center">
			<i class="<?php echo esc_attr($atts['style']['icon-center-small']['icon']); ?>"></i>
		</div>	
	<?php endif; ?>
	
	<?php if ( 'circular-left' === $atts['style']['ruler_type'] ): ?>
		<div class="fw-divider divider-left circular">
			<span></span>
		</div>	
	<?php endif; ?>

	