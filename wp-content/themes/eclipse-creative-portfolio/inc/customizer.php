<?php 

/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage eclipse-creative-portfolio
 * @since eclipse-creative-portfolio1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function eclipse_creative_portfolio_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Eclipse_Creative_Portfolio_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Eclipse Creative Portfolio Pro', 'eclipse-creative-portfolio' ),
		'button_text'      => __( 'Upgrade Pro', 'eclipse-creative-portfolio' ),
		'url'              => esc_url( eclipse_creative_portfolio_BUY_NOW ),
		'priority'         => 0,
	)));
}

add_action( 'customize_register', 'eclipse_creative_portfolio_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function eclipse_creative_portfolio_custom_control_scripts() {
	wp_enqueue_script( 'eclipse_creative_portfolio-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'eclipse_creative_portfolio_custom_control_scripts' );
?>