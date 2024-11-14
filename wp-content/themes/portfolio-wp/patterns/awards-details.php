<?php
/**
 * Title: Awards Details
 * Slug: portfolio-wp/awards-details
 * Categories: portfolio-wp-awards
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if( ! PWP_EDD::is_valid() ){ return; }
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"award-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull award-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"20%"} -->
        <div class="wp-block-column" style="flex-basis:20%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"border":{"width":"1px","radius":"96px"},"layout":{"selfStretch":"fixed","flexSize":"48px"},"dimensions":{"minHeight":"48px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-width:1px;border-radius:96px;min-height:48px">
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"2.5"}}} -->
                    <p class="has-text-align-center" style="line-height:2.5"><?php echo esc_html__( '1', 'portfolio-wp' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><strong><?php echo esc_html__( 'Who I am', 'portfolio-wp' ); ?></strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"80%"} -->
        <div class="wp-block-column" style="flex-basis:80%">
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php echo esc_html__( "I'm the creator behind Portfolio WP, dedicated to empowering creatives with a WordPress theme that blends simplicity with sophistication. My journey in web design and content strategy inspired me to craft a tool that elevates the online presence of artists and professionals alike. Portfolio WP is my commitment to innovation and user-friendliness, designed to help creatives effortlessly share their unique stories and connect with their audience.", 'portfolio-wp' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|light-gray","width":"1px"}}}} -->
    <div class="wp-block-columns alignwide" style="border-top-color:var(--wp--preset--color--light-gray);border-top-width:1px;margin-top:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--70)">
        <!-- wp:column {"width":"20%"} -->
        <div class="wp-block-column" style="flex-basis:20%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"border":{"width":"1px","radius":"96px"},"layout":{"selfStretch":"fixed","flexSize":"48px"},"dimensions":{"minHeight":"48px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-width:1px;border-radius:96px;min-height:48px">
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"2.5"}}} -->
                    <p class="has-text-align-center" style="line-height:2.5"><?php echo esc_html__( '2', 'portfolio-wp' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size"><strong><?php echo esc_html__( "What I've Won", 'portfolio-wp' ); ?></strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"80%"} -->
        <div class="wp-block-column" style="flex-basis:80%">
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><strong><?php echo esc_html__( 'Web Excellence Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Best in WordPress Theme Design', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Creative Innovators Trophy', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Outstanding User Interface Design', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Digital Horizon Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Best Use of Technology in Web Design', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Visionary Design Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Exceptional Creativity and Innovation', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Global Design Icon Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Influential Design Contribution to the Digital', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'User Experience Champions Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Excellence in UX Design and UI', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Futuristic Design Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Pioneering New Frontiers in Web Aesthetics', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Design Harmony Prize', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Masterful Integration of Form and Function', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Inspiring Creatives Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Inspiring Design and Creativity in the Digital Space', 'portfolio-wp' ); ?><br><strong><?php echo esc_html__( 'Seamless Interaction Award', 'portfolio-wp' ); ?></strong><?php echo esc_html__( ' - Superior Interactive Experience', 'portfolio-wp' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
