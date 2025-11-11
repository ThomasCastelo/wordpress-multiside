<?php
/**
 * Block Styles
 *
 * @package fse_travel_blog
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_travel_blog_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-travel-blog-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-travel-blog' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-travel-blog-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-travel-blog' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-travel-blog-button',
				'label'        => esc_html__( 'Plain', 'fse-travel-blog' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-travel-blog-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-travel-blog' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-travel-blog-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-travel-blog' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-travel-blog-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-travel-blog' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-travel-blog-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-travel-blog' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-travel-blog-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-travel-blog' ),
			)
		);
	}
	add_action( 'init', 'fse_travel_blog_register_block_styles' );
}
