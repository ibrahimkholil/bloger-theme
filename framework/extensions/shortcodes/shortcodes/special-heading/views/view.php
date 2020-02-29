<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
 $centered = ( isset($atts['centered']) && $atts['centered'] ) ? 'align-center' : '';
 $heading = $atts['heading'];
 
?>
<div class="heading-block <?php echo esc_attr($centered); ?>">

	<<?php echo esc_attr($heading); ?> class='special-title'><?php echo do_shortcode($atts['title']); ?></<?php echo esc_attr($heading);?>>

	<?php if (!empty($atts['subtitle'])): ?>
		<div class="special-subtitle"><?php echo esc_html( $atts['subtitle'] ); ?></div>
	<?php endif; ?>
	
	<?php if (!empty($atts['no_underline'])): ?>
		<span class="separator"></span>
	<?php endif; ?>	
	
</div>
