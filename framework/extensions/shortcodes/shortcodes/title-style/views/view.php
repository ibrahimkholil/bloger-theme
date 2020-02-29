<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
// $centered = ( isset($atts['centered']) && $atts['centered'] ) ? 'align-center' : '';
  $subtitle = $atts['subtitle'];
  $title = $atts['title'];
  $color = $atts['color_top'];
?>
<div class=" header-block filter-posts-area">
	<div class="bloger-filter-head">
	<div class="container">
	   <div class="row">
		  <div class="col-md-12 text-center padding-bottom ">
		  <?php if (!empty($subtitle)): ?>
		   <h3 class="bloger-top-title wow bounceIn"><?php echo esc_html( $subtitle ); ?></h3> 
	     <?php endif; ?>
		 <?php if (!empty($title)): ?>
		 <h2 class="post-filter-middle wow zoomIn"><?php echo esc_html( $title ); ?></h2>
	     <?php endif; ?>
		    <?php if (!empty($atts['des'])): ?>
		 <span class="bloger-filter-title "><?php echo esc_html( $atts['des'] ); ?></span>
	   <?php endif; ?>
		   
			<span class="border-before"></span>
		  </div>
		</div>
	</div>
	</div><!--##bloger-filter-head--->
</div>
<style>
.special-top{
	color: <?php echo esc_html( $color ); ?>;
}
</style>
