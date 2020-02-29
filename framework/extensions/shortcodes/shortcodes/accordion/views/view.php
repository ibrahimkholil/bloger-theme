<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

?>

<?php $tabs_id = uniqid('fw-tabs-'); ?>

	<script type="text/javascript"> 
		(function($) {
			"use strict";		
			$(document).ready(function() {			
				$('<?php echo esc_js('#'.$tabs_id); ?>').easyResponsiveTabs({
					type: 'accordion', //Types: default, vertical, accordion           
				});					   
			});
			
		})(jQuery);	  
	</script>

	<div id="<?php echo esc_attr($tabs_id); ?>">
	
		<ul class="resp-tabs-list">
			<?php foreach ($atts['tabs'] as $key => $tab) : ?>
			<li><?php echo esc_html( $tab['tab_title']); ?></li>
			<?php endforeach; ?>			
		</ul>
		
		<div class="resp-tabs-container">
			<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
				<div>
					<?php echo do_shortcode($tab['tab_content']); ?>
				</div>
			<?php endforeach; ?>			
		</div>
		
	</div>