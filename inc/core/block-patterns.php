<?php

/**
 * grocefycart: Block Patterns
 *
 * @since grocefycart 1.0.0
 */

/**
 * Registers pattern categories for grocefycart
 *
 * @since grocefycart 1.0.0
 *
 * @return void
 */
function grocefycart_register_pattern_category() {
	$block_pattern_categories = array(
		'grocefycart'             => array( 'label' => __( 'Additional Sections', 'grocefycart' ) ),
		'grocefycart-testimoials' => array( 'label' => __( 'Testimonials', 'grocefycart' ) ),
		'grocefycart-portfolio'   => array( 'label' => __( 'Gallery & Portfolios', 'grocefycart' ) ),
		'grocefycart-hero'        => array( 'label' => __( 'Hero', 'grocefycart' ) ),
		'grocefycart-pricing'     => array( 'label' => __( 'Pricing', 'grocefycart' ) ),
		'grocefycart-team'        => array( 'label' => __( 'Team', 'grocefycart' ) ),
		'grocefycart-accordion'   => array( 'label' => __( 'FAQ & Accordion', 'grocefycart' ) ),
		'grocefycart-contacts'    => array( 'label' => __( 'Contact & Newsletter Forms', 'grocefycart' ) ),
		'grocefycart-homes'       => array( 'label' => __( 'Homepage Templates', 'grocefycart' ) ),
		'grocefycart-pages'       => array( 'label' => __( 'Page Templates', 'grocefycart' ) ),
	);

	$block_pattern_categories = apply_filters( 'grocefycart_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action( 'init', 'grocefycart_register_pattern_category', 9 );
