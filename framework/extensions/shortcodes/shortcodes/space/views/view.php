<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

	$type = $atts['spacing_type'];
	$amount = $atts['amount'];
	$style = ( isset($type) && $type ) ? 'style='.$type.':'.$amount.'px' : '';

?>

	<div class="fw-divider-space clearfix" <?php echo esc_attr($style); ?>></div>