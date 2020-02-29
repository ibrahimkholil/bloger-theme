<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

/**
 * @var array $atts
 */
}


  $map_data = $atts['data_map']; 
  $height = 'style=height:'.$atts['map_height'].'px'; 
  $style = ( isset($height) && $height ) ? $height:'';
  
?>
<div class="fw-map" <?php echo esc_attr($style);?>>
	<?php echo do_shortcode( $map_data ); ?>
</div>