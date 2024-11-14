<?php
/**
 * Title: Testimonials Portraits
 * Slug: portfolio-wp/testimonials-portraits
 * Categories: portfolio-wp-testimonials
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"metadata":{"categories":["portfolio-wp-testimonials"],"patternName":"portfolio-wp/testimonials-portraits","name":"Testimonials Portraits"},"align":"full","className":"testimonials-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull testimonials-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Some Things People Say', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bg-light"} -->
<div class="wp-block-column is-vertically-aligned-center has-bg-light-background-color has-background"><!-- wp:media-text {"mediaId":510,"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-03.webp","mediaType":"image","imageFill":true} -->
<div class="wp-block-media-text is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-03.webp);background-position:50% 50%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-03.webp" alt="" class="wp-image-510 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"is-style-plain","style":{"spacing":{"margin":{"bottom":"0","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.4}},"fontSize":"medium"} -->
<p class="is-style-plain has-medium-font-size" style="margin-top:0px;margin-bottom:0;font-style:normal;font-weight:500;line-height:1.4"><?php echo esc_html__( 'PortfolioWP turned our website dreams into reality. Their theme\'s flexibility and design excellence elevated our online presence beyond expectations. Truly transformative!', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Rob Talfort', 'portfolio-wp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Creative Director', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bg-light"} -->
<div class="wp-block-column is-vertically-aligned-center has-bg-light-background-color has-background"><!-- wp:media-text {"mediaId":506,"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-02.webp","mediaType":"image","imageFill":true} -->
<div class="wp-block-media-text is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-02.webp);background-position:50% 50%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-02.webp" alt="" class="wp-image-506 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"is-style-plain","style":{"spacing":{"margin":{"bottom":"0","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.4}},"fontSize":"medium"} -->
<p class="is-style-plain has-medium-font-size" style="margin-top:0px;margin-bottom:0;font-style:normal;font-weight:500;line-height:1.4"><?php echo esc_html__( 'PortfolioWP turned our website dreams into reality. Their theme\'s flexibility and design excellence elevated our online presence beyond expectations. Truly transformative!', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Jane Cooper', 'portfolio-wp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Marketing Coordinator', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->