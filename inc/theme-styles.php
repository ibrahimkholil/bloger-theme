<?php


/**
 * Enqueue scripts and styles.
 */
function bloger_scripts() {
	wp_enqueue_style( 'bloger-style', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

global $wp_scripts;
	/*===============================================
     Style Files
     =================================================*/
	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.0.3','all');
	wp_register_style( 'awesomefont',get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.7.0','all');
	wp_register_style( 'animate', get_template_directory_uri().'/css/animate.min.css', array(), '1.0','all');
	wp_register_style( 'prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css', array(), '3.1.5','all');
	wp_register_style( 'main', get_template_directory_uri().'/css/style.css', array(), '1.0','all');
	wp_register_style( 'responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0','all');
	wp_register_style( 'owl-carousel', get_template_directory_uri().'/css/slick-theme.css', array(), '1.0','all');
	wp_register_style( 'owl-theme', get_template_directory_uri().'/css/owl.theme.css', array(), '1.3.3','all');
	wp_register_style( 'slick-slider', get_template_directory_uri().'/css/slick.css', array(), '1.3.3','all');
	wp_register_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css', array(), '1.3.3','all');
	wp_register_style( 'grid-css', get_template_directory_uri().'/css/grid.css', array(), '1.0','all');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('awesomefont');
	wp_enqueue_style('animate');
	wp_enqueue_style('prettyPhoto');
	wp_enqueue_style('main');
	wp_enqueue_style('owl-carousel');
	wp_enqueue_style('owl-theme');
	wp_enqueue_style('slick-slider');
	wp_enqueue_style('slick-theme');
	wp_enqueue_style('responsive');
	wp_enqueue_style('grid-css');
	

	
	/*===============================================
       Jquery Files
   =================================================*/
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bloger-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bloger-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
	wp_enqueue_script('boostrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'3.0.3',true);
	wp_enqueue_script('prettyPhoto-js',get_template_directory_uri().'/js/jquery.prettyPhoto.js',array('jquery'),'3.1.5',true);
	wp_enqueue_script('isotope-js',get_template_directory_uri().'/js/jquery.isotope.min.js',array('jquery'),'1.5.25',true);
	wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array('jquery'),'1.0',true);
	wp_enqueue_script('wow-js',get_template_directory_uri().'/js/wow.min.js',array('jquery'),'1.0',true);
	wp_enqueue_script('owl-carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'1.0',true);
	wp_enqueue_script('slick-js',get_template_directory_uri().'/js/slick.min.js',array('jquery'),'1.6.0',true);
	wp_enqueue_script('html5shiv-js',get_template_directory_uri().'/js/html5shiv.js',array('jquery'),'1.0',true);
	wp_enqueue_script('respond-min-js',get_template_directory_uri().'/js/respond.min.js',array('jquery'),'1.0',true);
  
   
   
// Conditionally load this only for IE < 9
$wp_scripts->add_data( 'html5shiv-js', 'conditional', 'lt IE 9' );
$wp_scripts->add_data( 'respond-min-js', 'conditional', 'lt IE 9' );
}
add_action('wp_enqueue_scripts','bloger_scripts'); 