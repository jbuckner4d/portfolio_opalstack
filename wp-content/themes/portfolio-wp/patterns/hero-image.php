<?php
/**
 * Title: Hero Image
 * Slug: portfolio-wp/hero-image
 * Categories: portfolio-wp-hero
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"}}},"className":"hero-pattern style-dark is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-pattern style-dark is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:columns {"verticalAlignment":null,"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"36px","left":"36px"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":"960px"}} -->
<div class="wp-block-group" style="padding-right:36px;padding-left:36px"><!-- wp:heading {"style":{"typography":{"fontSize":"5.8rem","lineHeight":"1.3","letterSpacing":"0px"}}} -->
<h2 class="wp-block-heading" style="font-size:5.8rem;letter-spacing:0px;line-height:1.3"><?php echo esc_html__( 'Thinker. Tinkerer.', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Builder of ', 'portfolio-wp' ); ?><mark style="background-color:#FDF800" class="has-inline-color has-bg-dark-color"><?php echo esc_html__( 'Portfolio WP.', 'portfolio-wp' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"placeholder":"Type / to choose a block, or press space to summon the AI Copilot","style":{"typography":{"fontSize":"1.25rem"}}} -->
<p style="font-size:1.25rem"><?php echo esc_html__( 'A portfolio theme designed to highlight your talent and engage your audience. ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'Packed with expertly designed Blocks and Patterns to showcase your work in the best light.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"1.3rem"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:1.3rem"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Download For Free', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"width":"2px"},"typography":{"fontSize":"1.3rem"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:1.3rem"><a class="wp-block-button__link wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Get Pro and Get More', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:image {"id":151,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/hero-01.png" alt="" class="wp-image-151"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->