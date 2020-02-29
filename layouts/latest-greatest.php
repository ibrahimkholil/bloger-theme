<?php
/**
* Post filter top title section
* @package bloger
*/

?>
<div class="container">
<div class="row ">
		<?php
		global $post;
		$args = array( 'posts_per_page' => 1, 'post_type'=> 'post', 'orderby' => 'menu_order', 'order' => 'ASC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
		 <div class="col-md-8">
		   <div class="img-box">
		    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('filter-img', array( 'title' => get_the_title() ) ); ?></a>
			
		   </div>
		   
		 </div>
	   <div class="col-md-4">
		 <h3 class="bloger-top-title"><?php ?> </h3>
		 <a href="<?php the_permalink();?>"><h2 class="recent-post-title"><?php the_title();?></h2></a>
		 <p><?php the_excerpt();?></p>
	   </div>
			
		<?php endforeach; ?>
	   
	
	</div>
</div>