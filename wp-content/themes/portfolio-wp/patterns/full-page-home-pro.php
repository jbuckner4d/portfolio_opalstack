<?php
/**
 * Title: Home Template - Pro
 * Slug: portfolio-wp/full-page-home-pro
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","className":"about-pattern is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:html -->
<div id="bg-wrap" style="top: -50%">
      <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
      <defs>
      <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5"><animate attributeName="fx" dur="68s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255, 0, 255, 1)"></stop><stop offset="100%" stop-color="rgba(255, 0, 255, 0)"></stop></radialGradient>
      <radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5"><animate attributeName="fx" dur="47s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255, 255, 0, 1)"></stop><stop offset="100%" stop-color="rgba(255, 255, 0, 0)"></stop></radialGradient>
      <radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5"><animate attributeName="fx" dur="43s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0, 255, 255, 1)"></stop><stop offset="100%" stop-color="rgba(0, 255, 255, 0)"></stop></radialGradient>
      <radialGradient id="Gradient4" cx="50%" cy="50%" fx="4.56417%" fy="50%" r=".5"><animate attributeName="fx" dur="46s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0, 255, 0, 1)"></stop><stop offset="100%" stop-color="rgba(0, 255, 0, 0)"></stop></radialGradient>
      <radialGradient id="Gradient5" cx="50%" cy="50%" fx="2.65405%" fy="50%" r=".5"><animate attributeName="fx" dur="49s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0,0,255, 1)"></stop><stop offset="100%" stop-color="rgba(0,0,255, 0)"></stop></radialGradient>
      <radialGradient id="Gradient6" cx="50%" cy="50%" fx="0.981338%" fy="50%" r=".5"><animate attributeName="fx" dur="51s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255,0,0, 1)"></stop><stop offset="100%" stop-color="rgba(255,0,0, 0)"></stop></radialGradient>
      </defs>
      <rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)"><animate attributeName="x" dur="40s" values="25%;0%;25%" repeatCount="indefinite"></animate><animate attributeName="y" dur="42s" values="0%;25%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="14s" repeatCount="indefinite"></animateTransform></rect>
      <rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient2)" transform="rotate(255.072 50 50)"><animate attributeName="x" dur="46s" values="-25%;0%;-25%" repeatCount="indefinite"></animate><animate attributeName="y" dur="48s" values="0%;50%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="24s" repeatCount="indefinite"></animateTransform>
      </rect>
      <rect x="9.00483%" y="14.5733%" width="100%" height="100%" fill="url(#Gradient3)" transform="rotate(139.903 50 50)"><animate attributeName="x" dur="50s" values="0%;25%;0%" repeatCount="indefinite"></animate><animate attributeName="y" dur="24s" values="0%;25%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50" dur="18s" repeatCount="indefinite"></animateTransform>
      </rect>
      </svg>
    </div>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
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
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"width":"2px"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Get In Touch', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"portfolio-pattern is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern is-style-default has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"accent-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-primary-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":6,"className":"highlighter","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"dark-gray","fontSize":"normal"} -->
<h6 class="wp-block-heading has-text-align-center highlighter has-dark-gray-color has-text-color has-link-color has-normal-font-size" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500"><?php echo esc_html__( 'An Area For Your Best Work', 'portfolio-wp' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size"><?php echo esc_html__( 'A few samples of my work, ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'photography, designs, and artwork.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium-large"} -->
<p class="has-text-align-center has-medium-large-font-size"><?php echo esc_html__( 'Crafting culture-aware interactions with a crisp eye for ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'engaging artistic, brand and websites.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pwp/portfolio-block {"editMode":false,"position":"center left","textalignment":"left","postcategory":["Animation","Copywriting","Design","Development","Film","Illustration","Photography","Strategy","UX Design"],"posttype":"jetpack-portfolio","posttaxonomy":"jetpack-portfolio-type","portstyle":"rounded","portlayout":"position-below-image","portheadingsize":"18px","portexcerpt":false,"portpagination":false,"filternav":true,"portcolumns":4,"maxposts":"8","porttitlecolor":"#0D0D0D","porttextcolor":"#5A5A5A","buttoncolor":"#0D0D0D","buttonbg":"#FDF800","porthoveropacity":0,"align":"wide"} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"width":"2px"}},"fontSize":"medium","borderColor":"dark-gray"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-border-color has-dark-gray-border-color wp-element-button" style="border-width:2px"><?php echo esc_html__( 'View Full Portfolio', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"services-pattern","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull services-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
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

<!-- wp:group {"align":"full","className":"portfolio-pattern portfolio-list hidden-overflow","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern portfolio-list hidden-overflow has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","fontSize":"humongous"} -->
<h2 class="wp-block-heading alignwide has-humongous-font-size"><?php echo esc_html__( 'Projects.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'These are recent samples of the rad projects I\'ve been working on.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":"8","pages":0,"offset":0,"postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"taxQuery":{"jetpack-portfolio-type":[]}},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"align":"full","style":{"typography":{"lineHeight":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-featured-image {"className":"hidden"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"categories"} -->
<div class="wp-block-column is-vertically-aligned-center categories" style="flex-basis:25%"><!-- wp:post-terms {"term":"jetpack-portfolio-type","separator":"","style":{"typography":{"lineHeight":1.6},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray","fontSize":"normal"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"tags"} -->
<div class="wp-block-column is-vertically-aligned-center tags" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"jetpack-portfolio-tag","separator":"","style":{"typography":{"lineHeight":"3.2","textTransform":"uppercase"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"\u003cimg class=\u0022wp-image-319\u0022 style=\u0022width: 36px;\u0022 src=\u0022<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.png\u0022 alt=\u0022\u0022\u003e"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:query-no-results -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'No Results', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Try creating posts or changing the options for the Query Loop block.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"case-study-pattern is-style-pwp-dark-style","style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull case-study-pattern is-style-pwp-dark-style" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","fontSize":"humongous"} -->
<h2 class="wp-block-heading alignwide has-humongous-font-size"><?php echo esc_html__( 'Case Study.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03.webp","id":193,"dimRatio":40,"overlayColor":"bg-dark","isUserOverlayColor":true,"minHeight":520,"contentPosition":"center left","align":"wide","style":{"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-center-left" style="border-radius:16px;min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-bg-dark-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-193" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"48px","left":"48px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:48px;padding-left:48px"><!-- wp:heading {"textAlign":"left","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-left has-huge-font-size"><?php echo esc_html__( 'Bringing delight', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'to Google', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"right","level":5} -->
<h5 class="wp-block-heading has-text-align-right"><?php echo esc_html__( 'Background', 'portfolio-wp' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Project', 'portfolio-wp' ); ?></strong><br><?php echo esc_html__( 'Google Doodles', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Role', 'portfolio-wp' ); ?></strong><br><?php echo esc_html__( 'UX / UI Designer', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Year', 'portfolio-wp' ); ?></strong><br>2018 - 2022</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'In collaboration with the creative minds behind Google Doodles, our goal was to enrich the Google Search landing page with engaging and interactive experiences for users. From whimsical games like Solitaire and Pac-Man to cultural celebrations for Ramadan, we aimed to bring joy and engagement directly to users\' fingertips. My role involved working intimately with the doodle team to develop a design framework that seamlessly integrated these experiences into the Google search results page, focusing on intuitive game layouts and controls for an enhanced user interaction.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":18,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-01.webp" alt="" class="wp-image-18" style="border-radius:16px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo esc_html__( 'Creating Interactive Joy ', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'with Google Doodles.', 'portfolio-wp' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Leveraging a blend of art and technology, we aimed to craft doodles that were not just visually appealing but also interactive. From celebrating historical figures to marking significant global events, each doodle was a gateway to a richer, more engaging user experience.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'As a creative partner with the Google Doodles team, I embarked on a journey to infuse the Google Search landing page with moments of delight and engagement. Our mission was to transcend traditional search experiences, making each visit to Google a chance to learn, play, and celebrate.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":188,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-04.webp" alt="" class="wp-image-188" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":187,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-02.webp" alt="" class="wp-image-187" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":186,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-04.webp" alt="" class="wp-image-186" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":200,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-02.webp" alt="" class="wp-image-200" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":198,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-04.webp" alt="" class="wp-image-198" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":196,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-02.webp" alt="" class="wp-image-196" style="border-radius:8px"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"right","level":5} -->
<h5 class="wp-block-heading has-text-align-right"><?php echo esc_html__( 'A New Dimension of Engagement', 'portfolio-wp' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Our collaborative efforts led to a significant increase in user interaction with Google Doodles. By turning everyday searches into opportunities for play and education, we contributed to making the Google Search landing page a source of unexpected joy and discovery for millions worldwide.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This project was a testament to the power of collaborative innovation in creating experiences that resonate with users across the globe. It reinforced my belief in the importance of design that not only looks good but also engages, educates, and inspires.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"contact-pattern","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1"}},"fontSize":"humongous"} -->
<h2 class="wp-block-heading has-text-align-left has-humongous-font-size" style="line-height:1"><?php echo esc_html__( 'Contact.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php echo esc_html__( 'Are you ready to create unconventional content that supercharges your business and brand image?', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php echo esc_html__( 'Fill out this form for a chance to win a free content consultation.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php echo esc_html__( 'If you would rather just send an email, you can reach us at ', 'portfolio-wp' ); ?><a href="<?php echo esc_url( 'mailto:name@mywebsite.com' ); ?>">name@mywebsite.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:jetpack/contact-form {"subject":"[Portfolio WP.] Contact Patterns"} -->
<div class="wp-block-jetpack-contact-form"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","borderRadius":8,"borderWidth":0,"fieldBackgroundColor":"#F0F0F0","borderColor":"#ffffff"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","borderRadius":8,"borderWidth":0,"fieldBackgroundColor":"#F0F0F0","borderColor":"#ffffff"} /-->

<!-- wp:jetpack/field-textarea {"label":"Message","requiredText":"(required)","borderRadius":8,"borderWidth":0,"fieldBackgroundColor":"#F0F0F0","borderColor":"#ffffff"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Contact Us","textColor":"dark-gray","backgroundColor":"accent-primary","width":"50%","lock":{"remove":true},"className":"is-style-fill"} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"logo-pattern is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull logo-pattern is-style-default has-accent-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","fontSize":"humongous"} -->
<h2 class="wp-block-heading alignwide has-humongous-font-size"><?php echo esc_html__( 'Clients.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column {"style":{"border":{"width":"1px"}},"borderColor":"dark-gray"} -->
<div class="wp-block-column has-border-color has-dark-gray-border-color" style="border-width:1px"><!-- wp:image {"id":631,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/sony.png" alt="" class="wp-image-631"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{"color":"var:preset|color|dark-gray","width":"1px"},"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"left":[]}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"><!-- wp:image {"id":620,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/bethesda.png" alt="" class="wp-image-620"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{"color":"var:preset|color|dark-gray","width":"1px"},"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"left":[]}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"><!-- wp:image {"id":625,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/lyft.png" alt="" class="wp-image-625"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{"color":"var:preset|color|dark-gray","width":"1px"},"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"left":[]}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"><!-- wp:image {"id":628,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/netflix.png" alt="" class="wp-image-628"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"border":{"top":{"width":"1px","color":"var:preset|color|dark-gray"},"right":{"width":"1px","color":"var:preset|color|dark-gray"},"bottom":{"width":"1px","color":"var:preset|color|dark-gray"},"left":{"width":"1px"}}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px;border-left-width:1px"><!-- wp:image {"id":630,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/roblox.png" alt="" class="wp-image-630"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{"color":"var:preset|color|dark-gray","width":"1px"},"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"left":[]}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"><!-- wp:image {"id":617,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/activision.png" alt="" class="wp-image-617"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{"color":"var:preset|color|dark-gray","width":"1px"},"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px;border-left-style:none;border-left-width:0px"><!-- wp:image {"id":626,"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"0px","style":"none"},"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/meta.png" alt="" class="wp-image-626" style="border-style:none;border-width:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"},"right":{"color":"var:preset|color|dark-gray","width":"1px"},"bottom":{"color":"var:preset|color|dark-gray","width":"1px"},"left":[]}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-gray);border-right-width:1px;border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:1px"><!-- wp:image {"id":627,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/microsoft.png" alt="" class="wp-image-627"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->