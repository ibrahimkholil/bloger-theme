<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}
?>

<div class="testimonial-wrapper">
	<div id="testimonial" class="owl-carousel">

		<?php if ( sizeof($atts['testimonial']) > 0 ) {
			
				foreach ( $atts['testimonial'] as $key => $tab ) : 
				
				$name = $tab['name'];
				$company = $tab['company'];
				$content = $tab['content'];
				
			?>
			<div>
				<p class="testi-content"><?php echo do_shortcode($content);?></p>
				<span class="name"><?php echo esc_attr($name);?></span> - <span class="company"><?php echo esc_attr($company);?></span>
			</div>
		
		<?php endforeach; } ?>	
	</div>	
</div>