<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Disable standard Unyson shortcodes
 *
 * @param array $to_disabled array of shortcodes
 * @return array $to_disabled return array of shortcodes names to be disabled
 */
 
 
if ( ! function_exists( 'bloger_disable_shortcodes' ) ) :

	function bloger_disable_shortcodes( $to_disabled ) {
		$to_disabled[] = 'calendar';
		$to_disabled[] = 'notification';
		$to_disabled[] = 'map';
		$to_disabled[] = 'video';
		$to_disabled[] = 'team_member';
		$to_disabled[] = 'contact_form';
		$to_disabled[] = 'table';
		return $to_disabled;
	}
endif;

add_filter( 'fw_ext_shortcodes_disable_shortcodes','bloger_disable_shortcodes', 10, 2 );
	
/**
 * Allow HTML use in data validation wp_kses()
 *
 * @since 1.0
 * @return array HTML allow
 */
if ( ! function_exists( 'bloger_allow_html' ) ) {
	function bloger_allow_html() {
		$return = array(
			'a' => array(
				'class' => array(),
				'href'  => array(),
				'rel'   => array(),
				'title' => array(),
			),
			'abbr' => array(
				'title' => array(),
			),
			'b' => array(),
			'blockquote' => array(
				'cite'  => array(),
			),
			'cite' => array(
				'title' => array(),
			),
			'code' => array(),
			'del' => array(
				'datetime' => array(),
				'title' => array(),
			),
			'dd' => array(),
			'div' => array(
				'class' => array(),
				'title' => array(),
				'style' => array(),
			),
			'dl' => array(),
			'dt' => array(),
			'em' => array(),
			'h1' => array(),
			'h2' => array(),
			'h3' => array(),
			'h4' => array(),
			'h5' => array(),
			'h6' => array(),
			'i' => array(),
			'img' => array(
				'alt'    => array(),
				'class'  => array(),
				'height' => array(),
				'src'    => array(),
				'width'  => array(),
			),
			'li' => array(
				'class' => array(),
			),
			'ol' => array(
				'class' => array(),
			),
			'p' => array(
				'class' => array(),
			),
			'q' => array(
				'cite' => array(),
				'title' => array(),
			),
			'span' => array(
				'class' => array(),
				'title' => array(),
				'style' => array(),
			),
			'strike' => array(),
			'strong' => array(),
			'ul' => array(
				'class' => array(),
			),
		);

		return $return;
	}
}	