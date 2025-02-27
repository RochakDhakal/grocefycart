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
				'name'  => 'grocefycart-button-primary',
				'label' => __( 'Hover : Primary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'grocefycart-button-secondary',
				'label' => __( 'Hover : Secondary', 'grocefycart' ),
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'grocefycart-button-terniary',
				'label' => __( 'Hover : Terniary', 'grocefycart' ),
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
	}
	add_action( 'init', 'grocefycart_register_block_styles' );
}
