<?php
if ( ! class_exists( 'PWP\Core' ) && ! PWP_EDD::is_wpcom() ) {
	require get_theme_file_path() . '/inc/pwp-dashboard/need-pwp-plugin.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	return;
}
?>

<?php if ( PWP_EDD::is_wpcom() ) { // Display alternate content if WP.com ?>

    <h2 class="wp-block-heading alignwide has-pwp-huge-font-size"><?php echo esc_html__( 'PortfolioWP Setup', 'portfolio-wp' ); ?></h2>

    <p style="font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.444), 1.15rem);" class="alignwide"><?php echo esc_html__( 'Just some helpful links and services to get you up and running faster.', 'portfolio-wp' ); ?></p>
    
    <div id="pwp-setup-wpcom" class="wp-block-group alignwide is-layout-constrained wp-block-group-is-layout-constrained">

        <div class="pwp-admin-blocks-container alignwide">

            <div class="pwp-admin-block">
                <div class="pwp-admin-block-content">
                    <span class="pwp-admin-block-icon"><i class="fa-solid fa-arrow-down"></i></span>
                    <h4 class="wp-block-heading has-normal-font-size"><?php echo esc_html__( 'Demo Content', 'portfolio-wp' ); ?></h4>
                    <p><?php echo esc_html__( 'Download the demo content file. Install the content under ', 'portfolio-wp' ) . '<i>' . esc_html__( 'Tools > Import', 'portfolio-wp' ) . '</i>' . esc_html__( ' within the WordPress dashboard in order to setup your theme like the ', 'portfolio-wp' ) . '<a href="' . esc_url( 'https://portfoliowp.com/demo/' ) . '" target="_blank">' . esc_html__( 'demo', 'portfolio-wp' ) . '</a>.'; ?>
                    </p>
                </div>
                <div class="wp-block-button wp-block-button__width-100 has-small-font-size">
                    <a class="wp-block-button__link has-text-align-center wp-element-button" href="<?php echo esc_url( 'https://portfoliowp.com/wp-content/demo-content/pwp-demo-content.zip' ); ?>"><?php echo esc_html__( 'Download Demo Content', 'portfolio-wp' ); ?></a>
                </div>
            </div>

            <div class="pwp-admin-block">
                <div class="pwp-admin-block-content">
                    <span class="pwp-admin-block-icon"><i class="fa-solid fa-book"></i></span>
                    <h4 class="wp-block-heading has-normal-font-size"><?php echo esc_html__( 'Setup Instructions', 'portfolio-wp' ); ?></h4>
                    <p><?php echo esc_html__( 'Need a little help getting started? Check out the theme setup instructions on our website to stay on track. We\'ll get you up and running!', 'portfolio-wp' ); ?></p>
                </div>
                <div class="wp-block-button wp-block-button__width-100 has-small-font-size">
                    <a class="wp-block-button__link has-text-align-center wp-element-button" target="_blank" href="<?php echo esc_url( 'https://portfoliowp.com/documentation/' ); ?>"><?php echo esc_html__( 'View Setup Instructions', 'portfolio-wp' ); ?></a>
                </div>
            </div>
            
            <div class="pwp-admin-block">
                <div class="pwp-admin-block-content">
                    <span class="pwp-admin-block-icon"><i class="fa-solid fa-wrench"></i></span>
                    <h4 class="wp-block-heading has-normal-font-size"><?php echo esc_html__( 'Setup Service', 'portfolio-wp' ); ?></h4>
                    <p><?php echo esc_html__( 'Get some peace of mind and hire the professionals to setup your website as it appears in the theme demo. We\'ll even add your logo and change the colors.', 'portfolio-wp' ); ?></p>
                </div>
                <div class="wp-block-button wp-block-button__width-100 has-small-font-size">
                    <a class="wp-block-button__link has-text-align-center wp-element-button" href="<?php echo esc_url( 'https://portfoliowp.com/theme-setup/' ); ?>"><?php echo esc_html__( 'Theme Setup Service | $199', 'portfolio-wp' ); ?></a>
                </div>
            </div>

        </div>

    </div>
    
<?php } else { ?>

    <h2 class="wp-block-heading alignwide has-pwp-huge-font-size"><?php echo esc_html__( 'PortfolioWP Setup Wizard', 'portfolio-wp' ); ?></h2>

    <div id="pwp-react-importer" class="alignwide"><?php echo esc_html__( 'Loading...', 'portfolio-wp' ); ?></div>

<?php } ?>