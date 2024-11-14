<?php
/**
 * Title: Portfolio Query 3-Column
 * Slug: portfolio-wp/portfolio-query-3-column
 * Categories: portfolio-wp-portfolios
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"metadata":{"name":"Portfolio Latest Project"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default" style="border-radius:6px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"1","offset":0,"postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"backgroundColor":"dark-gray","textColor":"white","fontSize":"extra-small"} -->
<p class="has-white-color has-dark-gray-background-color has-text-color has-background has-link-color has-extra-small-font-size" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;line-height:1.3">Latest Work</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-excerpt {"excerptLength":24,"fontSize":"small"} /-->

<!-- wp:read-more {"content":"View Project","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"border":{"radius":"32px","width":"2px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"dark-gray","fontSize":"medium","borderColor":"dark-gray"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:6px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html__( 'This block displays projects from the portfolio custom post type. If you\'re seeing this message, you need to add some projects to your portfolio.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Portfolio 3-Column"},"align":"full","className":"portfolio-pattern portfolio-query-pro","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern portfolio-query-pro" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"align":"wide","className":"is-style-wide","backgroundColor":"dark-gray"} -->
<hr class="wp-block-separator alignwide has-text-color has-dark-gray-color has-alpha-channel-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3,"align":"wide","fontSize":"gigantic"} -->
<h3 class="wp-block-heading alignwide has-gigantic-font-size"><?php echo esc_html__( 'Recent work.', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"><?php echo esc_html__( 'I\'m all about making cool things. Take a gander at some of my work.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"30","pages":0,"offset":"1","postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"hidden-overflow","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"},"border":{"radius":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:6px;min-height:100%;margin-top:0;margin-bottom:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"100%","style":{"border":{"radius":"6px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"className":"portfolio-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"position":{"type":""},"color":{"gradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.44) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group portfolio-content has-background" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.44) 100%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"View Work","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"24px","width":"0px","style":"none"}},"backgroundColor":"white","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Nothing to see here.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html__( 'This block displays projects from the portfolio custom post type. If you\'re seeing this message, you need to add some projects to your portfolio.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->