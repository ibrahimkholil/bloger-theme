<?php
/**
 * Template Name: Home
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bloger
 */
global $bloger_options;
$top_tilte = $bloger_options['post-filter-top'];
$top_middle = $bloger_options['post-filter-title'];
$top_bottom = $bloger_options['post-filter-bottom'];
get_header(); ?>
<section class="filter-posts-area">
	<div class="bloger-filter-head">
	<div class="container">
	     <div class="row">
		  <div class="col-md-12 text-center padding-bottom ">
		    <h3 class="bloger-top-title wow bounceIn"><?php echo $top_tilte;?></h3>
		    <h2 class="post-filter-middle wow zoomIn"><?php echo $top_middle; ?></h2>
		    <span class="bloger-filter-title "><?php echo $top_bottom; ?></span>
			<span class="border-before"></span>
		  </div>
		</div>
	</div>
	</div>
	 <div class="container">
		<div class="row ">
		<?php
		global $post;
		
		$args = array( 'posts_per_page' => 1, 'post_type'=> 'post', 'orderby' => 'menu_order', 'order' => 'ASC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
		 <div class="col-md-8">
		   <div class="img-box">
		    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('filter-img') ; ?></a>
			
		   </div>
		   
		 </div>
	   <div class="col-md-4">
		 <h3 class="bloger-top-title"><?php category_excerpt_link(); ?> </h3>
		 <a href="<?php the_permalink();?>"><h2 class="recent-post-title"><?php the_title();?></h2></a>
		 <div class="latest-post-desc">
		   <?php the_excerpt('15');?>
		 </div>
	   </div>
			
		<?php endforeach; wp_reset_query();?>
	   
	
	</div>
		<div class="row">
		  <div class="posts-filter post-filter-border">
		  <div id="home-post-filter">
		  <?php
		  	global $post;
		
			$args = array( 'posts_per_page' => 4, 'post_type'=> 'post', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post);
		  ?>
			  <div class="item">
				<div class="col-md-12">
				<?php 	the_post_thumbnail('filter-slider', array( 'title' => get_the_title() ) ); 
				  ?>
				  <h3 class="filter-post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				   <div class="post-info">
					<span class="cat-name"><?php category_excerpt_link();?> - </span>
					<span class="date"> <?php the_time(' F j, Y') ?></span>
				  </div>
				</div>
				</div>
			<?php endforeach; wp_reset_query();?>
		</div><!--End owl carosule-->
		</div>
		</div>
		<section class="feature-area">
		<div class="row">
		   <div class="col-md-6">
		      <h4 class="bloger-top-title">My most</h4>
			  <h2>Trusted Resources</h2>
			  <p><a href="">View all Resources</a></p>
		   </div>
		   <div class="col-md-2">
		     <div class="feature box">
				   <i class="glyphicon glyphicon-th-large"></i>
				   <div class="details">
				   <h3><a href="">Bluehost</a></h3>
				   <p>Lorep ipsum </p>
				  </div>
			 </div>
		   </div><!---end col-md2 --> 
		   <div class="col-md-2">
		     <div class="feature box">
				   <i class="glyphicon glyphicon-th-large"></i>
				   <div class="details">
				   <h3><a href="">Bluehost</a></h3>
				   <p>Lorep ipsum </p>
				  </div>
			 </div>
		   </div><!---end col-md2 -->  
		   <div class="col-md-2">
		     <div class="feature box">
				   <i class="glyphicon glyphicon-th-large"></i>
				   <div class="details">
				   <h3><a href="">Bluehost</a></h3>
				   <p>Lorep ipsum </p>
				  </div>
			 </div>
		   </div><!---end col-md2 -->
		   
		</div>
	</section><!--End Featured posts section-->
	</section><!--End Filter posts section-->
<div class="container">
	<div class="row">
	<div class="col-md-12">

		<?php
		if ( have_posts() ) :

			if ( is_home() && !is_front_page() ) : ?>
				<header>
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>

				

				
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content','page' );
				the_content();

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	
	
	</div>
	
	</div><!-- #row -->
</div><!-- #container -->
	

<?php

get_footer();
