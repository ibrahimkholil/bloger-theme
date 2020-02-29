<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' );}

	 $column = $atts['column_no'];
	 $marginless_col = $atts['no_margin'];
	 $masonry_class = $atts['masonry'];
	 $display_caption = $atts['display_title'];
	 $title_size = $atts['title_size'];
	 $thumbnail =  $atts['thumbnail'];
	
	 $marginless = ( isset( $marginless_col ) && $marginless_col ) ? 'no-padding' : '';
	 $masonry = ( isset( $masonry_class ) && $masonry_class ) ? 'post-wrapper masonry-container' : 'post-wrapper';
	 $container_class   = ( !empty($masonry) || !empty($marginless) ) ? ''.$marginless.' '.$masonry.' ' : '';
     $thumb_size = ( isset( $thumbnail ) && $thumbnail ) ? $thumbnail : 'medium';
 
?>

	<div class="alamgir gallery <?php echo esc_attr($container_class);?>">
		
			<?php if ( sizeof($atts['bg_image']) > 0 ) {
				foreach ($atts['bg_image'] as $key => $tab) : 
				
				$image_id = esc_attr( $tab['attachment_id'] );
				$attachment_page = get_attachment_link($image_id);
				$image_attributes = wp_get_attachment_image_src( $image_id,'full');
				$image_thumb = wp_get_attachment_image_src( $image_id, $thumb_size );
				$alt =  get_post_meta( $image_id, '_wp_attachment_image_alt', true);
				$title = get_the_title( $image_id );			
				$thumb_img =  get_post( $tab['attachment_id'] ); 
				
	        ?>    
				<article class="item-mason gallery-item <?php echo esc_attr($column);?>">
							
					<div class="items-container">                        
							<div class="gallery-box">
								
								<a href="<?php echo esc_url( $image_attributes[0] ); ?>">
									<div class="jane-featured bloger-loader">
										<img src="<?php echo esc_url( $image_thumb[0] ); ?>" title="<?php echo esc_html( $title ); ?>" alt="<?php echo esc_html( $alt ); ?>" >
										<div class="ovrly"></div>
										<div class="buttons">
											<span class="fa fa-plus"></span>
										</div>									
									</div>
								</a>
							
								<div class="wp-caption-text gallery-caption <?php echo esc_attr($display_caption).' '.esc_attr($title_size);?>">
									<p><?php echo esc_html( $title ); ?></p>
								</div>
							
							</div>
							 
					</div>	
					
				</article>	
				
			<?php endforeach; } ?>
	</div>