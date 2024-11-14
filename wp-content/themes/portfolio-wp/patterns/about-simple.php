<?php
/**
 * Title: About Simple
 * Slug: portfolio-wp/about-simple
 * Categories: portfolio-wp-about
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"about-pattern is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"align":"wide","fontSize":"humongous"} -->
        <h2 class="wp-block-heading alignwide has-humongous-font-size"><span style="font-size: 90%;">👋</span></h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"9rem"}}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph -->
                <p><?php echo esc_html__( "Hello, I'm ", 'portfolio-wp' ); ?><strong><?php echo esc_html__( 'Rito Hyrule', 'portfolio-wp' ); ?></strong><?php echo esc_html__( "—a multifaceted creative director, designer, founder, and entrepreneur. For more than ten years, I spearheaded the design systems consultancy, Portfolio WP, guiding designers and creatives in establishing robust design frameworks. My current mission is to democratize design education and portfolio functionality, offering resources and opportunities to those who might not have access otherwise. This vision has led to the creation of Portfolio Review for Good, a platform dedicated to empowering aspiring designers. Dive deeper into my story.", 'portfolio-wp' ); ?><br><br><?php echo esc_html__( "This website is a harmonious blend of WordPress and React.js, brought to life through the versatility of Portfolio WP, showcasing a perfect melding of content management and modern web technologies.", 'portfolio-wp' ); ?><br><br><?php echo esc_html__( 'Black Lives Matter.', 'portfolio-wp' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"60px"} -->
                <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"border":{"width":"2px"}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-width:2px"><?php echo esc_html__( 'Download My Resume', 'portfolio-wp' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33%"} -->
            <div class="wp-block-column" style="flex-basis:33%">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"46px","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column" style="flex-basis:46px">
                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__( 'EM', 'portfolio-wp' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__( 'X', 'portfolio-wp' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__( 'IG', 'portfolio-wp' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php echo esc_html__( 'YT', 'portfolio-wp' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column">
                        <!-- wp:paragraph -->
                        <p><a href="mailto:team@portfoliowp.com"><?php echo esc_html__( 'team@portfoliowp.com', 'portfolio-wp' ); ?></a></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><a href="#"><?php echo esc_html__( '@PortfolioWP', 'portfolio-wp' ); ?></a></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><a href="#"><?php echo esc_html__( '@press75', 'portfolio-wp' ); ?></a></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><a href="#"><?php echo esc_html__( '@yourchannelhere', 'portfolio-wp' ); ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
