<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>

<div class="about-me">
	<div class="about-me-inner">	
		<?php if ( 'compact' === $atts['style']['me_type'] ): ?>
		
			<div class="about-me-name">
				<h2><?php echo esc_attr($atts['style']['compact']['name']); ?></h2>
				<p class="type-text" title="<?php echo esc_attr($atts['style']['compact']['desc']); ?>"></p>
			</div>
		
		<?php endif; ?>

		<?php if ( 'simple' === $atts['style']['me_type'] ):?>
					
			<div class="about-me-name simple">
				<h2><?php echo esc_attr($atts['style']['simple']['name']); ?></h2>
				<p class="title">
					<?php echo esc_attr($atts['style']['simple']['title']); ?>
				</p>
			</div>
		
		<?php endif; ?>
	
		<div class="social-follow-wrap">
			<ul class="social-follow intro">
				<?php $social_items = $atts['social_profiles'];
					if (sizeof($social_items) > 0) {
						foreach($social_items as $social_item) {
							echo '<li><a href="'.esc_url($social_item['link']).'" target="_blank"><i class="'.esc_attr($social_item['source']).'"></i></a></li>';
						}
					}				
				?>
			</ul>
		</div>	
	</div>

</div>

<?php if ( 'compact' === $atts['style']['me_type'] ): ?>
	<?php $prefix = $atts['style']['compact']['main'];?>
	<script type="text/javascript"> 
		(function($) {
			"use strict";		
			$(document).ready(function() {			
			  $( '.type-text' ).each( function() {
				var items = $( this ).attr( 'title' ) + ';' + $( this ).text();
				$( this ).empty().attr( 'title', '' ).teletype( {
				  text: $.map( items.split( ';' ), $.trim ),
				  typeDelay: 10,
				  backDelay: 20,
				  cursor: '',
				  delay: 3000,
				  preserve: false,
				  prefix: '<?php echo esc_js($prefix);?>',
				  loop: 0
				} );
			  } );					   
			});
			
		})(jQuery);	  
	</script>
<?php endif; ?>
