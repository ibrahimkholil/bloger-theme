<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

	$column = $atts['column_no'];
?>

<div class="process-list-wrapper">
	<ul class="process-steps">
	<?php 
	if (sizeof($atts['process']) > 0) {
	foreach ($atts['process'] as $key => $tab) :?>
	   <li class="<?php echo esc_attr($column);?>">
		  <span class="step"><?php echo do_shortcode( $tab['step']); ?></span>
		  <h5><?php echo do_shortcode($tab['title']);?></h5>
	   </li>
	<?php 

	endforeach;	} ?>  
	
	</ul>
</div>