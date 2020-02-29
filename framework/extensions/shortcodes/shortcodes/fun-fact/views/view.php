<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}
	$icon = $atts['icon'];
	$title = $atts['title'];
	$content = $atts['content'];
?>

<div class="counter-list-wrapper">

	<?php if (!empty($icon)): ?>
		<i class="<?php echo esc_attr($icon);?>"></i>
	<?php endif; ?>
	<h5><?php echo esc_attr($title);?></h5>	
	<p><?php echo esc_attr($content);?></p>
	
</div>