<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Bloger
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses bloger_header_style()
 */
function bloger_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'bloger_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1200,
		'height'                 => 500,
		'flex-height'            => true,
		'wp-head-callback'       => 'bloger_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'bloger_custom_header_setup' );

if ( ! function_exists( 'bloger_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see bloger_custom_header_setup().
 */
function bloger_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: HEADER_TEXTCOLOR.
	 */
	 
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}
	// if ( HEADER_TEXTCOLOR === $header_text_color ) {
		// return;
	// }

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ('blank' === display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;

/**
Header background image and background color
****/
if ( ! function_exists( 'header_bg' ) ) :
 function header_bg(){
	 global $bloger_options;
			 
			// Background color
			echo 'background color: '      . $bloger_options['header-background']['background-color'];
			 
			// Background image.
			echo 'background image: '      . $bloger_options['header-background']['background-image'];
			 
			// Background image options
			echo 'background repeat: '     . $bloger_options['header-background']['background-repeat'];
			echo 'background position: '   . $bloger_options['header-background']['background-position'];
			echo 'background size: '       . $bloger_options['header-background']['background-size'];
			echo 'background attachment: ' . $bloger_options['header-background']['background-attachment'];
			 
			// Media values
			echo 'image height: '          . $bloger_options['header-background']['media']['height'];
			echo 'image width: '           . $bloger_options['header-background']['media']['width'];
			echo 'image thumbnail: '       . $bloger_options['header-background']['media']['thumbnail'];

 }
 endif;