<?php
	if (!defined('FW')) {
			die('Forbidden');
	}
	
	$thumbnail = $atts['thumbnail'];
	$masonry_class = $atts['masonry'];
	$column = $atts['column_no'].' '.'item-mason';
	$num_post = $atts['post_no'];
	
	$marginless = ( isset($marginless_col) && $marginless_col ) ? 'no-padding' : '';
	$col_class = ( isset($masonry_class) && $masonry_class ) ? 'blog post-wrapper masonry-container' : 'blog post-wrapper';
	
	$container_style = ( $column || $marginless ) ? '' . $column . ' ' . $marginless . ' ' : '';
?>


	<div class="<?php echo esc_attr($col_class); ?>">
	
	 <?php
		if (is_front_page()) {
			$paged = (get_query_var('page')) ? get_query_var('page') : 1;
		}
		else {
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		}

		$query_args = array(
			'post_type' => 'post',
			'paged' => $paged,
			'posts_per_page' => $num_post,
		);
		$wp_query = new WP_Query($query_args);

		if ($wp_query->have_posts()):

		?>
		
	  <!-- the loop -->
	  <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
	  
			<article id="post-<?php the_ID(); ?>" <?php post_class(esc_attr($column)); ?>>

				<div class="gallery-box">
					<?php if ( has_post_thumbnail() ) : ?>
					
						<a class="post-featured" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						
							<div class="jane-featured bloger-loader">
								<?php  the_post_thumbnail(esc_attr($thumbnail)); ?>
							</div>
							
							<div class="ovrly"></div>
							
							<div class="buttons">
								<span class="fa fa-expand"></span>
							</div>
							
						</a>
						
					<?php endif; ?>
				</div>
			
				<div class="content-blog">					
					<header class="entry-header">	
					
						<?php bloger_single_category(); ?>	
						
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>					
						
						<?php bloger_posted_on(); ?>	
						
					</header><!-- .entry-header -->

					<div class="entry-summary">
					
						<?php the_excerpt(); ?>
						
					</div><!-- .entry-summary -->

				</div><!-- .content-blog -->
				
			</article><!-- #article-## -->


		<?php endwhile; ?>
		
	</div><!-- #container -->

					<div class="post-pagination">				
						<?php
						next_posts_link( '<i class="fa fa-chevron-left"></i>', $wp_query->max_num_pages );
						previous_posts_link( '<i class="fa fa-chevron-right"></i>' );
						?>					
					</div>	<!-- .post-pagination -->
			
			<?php wp_reset_postdata(); ?>
				
		<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

	    <?php endif; ?>
	