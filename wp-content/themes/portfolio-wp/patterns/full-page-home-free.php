<?php
/**
 * Title: Home Template - Free
 * Slug: portfolio-wp/full-page-home-free
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"about-pattern is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"medium-large"} -->
<p class="has-text-align-center has-medium-large-font-size"><?php echo esc_html__( 'Hello, my name is Inigo Montoya. A designer based in NYC, ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'looking for rad projects and new opportunities.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","fontSize":"humongous"} -->
<h2 class="wp-block-heading has-text-align-center has-humongous-font-size"><?php echo esc_html__( 'I can help you stand out ', 'portfolio-wp' ); ?><span style="text-decoration: underline;"><?php echo esc_html__( 'with an awesome website.', 'portfolio-wp' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This website is a harmonious blend of WordPress and React.js, brought to life through the versatility of Portfolio WP, showcasing a perfect melding of content management and modern web technologies.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"2px"}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Get In Touch', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","className":"portfolio-pattern portfolio-staggered","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern portfolio-staggered has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-gigantic-font-size"><?php echo esc_html__( 'Selected ', 'portfolio-wp' ); ?><mark style="background-color:#FDF800" class="has-inline-color"><?php echo esc_html__( 'Works', 'portfolio-wp' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"200","lineHeight":"1.3"}},"fontSize":"extra-large"} -->
<p class="has-extra-large-font-size" style="font-style:normal;font-weight:200;line-height:1.3"><?php echo esc_html__( 'This is only a fragment of the stuff made. ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'What set me apart remains confidential.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"16px"}},"className":"portfolio-content hidden-overflow","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide portfolio-content hidden-overflow" style="border-radius:16px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"width":"","height":""} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"className":"content-overlay","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide content-overlay"><!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"large"} /-->

<!-- wp:post-terms {"term":"jetpack-portfolio-tag","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"className":"tags"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'No Results', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Try creating posts or changing the options for the Query Loop block.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"2px"}},"borderColor":"dark-gray","className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-border-color has-dark-gray-border-color wp-element-button" style="border-width:2px"><?php echo esc_html__( 'View All Work', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"services-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull services-pattern has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","fontSize":"humongous"} -->
<h2 class="wp-block-heading alignwide has-humongous-font-size"><?php echo esc_html__( 'Capabilities.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"10rem"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"fontFamily":"helvetica-now-variable"} -->
<h6 class="wp-block-heading has-helvetica-now-variable-font-family">01</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
<h3 class="wp-block-heading has-dark-gray-color has-text-color has-link-color"><?php echo esc_html__( 'Customizable Design', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"}}} -->
<p style="line-height:1.65"><?php echo esc_html__( 'Tailor every aspect of your portfolio to match your unique style. You have the freedom to personalize layouts, color schemes, and typography, ensuring that your website reflects your individual brand and artistic vision.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"fontFamily":"helvetica-now-variable"} -->
<h6 class="wp-block-heading has-helvetica-now-variable-font-family">02</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
<h3 class="wp-block-heading has-dark-gray-color has-text-color has-link-color"><?php echo esc_html__( 'Tailored Design Blocks & Patterns', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"}}} -->
<p style="line-height:1.65"><?php echo esc_html__( 'Unlock your creative potential with our diverse range of custom Blocks and Patterns, designed specifically for creatives. Easily add, modify, and arrange elements to bring your unique vision to life.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"fontFamily":"helvetica-now-variable"} -->
<h6 class="wp-block-heading has-helvetica-now-variable-font-family">03</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
<h3 class="wp-block-heading has-dark-gray-color has-text-color has-link-color"><?php echo esc_html__( 'Versatile Media Support', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"}}} -->
<p style="line-height:1.65"><?php echo esc_html__( 'Showcase your work in stunning detail. Portfolio WP effortlessly handles images, videos, and interactive content, perfect for artists, designers, and multimedia creatives.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"10rem"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"fontFamily":"helvetica-now-variable"} -->
<h6 class="wp-block-heading has-helvetica-now-variable-font-family">04</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
<h3 class="wp-block-heading has-dark-gray-color has-text-color has-link-color"><?php echo esc_html__( 'Responsive and Mobile-Optimized', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"}}} -->
<p style="line-height:1.65"><?php echo esc_html__( 'In today\'s mobile-first world, having a responsive site is crucial. Portfolio WP ensures that your portfolio looks stunning all-around, providing an optimal viewing experience for your audience, regardless of the screen size.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"fontFamily":"helvetica-now-variable"} -->
<h6 class="wp-block-heading has-helvetica-now-variable-font-family">05</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
<h3 class="wp-block-heading has-dark-gray-color has-text-color has-link-color"><?php echo esc_html__( 'User-Friendly Interface', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"}}} -->
<p style="line-height:1.65"><?php echo esc_html__( 'Navigate the WordPress dashboard of your website with ease. Even without technical expertise, managing and updating your portfolio is a breeze with Portfolio WP.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"fontFamily":"helvetica-now-variable"} -->
<h6 class="wp-block-heading has-helvetica-now-variable-font-family">06</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} -->
<h3 class="wp-block-heading has-dark-gray-color has-text-color has-link-color"><?php echo esc_html__( 'Regular Updates + Support', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.65"}}} -->
<p style="line-height:1.65"><?php echo esc_html__( 'Stay ahead with continuous updates that keep your site running smoothly with the latest WordPress versions, complemented by reliable support for any queries or assistance.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"contact-pattern","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"bg-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-pattern has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1"}},"fontSize":"humongous"} -->
<h2 class="wp-block-heading has-text-align-left has-humongous-font-size" style="line-height:1"><?php echo esc_html__( 'Contact.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html__( 'Are you ready to create unconventional content that supercharges your business and brand image?', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>1234 4th St<br>Unit 321<br>Minneapolis, MN 55404</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><strong><?php echo esc_html__( 'Phone:', 'portfolio-wp' ); ?></strong> 941-555-1234<br><strong><?php echo esc_html__( 'Email:', 'portfolio-wp' ); ?></strong> <a href="<?php echo esc_url( 'mailto:name@mywebsite.com' ); ?>">name@mywebsite.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1268,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"},"shadow":"var:preset|shadow|soft"}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/map.webp" alt="" class="wp-image-1268" style="border-radius:8px;box-shadow:var(--wp--preset--shadow--soft)"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-primary","className":"logo-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull logo-pattern has-accent-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size"><?php echo esc_html__( 'Selected Clients.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":636,"sizeSlug":"large","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{},"left":{}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/zoom.png" alt="" class="wp-image-636" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><strong>Zoom</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"dark-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-dark-gray-color has-alpha-channel-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":619,"sizeSlug":"large","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{},"left":{}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/apple.png" alt="" class="wp-image-619" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><strong>Apple</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"dark-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-dark-gray-color has-alpha-channel-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":634,"sizeSlug":"large","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{},"left":{}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/twitch.png" alt="" class="wp-image-634" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><strong>Twitch</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"dark-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-dark-gray-color has-alpha-channel-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":633,"sizeSlug":"large","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{},"left":{}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/stripe.png" alt="" class="wp-image-633" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><strong>Stripe</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"dark-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-dark-gray-color has-alpha-channel-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":632,"sizeSlug":"large","linkDestination":"none","style":{"border":{"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{},"left":{}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/spotify.png" alt="" class="wp-image-632" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><strong>Spotify</strong></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"dark-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-dark-gray-color has-alpha-channel-opacity has-dark-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->