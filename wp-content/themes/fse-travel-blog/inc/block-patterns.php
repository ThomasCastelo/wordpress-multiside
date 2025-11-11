<?php
/**
 * Block Patterns
 *
 * @package fse_travel_blog
 * @since 1.0
 */

function fse_travel_blog_register_block_patterns() {
	$fse_travel_blog_block_pattern_categories = array(
		'fse-travel-blog' => array( 'label' => esc_html__( 'FSE Travel Blog', 'fse-travel-blog' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-travel-blog' ) ),
	);

	$fse_travel_blog_block_pattern_categories = apply_filters( 'fse_travel_blog_fse_travel_blog_block_pattern_categories', $fse_travel_blog_block_pattern_categories );

	foreach ( $fse_travel_blog_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_travel_blog_register_block_patterns', 9 );