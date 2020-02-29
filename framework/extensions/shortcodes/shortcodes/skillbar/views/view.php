<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}
?>

<div class="skills-bar-wrapper">

	<ul class="skills-bar">
	    <?php if (sizeof($atts['skillbar']) > 0) {
				foreach ($atts['skillbar'] as $key => $tab) : 
					$name= $tab['name'];
					$percentage= $tab['percentage'];
			?>
			
		<li data-percent="<?php echo esc_attr($percentage);?>">
			<span><?php echo esc_attr($name);?></span>
			<div class="progress" style="width: <?php echo esc_attr($percentage);?>%;">
				<div class="progress-percent"><?php echo esc_attr($percentage);?>%</div>
			</div>
		</li>
		
	<?php endforeach; } ?>		
	</ul>

</div>