<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Bloger
 */

if ( ! function_exists( 'bloger_posted_on' ) ) {
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function bloger_posted_on() {

	
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = sprintf(
		_x( '<i class="fa fa-clock-o"></i>%s', 'post date', 'bloger' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '<i class="fa fa-user"></i>%s', 'post author', 'bloger' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline-author"> ' . $byline . '</span>';
	
	if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
		echo '<span class="comments-link"><i class="fa fa-comments-o spaceLeftRight"></i>';
		comments_popup_link( __( 'No comment', 'bloger' ), __( '1 Comment', 'bloger' ), __( '% Comments', 'bloger' ) );
		echo '</span>';
	}

}
}


/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
/**
 * Display category based on theme options 
 */
 
if ( ! function_exists( 'bloger_single_category' ) ) {

		function bloger_single_category() {
							
			if ( 'post' == get_post_type() ) {
				$categories_list = get_the_category_list( ' ' );
				if ( $categories_list ) {
					printf( '<span class="cat-links">' . __( '%1$s', 'bloger' ) . '</span>', $categories_list);
				}
			}

}
}
/***
*Category without link 
***/
function category_excerpt_link(){
foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; }
}
if ( ! function_exists( 'bloger_entry_tag_footer' ) ) {

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function bloger_entry_tag_footer() {
	
	if ( 'post' == get_post_type() ) {
		
    $posttags = get_the_tags();
    if ($posttags) {
        foreach($posttags as $tag) {
            echo '<span class="tags-links"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>'; 
			
        }
    }
	}

	edit_post_link( __( 'Edit', 'bloger' ), '<span class="edit-link">', '</span>' );
}

}
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function bloger_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'bloger_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'bloger_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so bloger_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so bloger_categorized_blog should return false.
		return false;
	}
}

	
/**
 * Flush out the transients used in bloger_categorized_blog.
 */
function bloger_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'bloger_categories' );
}
add_action( 'edit_category', 'bloger_category_transient_flusher' );
add_action( 'save_post',     'bloger_category_transient_flusher' );
