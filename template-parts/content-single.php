<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloger
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="single-img-inner">
	       <div class="single-img">
			 <?php  the_post_thumbnail('full');?>
		  </div>
	</div>
	  <header class="page-header">
	 <div class="entry-meta single-post"><?php bloger_single_category(); ?></div>
	  <?php the_title( '<h1 class="entry-title single-title">', '</h1>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta single">
			<?php bloger_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	
	</header><!-- .entry-header -->	 
	<div class="entry-content">
	
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloger' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
