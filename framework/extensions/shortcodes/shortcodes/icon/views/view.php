<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}
?>

<div class="icon-list-wrapper">
	<ul class="list-icons">

		<?php if ( sizeof($atts['icon']) > 0 ) {
		
			foreach ($atts['icon'] as $key => $tab) : ?>
		
				<li>
					<i class="<?php echo esc_html($tab['icon_used']); ?>"></i>
					<?php echo do_shortcode($tab['icon_title']); ?>
				</li>
			
		<?php endforeach; }?>
		
	</ul>
</div>