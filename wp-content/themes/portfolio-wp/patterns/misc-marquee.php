<?php
/**
 * Title: Scroll Marquee
 * Slug: portfolio-wp/misc-marquee
 * Categories: portfolio-wp-misc
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"tagName":"section","metadata":{"categories":["portfolio-wp-misc"],"patternName":"portfolio-wp/misc-marquee","name":"Scroll Marquee"},"align":"full","className":"marquee","style":{"spacing":{"padding":{"right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull marquee has-black-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:0px;padding-left:0px"><!-- wp:group {"className":"marquee__group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marquee__group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}}},"textColor":"accent-primary","fontSize":"extra-large"} -->
<h4 class="wp-block-heading has-text-align-center has-accent-primary-color has-text-color has-link-color has-extra-large-font-size"><?php echo esc_html__( 'Creative solutions.', 'portfolio-wp' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->