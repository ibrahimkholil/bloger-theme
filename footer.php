<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloger
 */
global $bloger_options;
?>

</div><!-- #content -->
<footer class="footer-area">
	 <div class="container">
	 	<div class="row">
		  <div class="col-md-6">
		    
		    	<?php
				   wp_nav_menu(array(
						'theme_location'  => 'footer_menu',
						'menu_class'      => 'footer-nav',
						
					));
				  
				 ?>
				
		   
		  </div>
		  <div class="col-md-6">
		       <ul class="footer-social">
		    	<li>
				 <?php if ($bloger_options['footer-social-facebook']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-facebook']; ?>" title="<?php _e('Facebook', 'bloger') ;?>">
				<i class="fa fa-facebook" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li> 
				<li>
				<?php if ($bloger_options['footer-social-twitter']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-twitter']; ?>" title="<?php _e('Twitter', 'bloger') ;?>">
				<i class="fa fa-twitter" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li>	
				  <li>
				<?php if ($bloger_options['footer-social-googleplus']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-googleplus']; ?>" title="<?php _e('Google Plus', 'bloger') ;?>">
				<i class="fa fa-google-plus" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li>
				<li>
				<?php if ($bloger_options['footer-social-linkedin']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-linkedin']; ?>" title="<?php _e('Linkedin', 'bloger') ;?>">
				<i class="fa fa-linkedin" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li>
					<li>
				<?php if ($bloger_options['footer-social-youtube']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-youtube']; ?>" title="<?php _e('Youtube', 'bloger') ;?>">
				<i class="fa fa-youtube" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li>
				<li>
				<?php if ($bloger_options['footer-social-instagram']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-instagram']; ?>" title="<?php _e('Instagram', 'bloger') ;?>">
				<i class="fa fa-instagram" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li>
				<li>
				<?php if ($bloger_options['footer-social-pinterest']) : ?>
				<a href=" <?php echo $bloger_options['footer-social-pinterest']; ?>" title="<?php _e('Pinterest', 'bloger') ;?>">
				<i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				 <?php endif; ?>
				</li>	
			
			
	         
	
				
		    </ul>
		  </div>
		</div>
	 </div>
	</footer><!--End Footer section-->
	<div id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		  <div class="row">
			<div class="site-info">
				<a href="<?php //echo esc_url( __( 'http://fortunetech.com.bd/', 'bloger' ) ); ?>"><?php //printf( esc_html__( 'Proudly powered by %s', 'bloger' ), 'Fortunetech' ); ?></a>
				<span class="sep"> | </span>
				<?php //printf( esc_html__( 'Theme: %1$s  %2$s.', 'bloger' ), 'Bloger Design By', '<a href="http://fortunetech.com.bd/" rel="designer">Fortunetech</a>' ); ?>
			</div><!-- .site-info -->
		  </div>
		</div>
	</div><!-- #colophon end-->

</div><!--##site end-->
<?php wp_footer(); ?>

</body>
</html>
