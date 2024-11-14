<?php
/**
 * Title: Testimonials Featured
 * Slug: portfolio-wp/testimonials-featured
 * Categories: portfolio-wp-testimonials
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"metadata":{"name":"Testimonials Featured"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"backgroundColor":"accent-primary","textColor":"dark-gray","fontSize":"small"} -->
<p class="has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;line-height:1.3"><?php echo esc_html__( 'Featured Client', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-gigantic-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Testimonials', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium-large"} -->
<p class="has-medium-large-font-size"><?php echo esc_html__( '“As an artist and designer, finding the right platform to showcase my work has always been a challenge. That is until I discovered the ', 'portfolio-wp' ); ?><strong><?php echo esc_html__( 'PortfolioWP', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' WordPress Block Theme. This theme has been a game-changer for my online presence.”', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><em>—<?php echo esc_html__( 'Sarah Baldwin', 'portfolio-wp' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"id":1094,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-02.webp" alt="" class="wp-image-1094"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->