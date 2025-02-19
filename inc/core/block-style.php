<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package grocefycart
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function grocefycart_register_block_styles() {
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocefycart-boxshadow',
				'label' => __( 'Box Shadow', 'grocefycart' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'grocefycart-boxshadow',
				'label' => __( 'Box Shadow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocefycart-boxshadow-medium',
				'label' => __( 'Box Shadow Medium', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'grocefycart-boxshadow-large',
				'label' => __( 'Box Shadow Large', 'grocefycart' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow',
				'label' => __( 'Box Shadow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-medium',
				'label' => __( 'Box Shadow Medium', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-large',
				'label' => __( 'Box Shadow Larger', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-group-content-vertical-center',
				'label' => __( 'Content: Vertcal Center ', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-boxshadow',
				'label' => __( 'Box Shadow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-boxshadow-medium',
				'label' => __( 'Box Shadow Medium', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-boxshadow-larger',
				'label' => __( 'Box Shadow Large', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-image-pulse',
				'label' => __( 'Iamge Pulse Effect', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-boxshadow-hover',
				'label' => __( 'Box Shadow on Hover', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-image-hover-pulse',
				'label' => __( 'Hover Pulse Effect', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-image-hover-rotate',
				'label' => __( 'Hover Rotate Effect', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'grocefycart-boxshadow-hover',
				'label' => __( 'Box Shadow on Hover', 'grocefycart' ),
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'grocefycart-boxshadow-hover',
				'label' => __( 'Box Shadow on Hover', 'grocefycart' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-hover',
				'label' => __( 'Box Shadow on Hover', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-group-gradient-border',
				'label' => __( 'Gradient Border', 'grocefycart' ),
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-round',
				'label' => __( 'Primary Background Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-faded-round',
				'label' => __( 'Faded Background Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-primary-color',
				'label' => __( 'Hover: Primary color', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-secondary-color',
				'label' => __( 'Hover: Secondary color', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-primary-bgcolor',
				'label' => __( 'Primary Hover', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-secondary-bgcolor',
				'label' => __( 'Secondary Hover', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-primary-arrow-style',
				'label' => __( 'Primary Arrow Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-dark-arrow-style',
				'label' => __( 'Dark Arrow Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-white-arrow-style',
				'label' => __( 'White Arrow Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-simple-arrow',
				'label' => __( 'Simple Arrow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-gradient-border-style',
				'label' => __( 'Gradient Border Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-gradient-background-style',
				'label' => __( 'Hover for Primary Gradient', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-gradient-background-style-secondary',
				'label' => __( 'Hover for Secodnary Gradient', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/buttons',
			array(
				'name'  => 'buttons-hover-translate-effect',
				'label' => __( 'Translate on Hover', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/buttons',
			array(
				'name'  => 'buttons-hover-zoom-effect',
				'label' => __( 'Zoom on Hover', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-primary-color',
				'label' => __( 'Hover: Primary Color', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-secondary-color',
				'label' => __( 'Hover: Secondary Color', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-primary-fill',
				'label' => __( 'Hover: Primary Fill', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-secondary-fill',
				'label' => __( 'Hover: secondary Fill', 'grocefycart' ),
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'  => 'list-style-no-bullet',
				'label' => __( 'List Style: Hide bullet', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'hide-bullet-list-style-primary-check',
				'label' => __( 'Circle Check Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'hide-bullet-list-style-primary-shade-check',
				'label' => __( 'Circle Check Primary Shade', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'hide-bullet-list-style-white-check',
				'label' => __( 'Circle Check White', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/gallery',
			array(
				'name'  => 'enable-grayscale-mode-on-image',
				'label' => __( 'Enable Grayscale Mode on Image', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'social-icon-border',
				'label' => __( 'Border Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/page-list',
			array(
				'name'  => 'grocefycart-page-list-bullet-hide-style',
				'label' => __( 'Hide Bullet Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocefycart-categories-bullet-hide-style',
				'label' => __( 'Hide Bullet Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/details',
			array(
				'name'  => 'grocefycart-details-with-plus-icon',
				'label' => __( 'Plus Icon', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocefycart-cover-grocefycart-overlay-content',
				'label' => __( 'Content Overlay', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocefycart-cover-grocefycart-zoom-effect',
				'label' => __( 'Zoom Effect', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocefycart-cover-grocefycart-translate-effect',
				'label' => __( 'Translate Effect', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocefycart-cover-grocefycart-parallax-effect',
				'label' => __( 'Parallax Background', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'grocefycart-heading-gradient-effect',
				'label' => __( 'Gradient Effect', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/quote',
			array(
				'name'  => 'grocefycart-quote-primary-border',
				'label' => __( 'Primary Border', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/quote',
			array(
				'name'  => 'grocefycart-quote-primary-style',
				'label' => __( 'Primary Style', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/quote',
			array(
				'name'  => 'grocefycart-quote-secondary-border',
				'label' => __( 'Secondary Border', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/quote',
			array(
				'name'  => 'grocefycart-quote-secondary-style',
				'label' => __( 'Secondary Style', 'grocefycart' ),
			)
		);
	}
	add_action( 'init', 'grocefycart_register_block_styles' );
}
