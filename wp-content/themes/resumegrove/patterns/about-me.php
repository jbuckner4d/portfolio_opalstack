<?php
/**
 * Title: About me
 * Slug: resumegrove/about-me
 * Categories: resumegrove
 * Keywords: about
 */
?>
<!-- wp:group {"className":"wow animate__animated animate__fadeIn","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wow animate__animated animate__fadeIn" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size"><?php echo esc_html__( 'About me', 'resumegrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php echo esc_html__( 'The Person Behind the Journey', 'resumegrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Montes nam pellentesque at sagittis pharetra aptent placerat purus. Rhoncus pellentesque mauris vestibulum elementum fringilla erat platea eleifend conubia. Aenean curae mus facilisis dignissim morbi integer arcu.', 'resumegrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":998,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100em","width":"0px","style":"none"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/about.jpg" alt="" class="wp-image-998" style="border-style:none;border-width:0px;border-radius:100em;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->