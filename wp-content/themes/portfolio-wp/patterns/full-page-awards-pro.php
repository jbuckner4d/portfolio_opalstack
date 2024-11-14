<?php
/**
 * Title: Awards Template
 * Slug: portfolio-wp/full-page-awards-pro
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"metadata":{"categories":["portfolio-wp-hero"],"patternName":"portfolio-wp/hero-basic","name":"Hero Basic"},"align":"full","className":"hero-pattern is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:80%"><!-- wp:heading {"style":{"typography":{"fontSize":"5.8rem","lineHeight":"1.1","letterSpacing":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:5.8rem;letter-spacing:0px;line-height:1.1"><?php echo esc_html__( 'People like what I do.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Type / to choose a block, or press space to summon the AI Copilot","style":{"typography":{"fontSize":"1.25rem"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40);font-size:1.25rem"><?php echo esc_html__( 'But don\'t worry, I won\'t let it go to my head. I love creating creative things, ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'and over the years I\'ve picked up a few awards for my creations.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"><!-- wp:image {"id":1150,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/award-01.webp" alt="" class="wp-image-1150"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["portfolio-wp-awards"],"patternName":"portfolio-wp/awards-number-grid","name":"Awards Number Grid"},"align":"full","className":"award-pattern is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull award-pattern is-style-default has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size"><?php echo esc_html__( 'Selected awards.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">036</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"accent-primary","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>OpenPurpose</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2023</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://openpurpose.com' ); ?>">https://openpurpose.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A product design studio for founders.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">035</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"accent-primary","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Rocco</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2023</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://roccofridge.com' ); ?>">https://roccofridge.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A super smart fridge appliance.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">034</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"accent-primary","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Cruise</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2023</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://getcruise.com' ); ?>">https://getcruise.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">A<?php echo esc_html__( ' driverless car company designed for accessibility.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">033</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"accent-secondary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-accent-secondary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Founder', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Press75</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2023</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://press75.com' ); ?>">https://press75.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A WordPress theme company.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">032</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"accent-secondary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-accent-secondary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Founder', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Press75</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2023</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://press75.com' ); ?>">https://press75.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A WordPress theme and plugin company.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">031</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"pale-cyan-blue","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-pale-cyan-blue-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Developer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Reviewz</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2022</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">https://reviewz.io</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A product discovery platform with recommendations provided by AI.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">030</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"pale-cyan-blue","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-pale-cyan-blue-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Developer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"light-green-cyan","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-light-green-cyan-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Advisor', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Captial</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2022</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://capital.xyz' ); ?>">https://capital.xyz</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A financial services platform built for founders.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">029</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"accent-primary","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Daylight</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2022 - Present</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://daylight.xyz' ); ?>">https://daylight.xyz</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A driverless car company designed for accessibility.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">028</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"accent-primary","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"pale-cyan-blue","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-pale-cyan-blue-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Developer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Wand</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '2022 - Present', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://wand.app' ); ?>">https://wand.app</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'An AI-assisted mobile-first tool for creative communities.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">027</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"backgroundColor":"accent-primary","textColor":"dark-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-gray-color has-accent-primary-background-color has-text-color has-background has-link-color" style="border-radius:12px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><strong>Customuse</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">2022</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( 'https://customuse.com' ); ?>">https://customuse.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"light-gray"} -->
<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'A web-based tool for creating 3D game assets.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["portfolio-wp-testimonials"],"patternName":"portfolio-wp/testimonials-two-tone","name":"Testimonials Two Tone"},"align":"full","className":"testimonials-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull testimonials-pattern has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-gigantic-font-size"><?php echo esc_html__( 'Nice things people say.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"border":{"radius":"16px"}}} -->
<div class="wp-block-columns alignwide" style="border-radius:16px"><!-- wp:column {"verticalAlignment":"top","style":{"shadow":"var:preset|shadow|soft","spacing":{"blockGap":"0"}},"backgroundColor":"white"} -->
<div class="wp-block-column is-vertically-aligned-top has-white-background-color has-background" style="box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0","top":"0px","left":"0"},"padding":{"right":"0","left":"0"}}}} -->
<p style="margin-top:0px;margin-bottom:0;margin-left:0;padding-right:0;padding-left:0">“Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, tellus ac cursus nisi erat porttitor ligula, eget lacinia odio sem nec elit.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"accent-primary"} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile has-accent-primary-background-color has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/profile-02.webp" alt="" class="wp-image-391"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo esc_html__( 'Kim Matsushige', 'portfolio-wp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php echo esc_html__( 'Marketing Director', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"shadow":"var:preset|shadow|soft","spacing":{"blockGap":"0"}},"backgroundColor":"white"} -->
<div class="wp-block-column is-vertically-aligned-top has-white-background-color has-background" style="box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0","top":"0px"},"padding":{"right":"0","left":"0"}}}} -->
<p style="margin-top:0px;margin-bottom:0;padding-right:0;padding-left:0">“Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"accent-primary"} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile has-accent-primary-background-color has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/profile-01.webp" alt="" class="wp-image-391"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo esc_html__( 'John Jackson', 'portfolio-wp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php echo esc_html__( 'Operations Manager', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"shadow":"var:preset|shadow|soft","spacing":{"blockGap":"0"}},"backgroundColor":"white"} -->
<div class="wp-block-column is-vertically-aligned-top has-white-background-color has-background" style="box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0","top":"0px"},"padding":{"right":"0","left":"0"}}}} -->
<p style="margin-top:0px;margin-bottom:0;padding-right:0;padding-left:0">“Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum amet risus.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"accent-primary"} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile has-accent-primary-background-color has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/profile-04.webp" alt="" class="wp-image-391"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo esc_html__( 'Adam Gabrenya', 'portfolio-wp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php echo esc_html__( 'Web Developer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"categories":["portfolio-wp-misc"],"patternName":"portfolio-wp/misc-marquee","name":"Scroll Marquee"},"align":"full","className":"marquee","style":{"spacing":{"padding":{"right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull marquee has-black-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:0px;padding-left:0px"><!-- wp:group {"className":"marquee__group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marquee__group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-primary","fontSize":"extra-large"} -->
<h4 class="wp-block-heading has-text-align-center has-accent-primary-color has-text-color has-link-color has-extra-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Some awards from big names.', 'portfolio-wp' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["portfolio-wp-awards"],"patternName":"portfolio-wp/awards-bar","name":"Awards Bar"},"align":"full","className":"award-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull award-pattern has-accent-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-secondary"}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"accent-secondary"} -->
<p class="has-accent-secondary-color has-text-color has-link-color"><strong><?php echo esc_html__( 'Recognition', 'portfolio-wp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":631,"width":"120px","sizeSlug":"medium","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/sony.png" alt="" class="wp-image-631" style="width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":621,"width":"120px","sizeSlug":"medium","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/discord.png" alt="" class="wp-image-621" style="width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":630,"width":"120px","sizeSlug":"medium","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/roblox.png" alt="" class="wp-image-630" style="width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":627,"width":"120px","sizeSlug":"medium","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/microsoft.png" alt="" class="wp-image-627" style="width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":618,"width":"120px","sizeSlug":"medium","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/airbnb.png" alt="" class="wp-image-618" style="width:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->