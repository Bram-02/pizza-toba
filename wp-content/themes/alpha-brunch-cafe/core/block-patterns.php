<?php
/**
 * Alpha Brunch Cafe: Block Patterns
 *
 * @since Alpha Brunch Cafe 1.0
 */

function alpha_brunch_cafe_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'alpha-brunch-cafe' => array( 'label' => __( 'Alpha Brunch Cafe', 'alpha-brunch-cafe' ) )
	);
	$block_pattern_categories = apply_filters( 'alpha_brunch_cafe_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'alpha_brunch_cafe_register_block_patterns', 9 );