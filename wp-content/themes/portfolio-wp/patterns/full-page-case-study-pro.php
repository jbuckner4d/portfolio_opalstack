<?php
/**
 * Title: Case Study Template - Pro
 * Slug: portfolio-wp/full-page-case-study-pro
 * Categories: portfolio-wp-pages
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if ( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"metadata":{"categories":["portfolio-wp-case-studies"],"patternName":"portfolio-wp/case-study-one","name":"Case Study One"},"align":"full","className":"case-study-pattern is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull case-study-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03.webp","id":193,"dimRatio":50,"overlayColor":"accent-primary","isUserOverlayColor":true,"minHeight":520,"contentPosition":"center left","isDark":false,"align":"wide","style":{"border":{"radius":"16px"},"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-center-left" style="border-radius:16px;min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-accent-primary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-193" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"left","fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-text-align-left has-gigantic-font-size"><?php echo esc_html__( 'Bringing delight', 'portfolio-wp' ); ?><br><?php echo esc_html__( 'to Google', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"dark-gray","className":"is-style-outline","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-dark-gray-color has-text-color has-link-color wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Launch Website', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

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

<!-- wp:group {"metadata":{"name":"Case Study Slideshow","categories":["portfolio-wp-case-studies"],"patternName":"portfolio-wp/case-study-slideshow"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default" style="border-radius:6px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.6%"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size"><?php echo esc_html__( 'The nitty gritty.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"2px"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Launch Website', 'portfolio-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:8px"><!-- wp:jetpack/slideshow {"autoplay":true,"delay":4,"ids":[894,892,890],"sizeSlug":"large"} -->
<div class="wp-block-jetpack-slideshow aligncenter" data-autoplay="true" data-delay="4" data-effect="slide"><div class="wp-block-jetpack-slideshow_container swiper-container"><ul class="wp-block-jetpack-slideshow_swiper-wrapper swiper-wrapper"><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-894" data-id="894" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/post-02.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Google</figcaption></figure></li><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-892" data-id="892" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-08.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Apple</figcaption></figure></li><li class="wp-block-jetpack-slideshow_slide swiper-slide"><figure><img alt="" class="wp-block-jetpack-slideshow_image wp-image-890" data-id="890" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-06.webp"/><figcaption class="wp-block-jetpack-slideshow_caption gallery-caption">Roblox</figcaption></figure></li></ul><a class="wp-block-jetpack-slideshow_button-prev swiper-button-prev swiper-button-white" role="button"></a><a class="wp-block-jetpack-slideshow_button-next swiper-button-next swiper-button-white" role="button"></a><a aria-label="Pause Slideshow" class="wp-block-jetpack-slideshow_button-pause" role="button"></a><div class="wp-block-jetpack-slideshow_pagination swiper-pagination swiper-pagination-white"></div></div></div>
<!-- /wp:jetpack/slideshow --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|60"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Google Doodles', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html__( 'I led the design and development for the new Google Doodles.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"backgroundColor":"dark-gray","textColor":"accent-primary","fontSize":"extra-small"} -->
<p class="has-accent-primary-color has-dark-gray-background-color has-text-color has-background has-link-color has-extra-small-font-size" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;line-height:1.3"><?php echo esc_html__( 'Web Design', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"backgroundColor":"dark-gray","textColor":"accent-primary","fontSize":"extra-small"} -->
<p class="has-accent-primary-color has-dark-gray-background-color has-text-color has-background has-link-color has-extra-small-font-size" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;line-height:1.3"><?php echo esc_html__( 'UX/UI', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"backgroundColor":"dark-gray","textColor":"accent-primary","fontSize":"extra-small"} -->
<p class="has-accent-primary-color has-dark-gray-background-color has-text-color has-background has-link-color has-extra-small-font-size" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;line-height:1.3"><?php echo esc_html__( 'Front-end Dev', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"layout":{"columnSpan":1,"rowSpan":1}}} -->
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus. Morbi leo risus, porta ac consectetur ac rutrum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"layout":{"columnSpan":1,"rowSpan":1}}} -->
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"layout":{"columnSpan":1,"rowSpan":1}}} -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"More Projects"},"align":"full","className":"is-style-pwp-dark-style","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-pwp-dark-style" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}},"typography":{"fontSize":"4rem"}},"textColor":"accent-primary"} -->
<h2 class="wp-block-heading alignwide has-accent-primary-color has-text-color has-link-color" style="font-size:4rem"><?php echo esc_html__( 'But wait! There\'s more.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Can\'t get enough of my work? You\'re in luck, here\'s some more cool stuff to check out.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":"1","offset":0,"postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"hidden-overflow","style":{"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group hidden-overflow" style="border-radius:8px"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"style":{"typography":{"letterSpacing":"0px","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"accent-primary","fontSize":"normal"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-primary"}}}},"textColor":"accent-primary"} -->
<h2 class="wp-block-heading has-accent-primary-color has-text-color has-link-color"><?php echo esc_html__( 'Nothing to see here.', 'portfolio-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color"><?php echo esc_html__( 'This block displays projects from the portfolio custom post type. If you\'re seeing this message, you need to add some projects to your portfolio or change the options for the Query Block.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","backgroundColor":"medium-gray"} -->
<hr class="wp-block-separator alignwide has-text-color has-medium-gray-color has-alpha-channel-opacity has-medium-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->