<?php
/**
 * Title: About Experience
 * Slug: portfolio-wp/about-experience
 * Categories: portfolio-wp-about
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if( ! PWP_EDD::is_valid() ){ return; }
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"className":"about-pattern is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"8rem"}}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":""} -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"lineHeight":"1.3","letterSpacing":"0px"}}} -->
                <h3 class="wp-block-heading alignwide" style="letter-spacing:0px;line-height:1.3"><?php echo esc_html__( "Over the last decade, I've honed my skills in designing interfaces and user experiences for tech and product companies, with a deep-rooted love for simplicity. I tackle challenges by zooming out for a holistic view and then diving into the details.", 'portfolio-wp' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-medium-gray-color"><?php echo esc_html__( "Outside of work, my creativity extends to interior design and tech, and I'm always on the lookout for new inspirations, often found in the vast world of content I consume.", 'portfolio-wp' ); ?></mark></h3>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"60px"} -->
                <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:paragraph -->
                <p><strong><?php echo esc_html__( 'GET IN TOUCH', 'portfolio-wp' ); ?></strong><br><a href="mailto:team@portfoliowp.com">team@portfoliowp.com</a><br>(555) 555-8575</p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"80px"} -->
                <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%">
                <!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                <figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/portrait-01.webp" alt="" class="wp-image-391"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:heading {"align":"wide"} -->
        <h2 class="wp-block-heading alignwide"><?php echo esc_html__( 'Education & Experience', 'portfolio-wp' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"bottom":"32px"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}}}} -->
        <div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:32px">
            <!-- wp:column {"verticalAlignment":"center","width":"80px","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:80px">
                <!-- wp:image {"id":417,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/netflix.png" alt="" class="wp-image-417"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:60%">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><span style="text-decoration: underline;"><?php echo esc_html__( 'Netflix', 'portfolio-wp' ); ?></span></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size">
                <!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
                <p class="has-text-align-right has-medium-font-size"><?php echo esc_html__( '2022 - Current', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"bottom":"32px"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}}}} -->
        <div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:32px">
            <!-- wp:column {"verticalAlignment":"center","width":"80px","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:80px">
                <!-- wp:image {"id":416,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|dark-grayscale"}}} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/apple.png" alt="" class="wp-image-416"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:60%">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><span style="text-decoration: underline;"><?php echo esc_html__( 'Apple TV', 'portfolio-wp' ); ?></span> - <?php echo esc_html__( 'Designer, UI / UX', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size">
                <!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
                <p class="has-text-align-right has-medium-font-size"><?php echo esc_html__( '2018 - 2022', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"bottom":"32px"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}}}} -->
        <div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:32px">
            <!-- wp:column {"verticalAlignment":"center","width":"80px","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:80px">
                <!-- wp:image {"id":418,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/nvidia.png" alt="" class="wp-image-418"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:60%">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><span style="text-decoration: underline;"><?php echo esc_html__( 'Nvidia', 'portfolio-wp' ); ?></span> - <?php echo esc_html__( 'Design and Creative Director', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size">
                <!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
                <p class="has-text-align-right has-medium-font-size"><?php echo esc_html__( '2014 - 2018', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"bottom":"32px"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}}}} -->
        <div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:32px">
            <!-- wp:column {"verticalAlignment":"center","width":"80px","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:80px">
                <!-- wp:image {"id":420,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/airbnb.png" alt="" class="wp-image-420"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:60%">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><span style="text-decoration: underline;"><?php echo esc_html__( 'Airbnb', 'portfolio-wp' ); ?></span> - <?php echo esc_html__( 'Junior Design Lead', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size">
                <!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
                <p class="has-text-align-right has-medium-font-size"><?php echo esc_html__( '2012 - 2014', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"bottom":"32px"}},"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}}}} -->
        <div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:32px">
            <!-- wp:column {"verticalAlignment":"center","width":"80px","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:80px">
                <!-- wp:image {"id":419,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/uber.png" alt="" class="wp-image-419"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:60%">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><span style="text-decoration: underline;"><?php echo esc_html__( 'Uber', 'portfolio-wp' ); ?></span> - <?php echo esc_html__( 'Design Intern', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","fontSize":"small"} -->
            <div class="wp-block-column is-vertically-aligned-center has-small-font-size">
                <!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
                <p class="has-text-align-right has-medium-font-size"><?php echo esc_html__( '2010 - 2012', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
