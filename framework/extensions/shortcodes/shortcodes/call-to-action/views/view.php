<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

	<div class="alamgir cta-wrapper">
		<div class="cta-content">
		
			<?php if (!empty($atts['title'])): ?>
				<h3><?php echo do_shortcode($atts['title']); ?></h3>
			<?php endif; ?>
			
			<?php if (!empty($atts['message'])): ?>
				<p><?php echo do_shortcode($atts['message']); ?></p>
			<?php endif; ?>
			
		</div>
		
		<div class="cta-btn fw-btn">		
			<a href="<?php echo esc_attr($atts['button_link']); ?>" class="fw-btn black" target="<?php echo esc_attr($atts['button_target']); ?>">
				<span><?php echo esc_attr($atts['button_label']); ?></span>
			</a>			
		</div>
		
	</div>