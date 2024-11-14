<?php
/**
 * Title: Contact Template - Free
 * Slug: portfolio-wp/full-page-contact-free
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"contact-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size"><?php echo esc_html__( 'Contact me.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"fontSize":"medium-large"} -->
<p class="has-medium-large-font-size"><?php echo esc_html__( 'Looking to grow your business through the power of great digital design?', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php echo esc_html__( 'Reach out to get the conversation started about your digital design needs.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"accent-secondary","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-secondary"}}}},"borderColor":"accent-secondary","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-secondary-color has-text-color has-link-color has-border-color has-accent-secondary-border-color wp-element-button" href="<?php echo esc_url( 'mailto:name@mywebsite.com' ); ?>" style="border-width:2px">name@mywebsite.com</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
<p class="has-text-align-right has-medium-font-size"><strong><?php echo esc_html__( 'Call Me', 'portfolio-wp' ); ?></strong><br>941-555-1234</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","className":"social-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull social-pattern has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"extra-large"} -->
<h4 class="wp-block-heading has-extra-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Follow me.', 'portfolio-wp' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><a href="#">Twitter/X</a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="#">Instagram</a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="#">Github</a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="#">LinkedIn</a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="#">Facebook</a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="#">YouTube</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->