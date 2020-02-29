<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
    fw()->theme->get_options( 'blogeroptions/general-options' ),
	fw()->theme->get_options( 'blogeroptions/header-options' ),
	fw()->theme->get_options( 'blogeroptions/footer-options' ),
	fw()->theme->get_options( 'blogeroptions/search-options' ),
	fw()->theme->get_options( 'blogeroptions/post-options' ),
	fw()->theme->get_options( 'blogeroptions/taxonomy-gallery-options' ),
    fw()->theme->get_options( 'blogeroptions/archive-options' ),
	fw()->theme->get_options( 'blogeroptions/additional-options' ),

);
