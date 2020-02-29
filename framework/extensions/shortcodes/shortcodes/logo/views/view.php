<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

	$items = $atts['items'];


  
?>

<div class="client-logo-wrapper">
	<div id="client-logo" class="owl-carousel">		
		<?php if (sizeof($atts['logo']) > 0) {
				foreach ($atts['logo'] as $key => $tab) {
					$logo = (!empty($tab['image'])) ? $tab['image']['url'] : '';?>
						<div><img src="<?php echo esc_url( $logo ); ?>" alt=""></div>
				<?php }
			}
		?>
	</div>

	<script type="text/javascript"> 
	(function($) {
	    "use strict";
	    $(document).ready(function() {
	        $("#client-logo").owlCarousel({
	            dots: true,
	            rewind: true,
	            autoplay: true,
	            loop: true,
	            margin: 10,
	            responsive: {
	                0: {
	                    items: 1
	                },
	                678: {
	                    items: 2,
	                },
	                1200: {
	                    items: <?php echo esc_js($items);?>,
	                }
	            }
	        });
	    });
	})(jQuery);
	</script>	
	
</div>