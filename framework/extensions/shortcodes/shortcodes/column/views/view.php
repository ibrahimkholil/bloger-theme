<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

	$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');


	$color = $atts['bg_color'];
	$padding = $atts['padding'];
	$margin =  $atts['margin'];

	$container_class = ( $class || $margin ) ? $class.' '.$margin : $class;

?>

	<div class="<?php echo esc_attr($container_class); ?>">
	
		<div style="background-color:<?php echo esc_attr($color);?>;padding:<?php echo esc_attr($padding);?>px">
			<?php echo do_shortcode($content); ?>
		</div>
		
	</div>
