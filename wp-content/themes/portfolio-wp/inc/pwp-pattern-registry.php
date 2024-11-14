<?php

/**
 * Unregister Block Patterns.
 */
if ( ! PWP_EDD::is_valid() ) {

	add_action( 'init', 'pwp_remove_patterns' );

	function pwp_remove_patterns() {
		$pwp_block_patterns = array(
			'about-experience',
			'about-multi-column',
			'awards-details',
			'awards-number-grid',
			'case-study-one',
			'case-study-slideshow',
			'contact-form',
			'contact-reach',
			'header-vertical',
			'header-big',
			'header-centered',
			'hero-image',
			'misc-marquee',
			'misc-pricing-tables',
			'newsletter-columns',
			'portfolio-filtered-posts',
			'portfolio-project-list',
			'portfolio-query-3-column',
			'social-bar-icons',
			'social-icon-group',
			'testimonials-grid',
			'testimonials-portraits',
			'testimonials-two-tone',
			'testimonials-featured',
			'full-page-awards-pro',
			'full-page-services-pro',
			'full-page-testimonials-pro',
			'full-page-about-pro',
			'full-page-contact-pro',
			'full-page-home-pro',
			'full-page-portfolio-pro',
			'full-page-case-study-pro',
		);

		foreach ( $pwp_block_patterns as $pwp_block_pattern ) {
			$pattern_name = 'portfolio-wp/' . $pwp_block_pattern;
			if ( WP_Block_Patterns_Registry::get_instance()->is_registered( $pattern_name ) ) {
				unregister_block_pattern( $pattern_name );
			}
		}
	}
}
