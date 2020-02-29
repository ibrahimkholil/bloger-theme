<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloger
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-4">
<aside id="secondary" class="widget-area" role="complementary">
	<div class="sidebar-inner">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	
</aside><!-- #secondary -->
</div>

