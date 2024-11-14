<?php
/**
 * Title: Contact Template - Pro
 * Slug: portfolio-wp/full-page-contact-pro
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"contact-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:html -->
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

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"><!-- wp:image {"id":945,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%","width":"12px"}},"borderColor":"accent-primary"} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-01.webp" alt="" class="has-border-color has-accent-primary-border-color wp-image-945" style="border-width:12px;border-radius:50%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:heading {"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-gigantic-font-size"><?php echo esc_html__( 'Contact', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium-large"} -->
<p class="has-medium-large-font-size"><?php echo esc_html__( 'Let\'s get the conversation started about your digital design needs.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This website is a harmonious blend of WordPress and React.js, brought to life through the versatility of PortfolioWP, showcasing a perfect melding of content management and modern web technologies.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-right" style="margin-right:var(--wp--preset--spacing--50)"><strong>941-555-7861</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">name@mywebsite.com</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","className":"social-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull social-pattern has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"huge"} -->
<h4 class="wp-block-heading has-huge-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Follow me.', 'portfolio-wp' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":92,"className":"social-menu","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"className":"contact-pattern is-style-pwp-dark-style","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-pattern is-style-pwp-dark-style" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1"}},"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-text-align-left has-gigantic-font-size" style="line-height:1"><?php echo esc_html__( 'Work', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'with me.', 'portfolio-wp' ); ?></h2>
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

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"520px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:jetpack/contact-form {"subject":"[Portfolio WP.] Contact Patterns"} -->
<div class="wp-block-jetpack-contact-form"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","borderRadius":8,"fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","borderRadius":8,"fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/field-textarea {"label":"Message","requiredText":"(required)","borderRadius":8,"fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Contact Us","textColor":"dark-gray","backgroundColor":"accent-primary","width":"50%","lock":{"remove":true},"className":"is-style-outline"} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-primary","className":"award-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull award-pattern has-accent-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
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