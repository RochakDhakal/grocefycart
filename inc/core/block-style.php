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
			'core/navigation',
			array(
				'name'  => 'grocefycart-navigation-primary',
				'label' => __( 'Hover : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'grocefycart-navigation-secondary',
				'label' => __( 'Hover : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'grocefycart-navigation-terniary',
				'label' => __( 'Hover : Ternairy', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocefycart-search-primary',
				'label' => __( 'Hover : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocefycart-search-secondary',
				'label' => __( 'Hover : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocefycart-search-terniary',
				'label' => __( 'Hover : Terniary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'grocefycart-search-rounded',
				'label' => __( 'Hover : Rounded', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocefycart-button-primary',
				'label' => __( 'Hover : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocefycart-button-secondary',
				'label' => __( 'Hover : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocefycart-button-terniary',
				'label' => __( 'Hover : Terniary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocefycart-button-arrow',
				'label' => __( 'Button with Arrow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'grocefycart-button-up-arrow',
				'label' => __( 'Button with Up Arrow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-primary',
				'label' => __( 'Hover : Primary Underline', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-secondary',
				'label' => __( 'Hover : Secondary Underline', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-terniary',
				'label' => __( 'Hover : Terniary Underline', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocefycart-categories-primary',
				'label' => __( 'Primary : Space Between', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocefycart-categories-secondary',
				'label' => __( 'Secondary : Space Between', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'grocefycart-categories-terniary',
				'label' => __( 'Ternairy : Space Between', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-light',
				'label' => __( 'Box Shadow : Light', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-medium',
				'label' => __( 'Box Shadow : Medium', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-large',
				'label' => __( 'Box Shadow : Large', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-boxshadow-hover',
				'label' => __( 'Hover : Box Shadow', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocefycart-overflow-hidden',
				'label' => __( 'Overflow : Hidden', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-primary-background',
				'label' => __( 'Background : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-secondary-background',
				'label' => __( 'Background : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-terniary-background',
				'label' => __( 'Background : Terniary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-mixed-background',
				'label' => __( 'Background : Mixed', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-faded-background',
				'label' => __( 'Background : Faded & Round', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-animation-spin',
				'label' => __( 'Spin Animation', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-animation-pulse',
				'label' => __( 'Pulse Animation', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-hover-animation-spin',
				'label' => __( 'Hover : Spin Animation', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'grocefycart-hover-animation-pulse',
				'label' => __( 'Hover : Pulse Animation', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'grocefycart-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'grocefycart-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocefycart-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'grocefycart-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocefycart' ),
			)
		);

		// WooCommerce Blocks.
		register_block_style(
			'woocommerce/product-stock-indicator',
			array(
				'name'  => 'grocefycart-wc-custom-psi-rounded',
				'label' => __( 'Rounded Borders', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-stock-indicator',
			array(
				'name'  => 'grocefycart-wc-custom-psi-pointed',
				'label' => __( 'Pointed Border', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocefycart-wc-btn-primary',
				'label' => __( 'Hover : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocefycart-wc-btn-secondary',
				'label' => __( 'Hover : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocefycart-wc-btn-terniary',
				'label' => __( 'Hover : Terniary', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocefycart-wc-btn-faded',
				'label' => __( 'Hover : Faded', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'grocefycart-wc-btn-icon',
				'label' => __( 'Cart Icon', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocefycart-hover-zoom-in',
				'label' => __( 'Hover : Zoom In', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocefycart-hover-zoom-out',
				'label' => __( 'Hover : Zoom Out', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocefycart-sales-badge-primary',
				'label' => __( 'Sales Badge : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocefycart-sales-badge-secondary',
				'label' => __( 'Sales Badge : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'grocefycart-sales-badge-terniary',
				'label' => __( 'Sales Badge : Terniary', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocefycart-wc-hide-strikeout',
				'label' => __( 'Hide Strikeout Price', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocefycart-wc-strikeout-primary',
				'label' => __( 'Primary Strikeout Price', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocefycart-wc-strikeout-secondary',
				'label' => __( 'Secondary Strikeout Price', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocefycart-wc-strikeout-terniary',
				'label' => __( 'Terniary Strikeout Price', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-price',
			array(
				'name'  => 'grocefycart-wc-strikeout-foreground',
				'label' => __( 'Foreground Strikeout Price', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocefycart-wc-categories-primary',
				'label' => __( 'Primary Border', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocefycart-wc-categories-secondary',
				'label' => __( 'Secondary Border', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocefycart-wc-categories-terniary',
				'label' => __( 'Terniary Border', 'grocefycart' ),
			)
		);
		register_block_style(
			'woocommerce/product-categories',
			array(
				'name'  => 'grocefycart-wc-categories-border',
				'label' => __( 'Faded Border', 'grocefycart' ),
			)
		);
	}
	add_action( 'init', 'grocefycart_register_block_styles' );
}
