<?php
$installed = pwp_is_plugin_installed( 'portfolio-wp-plugin' );
$active = is_plugin_active( 'portfolio-wp-plugin' );
?>

<div id="pwp-admin-intro" class="alignwide are-vertically-aligned-bottom is-layout-flex wp-block-columns-is-layout-flex">
	<h1 class="wp-block-heading has-black-color has-huge-font-size"><?php echo esc_html__( 'Whoa!', 'portfolio-wp' ); ?> 🖐️ <br><?php echo esc_html__( 'Hold up. You need the PortfolioWP plugin.', 'portfolio-wp' ); ?></h1>
	<p style="font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.444), 1.15rem);"><?php echo esc_html__( 'Just click the little button below to install and activate the plugin so we can get this party started.', 'portfolio-wp' ); ?></p>
	<form method="post" action="">
		<input type="hidden" name="pwp_install_plugin" value="1">
		<input type="hidden" name="pwp_plugins_to_install[]" value="portfolio-wp-plugin" checked="checked" />
		<?php
		wp_nonce_field( 'pwp_install_plugin_nonce', 'pwp_install_plugin_nonce_field' );
		$button_text = $installed && ! $active ? __( 'Activate PortfolioWP Plugin', 'portfolio-wp' ) : __( 'Install & Activate PortfolioWP Plugin', 'portfolio-wp' );
		submit_button( $button_text );
		?>
	</form>
</div>