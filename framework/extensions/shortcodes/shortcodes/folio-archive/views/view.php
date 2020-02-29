<?php if (!defined('FW')) { die('Forbidden'); }
	
	$column = $atts['column_no'].' '.'item-mason';
	$marginless_col =  $atts['no_margin'];
	$tax = $atts['taxonomy'];
	$num_post = $atts['post_no'];
	$thumbnail = $atts['thumbnail'];
	$masonry_class = $atts['masonry'];
	$display_caption = $atts['display_title'];

	$marginless = ( isset($marginless_col) && !empty($marginless_col) ) ? 'no-padding' : '';

	$masonry = ( isset( $masonry_class ) && !empty($masonry_class) ) ? 'post-wrapper masonry-container' : 'post-wrapper';

	$container_class   = ( !empty($masonry) || !empty($marginless) ) ? ''.$marginless.' '.$masonry.' ' : '';
	 
?>

<div class="alamgir gallery-archive <?php echo esc_attr($container_class) ;?>">

<?php
    if (is_front_page()) {
        $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
    } else {
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    }
	
		$query_args = array(
			'post_type' => 'portfolio',
			'paged' => $paged,
			'posts_per_page' => $num_post,
			'tax_query' => array(
				array(
					'taxonomy' => 'portfolio-category',
					'field' => 'term_id',
					'terms' => $tax,
				) ,
			) ,
		);
		$the_query  = new WP_Query($query_args);
	
		if ( $the_query->have_posts() ) : ?>
	
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
		<article id="post-<?php the_ID(); ?>" <?php post_class(esc_attr($column)); ?>>	
			<div class="items-container"> 
			
				<div class="gallery-box">
					<?php if ( has_post_thumbnail() ) : ?>
					
						<a class="post-featured" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						
							<div class="jane-featured bloger-loader">
								<?php  the_post_thumbnail(esc_attr($thumbnail)); ?>
							</div>
							
							<div class="ovrly"></div>
							
							<div class="buttons">
								<span class="fa fa-plus"></span>
							</div>
							
						</a>
						
					<?php endif; ?>
				</div>
				
				<?php if( $display_caption != 'hidden' ): ?>
				
					<div class="gallery-caption archive">	
					
						<?php bloger_folio_cat();?>				
						<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
						
					</div>
				<?php endif; ?>	
				
			</div>				
		</article><!-- #post-## -->
		<?php endwhile; ?>
</div>

<div class="post-pagination">				
	<?php
	next_posts_link( '<i class="fa fa-chevron-left"></i>', $the_query->max_num_pages );
	previous_posts_link( '<i class="fa fa-chevron-right"></i>' );
	?>					
</div><!-- .post-pagination -->
			
		<?php wp_reset_postdata(); ?>
		<?php else:  ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

