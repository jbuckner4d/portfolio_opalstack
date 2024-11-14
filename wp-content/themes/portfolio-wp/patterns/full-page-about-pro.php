<?php
/**
 * Title: About Template - Pro
 * Slug: portfolio-wp/full-page-about-pro
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"about-pattern is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1.3","letterSpacing":"0px"}},"fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size" style="letter-spacing:0px;line-height:1.3"><?php echo esc_html__( 'Hey, ', 'portfolio-wp' ); ?><span style="font-size: 90%;">👋</span><br><?php echo esc_html__( 'I\'m ', 'portfolio-wp' ); ?><span class="highlighter"><?php echo esc_html__( 'James Jackson.', 'portfolio-wp' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-01.webp" alt="" class="wp-image-391"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"56%"} -->
<div class="wp-block-column" style="flex-basis:56%"><!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'ABOUT', 'portfolio-wp' ); ?></strong><br><?php echo esc_html__( 'As a seasoned Staff Product Designer, I bring over ten years of experience to the table, crafting innovative designs that stand at the crossroads of technology and creativity. My journey in design is driven by an unwavering passion for exploring how design principles can seamlessly integrate with cutting-edge technology to create compelling user experiences.', 'portfolio-wp' ); ?>
<br><br><?php echo esc_html__( 'Currently, my exploration has led me to dive deep into the realms of SwiftUI & 3D design, where I am constantly pushing the boundaries of what\'s possible. Additionally, my fascination with Augmented Reality (AR) technology and its myriad applications has opened up new avenues for innovation, allowing me to experiment with how AR can transform everyday interactions.', 'portfolio-wp' ); ?>
<br><br><?php echo esc_html__( 'Through my work, I aim to continue blending the art of design with the science of technology, creating memorable products that not only look beautiful but also enhance the way we interact with the world around us.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"2px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-width:2px"><?php echo esc_html__( 'Resume', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'GET IN TOUCH', 'portfolio-wp' ); ?></strong><br><a href="mailto:team@portfoliowp.com">team@portfoliowp.com</a><br>(555) 555-8575</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Education & Experience', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"small"} -->
<div class="wp-block-column has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color"><?php echo esc_html__( '2009', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'BACHELOR DEGREE', 'portfolio-wp' ); ?><br></strong><?php echo esc_html__( 'Rutgers University', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Design & Information Technology', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"small"} -->
<div class="wp-block-column has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color"><?php echo esc_html__( '2009 - 2014', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'MOBILE UI / UX LEAD', 'portfolio-wp' ); ?><br></strong><?php echo esc_html__( 'AT&T Mobile', 'portfolio-wp' ); ?><br><br><strong><?php echo esc_html__( 'CREATIVE DIRECTOR', 'portfolio-wp' ); ?><br></strong><?php echo esc_html__( 'Fusion Design', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'MOBILE DESIGN LEAD', 'portfolio-wp' ); ?></strong><br><?php echo esc_html__( 'Travelocity', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"small"} -->
<div class="wp-block-column has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color"><?php echo esc_html__( '2014 - 2023', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'STAFF INTERACTION DESIGNER', 'portfolio-wp' ); ?><br></strong><?php echo esc_html__( 'Google Android', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'UX LEAD - THE GOOGLE APP', 'portfolio-wp' ); ?><br></strong><?php echo esc_html__( 'Google iOS', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( '10+ PATENTS', 'portfolio-wp' ); ?></strong><br><?php echo esc_html__( 'Google', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|dark-gray","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--dark-gray);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-huge-font-size"><?php echo esc_html__( 'Recent work.', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"dark-gray","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"border":{"width":"2px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-dark-gray-color has-text-color has-link-color wp-element-button" style="border-width:2px"><?php echo esc_html__( 'View All Work', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"}},"className":"hidden-overflow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide hidden-overflow" style="border-radius:16px"><!-- wp:jetpack/slideshow {"align":"wide","autoplay":true,"delay":5,"ids":[894,892,890,895],"sizeSlug":"full"} -->
<div class="wp-block-jetpack-slideshow alignwide" data-autoplay="true" data-delay="5" data-effect="slide"><div class="wp-block-jetpack-slideshow_container swiper-container"><ul class="wp-block-jetpack-slideshow_swiper-wrapper swiper-wrapper"><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-894" data-id="894" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/post-02.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Google</figcaption></figure></li><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-892" data-id="892" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-08.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Apple</figcaption></figure></li><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-890" data-id="890" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-06.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Roblox</figcaption></figure></li><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-895" data-id="895" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/post-03.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Meta</figcaption></figure></li></ul><a class="wp-block-jetpack-slideshow_button-prev swiper-button-prev swiper-button-white" role="button"></a><a class="wp-block-jetpack-slideshow_button-next swiper-button-next swiper-button-white" role="button"></a><a aria-label="Pause Slideshow" class="wp-block-jetpack-slideshow_button-pause" role="button"></a><div class="wp-block-jetpack-slideshow_pagination swiper-pagination swiper-pagination-white"></div></div></div>
<!-- /wp:jetpack/slideshow --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-primary","className":"social-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull social-pattern has-accent-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"extra-large"} -->
<h4 class="wp-block-heading has-extra-large-font-size" style="font-style:normal;font-weight:600"><mark style="background-color:#FDF800" class="has-inline-color"><?php echo esc_html__( 'Follow me.', 'portfolio-wp' ); ?></mark></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":92,"className":"social-menu","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"services-pattern is-style-pwp-dark-style","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull services-pattern is-style-pwp-dark-style" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size"><?php echo esc_html__( 'Available for:', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Hello. This is what I do and what I can do for your business.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'Content Strategy', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I specialize in crafting bespoke content strategies that amplify my brand\'s voice and engage my target audience, driving meaningful interactions and conversions', 'portfolio-wp' ); ?>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'Photography', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I capture compelling images that tell your story, highlight your brand\'s essence, and visually engage your audience with every shot.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'Building Information Modeling', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I leverage Building Information Modeling (BIM) to create detailed, digital representations of physical and functional characteristics, streamlining the architecture and construction process for efficiency and precision.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'Schematic Design (SD)', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I craft schematic designs that serve as the blueprint for your vision, translating ideas into tangible, strategic plans that set the foundation for successful projects.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'UI / UX Design', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I create intuitive UI/UX designs that enhance user satisfaction by improving the usability, accessibility, and pleasure provided in the interaction.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'Javascript Development', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I specialize in JavaScript development, crafting dynamic and responsive web applications tailored to meet your unique needs.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"40%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"extra-large"} -->
<h3 class="wp-block-heading has-extra-large-font-size"><?php echo esc_html__( 'UI / UX Design', 'portfolio-wp' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:60%"><!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
<p class="has-text-align-left has-normal-font-size"><?php echo esc_html__( 'I conduct content workshops to empower teams with the strategies and skills needed to create impactful, audience-engaging content.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->