<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

?>

<div class="resume-wrapper">

	<?php 
		if (sizeof($atts['resume']) > 0) {
			foreach ($atts['resume'] as $key => $tab) :?>
				<div class="resume">
					<h4><?php echo esc_attr($tab['date']); ?></h4>
					<span class="position"><?php echo esc_attr($tab['position']); ?></span> 
					<span class="company"><?php echo '- '. do_shortcode($tab['company']); ?></span>
					<p><?php echo do_shortcode($tab['description']); ?>
					</p>
				</div>
			<?php endforeach;} ?>  

</div>