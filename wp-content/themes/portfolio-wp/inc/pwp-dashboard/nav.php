<?php
$pwp_page = isset( $pwp_page ) ? $pwp_page : 'get-started';
$php_nav_data = pwp_get_nav_data();
foreach ( $php_nav_data as $slug => $nav_info ):
?>
<div role="listitem">
	<button
		class="components-item edit-site-sidebar-navigation-item components-navigator-button<?php echo $slug === $pwp_page ? ' is-active' : ''; ?>"
		data-wp-component="NavigatorButton"
		id="<?php echo esc_attr( $slug ); ?>"
		onclick="window.open(
			'<?php echo isset( $nav_info['external'] ) ? esc_url( $nav_info['external'] ) : esc_url( admin_url( 'admin.php?page=portfolio-wp&pwp_page=' . $slug ) ); ?>',
			'<?php echo isset( $nav_info['external'] ) ? '_blank' : '_self'; ?>'
		)"
	>
		<div class="components-flex components-h-stack" data-wp-component="HStack">
			<span class="dashicons <?php echo esc_attr( $nav_info['icon'] ); ?>"></span>
			<div class="components-flex-item components-flex-block"><?php echo esc_html( $nav_info['title'] ); ?></div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="edit-site-sidebar-navigation-item__drilldown-indicator" aria-hidden="true" focusable="false"><path d="M10.8622 8.04053L14.2805 12.0286L10.8622 16.0167L9.72327 15.0405L12.3049 12.0286L9.72327 9.01672L10.8622 8.04053Z"></path></svg>
		</div>
	</button>
</div>
<?php endforeach; ?>