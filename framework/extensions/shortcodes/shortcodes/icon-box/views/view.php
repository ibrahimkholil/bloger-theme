<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>

<div class="fw-iconbox clearfix">

	<div class="fbox-icon">
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	</div>
	
	<h3><?php echo esc_html($atts['title']); ?></h3>
	
	<p><?php echo do_shortcode($atts['content'] );?></p>
		
</div>