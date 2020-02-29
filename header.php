<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloger
 */

 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'left'); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<section id="header">
	    
			<?php if(is_front_page() ):?>
			 <div class="header-banner" style="<?php //header_bg();?>">	
			 </div>
			 <?php endif;?>
			 
	  		<div class="container">
			<div class="row">
			<div class="col-md-2">

				      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a>
			
			 <div class="site-logo">
				<?php
				if ( is_front_page()) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php
				endif; ?>
		    </div><!-- site logo -->
			</div>
			<div class="col-md-10">
			  <nav class="navbar navbar-default" role="navigation">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>	
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						 <?php
							   wp_nav_menu(array(
									'theme_location'  => 'primary',
									'menu_class'      => 'nav navbar-nav',
									'fallback_cb'     => 'bloger_default_menu',
								));
							  
							 ?>
							<?php  get_template_part( 'template-parts/nav-searchform');?>
							
							
						</div><!-- /.navbar-collapse -->
					
				</nav>
			</div><!--col-md-10 end-->
	          <?php if( is_front_page() ):?>
					<?php  //get_template_part( 'template-parts/header-slider');?>
				
				<?php endif;?>
			</div>
		</div><!--End container-->
	</section> <!--End Header section-->


