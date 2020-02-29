<?php if (!defined('FW')) { die('Forbidden');}

	$section_style='';
	$overlay_div='';
	$container_type='';
	$fullwidth = $atts['is_fullwidth'];
	$padding = $atts['padding'];
	$border_top = $atts['border_top'];
	$border_color = $atts['border_color'];
	$padding_l = $atts['padding_l'];
	$class = ( isset($fullwidth) && $fullwidth ) ? 'container-fluid' : 'container';



	/*Image*/

	if (fw_akg('background/bg_type', $atts) === 'image') {
	
		$option = fw_akg( 'background/image', $atts );
		
			if ( !empty($option['image_selected']) ) {
				
				$image =  $option['image_selected']['url'];
				$fixed = $option['fixed'];
				$overlay = $option['overlay'];
				
				$is_fixed = ( isset($fixed) && $fixed ) ? 'background-attachment:fixed' : '';	
				$bg_image = ( isset($image) && $image ) ? 'background-image:url('.$image.');'.$is_fixed.'':'';

				$section_style = ( isset($bg_image) && $bg_image ) ? 'style='.$bg_image . '' : '';
				
				$overlay_div = ( isset($overlay) && $overlay ) ? 'style=background:'.$overlay.'' : '';				
		}
	}
	
	
	/*Color*/

	if ( fw_akg('background/bg_type', $atts) === 'color' ) {
	
			$option = fw_akg('background/color', $atts);
			$color = esc_attr($option['selected_color']);
			
			if (!empty($color)) {
				$bg_color = 'background:'.$color.';';
			}

			$section_style = ( isset($bg_color) ) ? 'style='.$bg_color.'' : '';
	}

?>
<section style="padding:<?php echo esc_attr($padding); ?>em <?php echo esc_attr($padding_l); ?>em;border-top:<?php echo esc_attr($border_top);?>px solid <?php echo esc_attr($border_color);?>">
<div class=<?php echo esc_attr($class);?> <?php echo esc_attr($section_style); ?>>
		<div class="section-overlay" <?php echo esc_attr($overlay_div);?>></div>
			<?php echo do_shortcode( $content ); ?>
		
	</div>
</section>
	
    
