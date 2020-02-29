<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bloger
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
	
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bloger_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
 
 <div class="post-feature-img">
   <?php if(is_single()):?>
	  <div class="single-img">
	     <?php  the_post_thumbnail('full');?>
	  </div>
	  <?php else:?>
	<a href="<?php the_permalink();?>"><?php  the_post_thumbnail('medium');?></a>
	<?php endif;?>
 </div>
	<div class="entry-content">
	
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloger' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #article -->
	


