<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Pamela_Greene_Art
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function Pamela_Greene_Art_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'pamelagreeneart-columns-overlap',
				'label' => esc_html__( 'Overlap', 'pamelagreeneart' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'pamelagreeneart-border',
				'label' => esc_html__( 'Borders', 'pamelagreeneart' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'pamelagreeneart-border',
				'label' => esc_html__( 'Borders', 'pamelagreeneart' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'pamelagreeneart-border',
				'label' => esc_html__( 'Borders', 'pamelagreeneart' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'pamelagreeneart-image-frame',
				'label' => esc_html__( 'Frame', 'pamelagreeneart' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'pamelagreeneart-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'pamelagreeneart' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'pamelagreeneart-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'pamelagreeneart' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'pamelagreeneart-border',
				'label' => esc_html__( 'Borders', 'pamelagreeneart' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'pamelagreeneart-separator-thick',
				'label' => esc_html__( 'Thick', 'pamelagreeneart' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'pamelagreeneart-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'pamelagreeneart' ),
			)
		);
	}
	add_action( 'init', 'Pamela_Greene_Art_register_block_styles' );
}
