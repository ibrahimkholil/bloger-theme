<?php
/**
 * Bloger functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bloger
 */

if ( ! function_exists( 'bloger_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bloger_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bloger, use a find and replace
	 * to change 'bloger' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bloger', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-header');
	

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bloger' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	
	//Custom logo
	add_theme_support('custom-logo', array(
	'size' => 'custom-logo'
	));

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bloger_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bloger_setup' );
// Add custom logo thumbnail size
function add_custom_sizes() {
	
	add_theme_support( 'post-thumbnails');
	add_image_size('custom-logo', 160, 90,true);
	add_image_size('filter-img', 935, 449,true);
	add_image_size('filter-slider', 350, 180,true);
    add_image_size( 'portfolio-thumb', 243, 163, true );
    add_image_size( 'portfolio-image', 1074, 725, true );
    add_image_size( 'available-homes', 500, 279, true );
    add_image_size( 'idea-thumb', 146, 141, true );
}
add_action('after_setup_theme','add_custom_sizes');

/**
*
*/

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bloger_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bloger_content_width', 640 );
}
add_action( 'after_setup_theme', 'bloger_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bloger_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bloger' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bloger' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s sidebar-section">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="sidbar-head"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
}
add_action( 'widgets_init', 'bloger_widgets_init' );



/**
* Replace [...] by Read more link.
* Return string
*/
function bloger_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'bloger_excerpt_more', 21 );

function bloger_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= ' <a class="readmore-btn" href="'. get_permalink($post->ID) . '"> Read More</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'bloger_excerpt_more_link', 21 );
/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';
/**
* Tgm Plugin activation 
*/

require_once get_template_directory() . '/inc/bloger-tgm-plugin-activation.php';

/**
* Theme Styles
*/
require_once get_template_directory() . '/inc/theme-styles.php';
/**
*Theme menus
*/
require_once get_template_directory() . '/inc/theme-nav.php';

/* Post pagination
*/

require_once get_template_directory() . '/inc/pagination.php';



/**
* unyson path 
*
*/
add_filter('fw_framework_customizations_dir_rel_path','bloger_customerisation_dir');
add_filter('fw_ext_backups_demo_dirs','bloger_demo_dir'); 
			/**
		 * Filter customisation directory
		 *@return dir path
		 *@since 1.5
		 */
		 
		function bloger_customerisation_dir() {
			return '/framework';
		}

		/**
		 * Filter demo install directory
		 *@return dir path
		 *@since 1.5
		 */
		 
		function bloger_demo_dir($dirs) {
			$dirs[get_template_directory() .'/framework/demo-content'] = get_template_directory_uri() .'/framework/demo-content';
			return $dirs;
		}
/**
* 
* Theme option menu text replace
*
**/


function dw_store_custom_extensions_menu( $data ) {
 add_theme_page(
  __( 'Theme Options', 'fw' ),
  __( 'Theme Options', 'fw' ),
  $data['capability'],
  $data['slug'],
  $data['content_callback'],
  get_template_directory_uri() . '/assets/img/dw-favicon_360.png',
  '60'
 );
 add_theme_page(
  $data['slug'],
  __( 'Add-ons', 'fw' ),
  __( 'Add-ons', 'fw' ),
  $data['capability'],
  $data['slug'],
  $data['content_callback']
 );
}
add_action( 'fw_backend_add_custom_extensions_menu', 'dw_store_custom_extensions_menu',10 );

function dw_store_custom_theme_settings_menu( $data ) {
 add_theme_page(
  'fw-extensions',
  __( 'Theme Settings', 'fw' ),
  __( 'Theme Settings', 'fw' ),
  $data['capability'],
  $data['slug'],
  $data['content_callback']
 );
}
add_action( 'fw_backend_add_custom_settings_menu', 'dw_store_custom_theme_settings_menu' );