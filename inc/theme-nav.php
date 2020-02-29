<?php 

add_action( 'init', 'bloger_theme_menus' );
function bloger_theme_menus() {
  register_nav_menus( array(
    'primary' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
));
}

	function bloger_default_menu() { 	
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}	
	?>	
		<ul>                  
			<li><a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php echo __( 'Set Up Your Menu', 'bloger' ); ?></a></li>
		</ul>		
	<?php }