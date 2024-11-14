<?php
/**
 * Title: Portfolio Tiled Gallery
 * Slug: portfolio-wp/portfolio-tiled-gallery
 * Categories: portfolio-wp-portfolios
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","className":"portfolio-pattern is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-gigantic-font-size"><?php echo esc_html__( 'My ', 'portfolio-wp' ); ?><mark style="background-color:#FDF800" class="has-inline-color"><?php echo esc_html__( 'Portfolio.', 'portfolio-wp' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php echo esc_html__( 'Hello. This is my work. These are recent samples of the rad stuff I\'ve been working on.', 'portfolio-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:jetpack/tiled-gallery {"columnWidths":[["44.21484","55.78516"],["57.99570","42.00430"]],"roundedCorners":16} -->
<div class="wp-block-jetpack-tiled-gallery aligncenter is-style-rectangular"><div class="has-rounded-corners-16"><div class="tiled-gallery__gallery"><div class="tiled-gallery__row"><div class="tiled-gallery__col" style="flex-basis:44.21484%"><figure class="tiled-gallery__item"><img alt="" data-height="2048" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-01" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-01.webp" data-width="2048" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-01.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 1 of 7 in full-screen"/></figure><figure class="tiled-gallery__item"><img alt="" data-height="1664" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-02" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-02.webp" data-width="2912" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-02.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 2 of 7 in full-screen"/></figure></div><div class="tiled-gallery__col" style="flex-basis:55.78516%"><figure class="tiled-gallery__item"><img alt="" data-height="2400" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03.webp" data-width="1920" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-03.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 3 of 7 in full-screen"/></figure></div></div><div class="tiled-gallery__row"><div class="tiled-gallery__col" style="flex-basis:57.99570%"><figure class="tiled-gallery__item"><img alt="" data-height="2400" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-04" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-04.webp" data-width="1920" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-04.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 4 of 7 in full-screen"/></figure></div><div class="tiled-gallery__col" style="flex-basis:42.00430%"><figure class="tiled-gallery__item"><img alt="" data-height="1664" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-05" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-05.webp" data-width="2912" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-05.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 5 of 7 in full-screen"/></figure><figure class="tiled-gallery__item"><img alt="" data-height="1664" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-06" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-06.webp" data-width="2912" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-06.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 6 of 7 in full-screen"/></figure><figure class="tiled-gallery__item"><img alt="" data-height="1664" data-link="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-07" data-url="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-07.webp" data-width="2912" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portfolio-07.webp" data-amp-layout="responsive" tabindex="0" role="button" aria-label="Open image 7 of 7 in full-screen"/></figure></div></div></div></div></div>
<!-- /wp:jetpack/tiled-gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->