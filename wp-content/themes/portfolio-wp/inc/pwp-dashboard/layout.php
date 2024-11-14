<?php
$pwp_page = isset( $pwp_page ) ? $pwp_page : 'getting-started';
?>
<div class="edit-site pwp-dashboard" id="site-editor">
	<div class="edit-site-layout">
		<!-- <div class="edit-site-layout__header-container">
			
		</div> -->
		<div class="edit-site-layout__content">
			<div class="interface-navigable-region edit-site-layout__sidebar-region">
				<div class="edit-site-layout__sidebar">
				<div class="edit-site-site-hub edit-site-layout__hub">
				<div data-wp-c16t="true" data-wp-component="HStack" class="components-flex components-h-stack edit-site-site-hub__container">
					<div data-wp-c16t="true" data-wp-component="HStack" class="components-flex components-h-stack edit-site-site-hub__text-content">
						<div class="edit-site-site-hub__view-mode-toggle-container">
							<a href="index.php" class="components-button edit-site-layout__view-mode-toggle" aria-label="Go to the Dashboard">
								<div style="transform: scale(0.5) translateZ(0px);">
									<div class="edit-site-layout__view-mode-toggle-icon edit-site-site-icon">
										<img class="pwp-dashboard-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pwp-logo.png' ); ?>" alt="PortfolioWP Logo">
									</div>
								</div>
							</a>
						</div>
						<div class="edit-site-site-hub__site-title" style="opacity: 1;"><?php echo esc_html__( 'Portfolio WP', 'portfolio-wp' ); ?></div>
						<a href="<?php echo esc_url( 'https://portfoliowp.com/' ); ?>" target="_blank" aria-label="View site (opens in a new tab)" class="components-button edit-site-site-hub__site-view-link has-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M19.5 4.5h-7V6h4.44l-5.97 5.97 1.06 1.06L18 7.06v4.44h1.5v-7Zm-13 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3H17v3a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h3V5.5h-3Z"></path></svg>
						</a>
					</div>
				</div>
			</div>
					<div class="components-navigator-provider edit-site-sidebar__content">
						<div class="components-navigator-screen edit-site-sidebar__screen-wrapper">
							<div class="components-flex components-h-stack components-v-stack edit-site-sidebar-navigation-screen__main">
								<div class="components-flex components-h-stack edit-site-sidebar-navigation-screen__title-icon" data-wp-component="VStack">
									<a href="index.php" class="components-button edit-site-sidebar-button has-icon" aria-label="Go to the Dashboard"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z"></path></svg>
										<h1 data-wp-c16t="true" data-wp-component="Heading" class="components-truncate components-text components-heading edit-site-sidebar-navigation-screen__title"><?php echo esc_html__( 'Back To Dashboard', 'portfolio-wp' ); ?></h1>
									</a>
								</div>
								<div class="edit-site-sidebar-navigation-screen__content">
									<div class="components-item-group" role="list">
										<?php include 'nav.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="edit-site-layout__canvas-container">
				<div class="edit-site-layout__canvas">
					<div class="components-resizable-box__container edit-site-resizable-frame__inner">
						<div class="wp-site-blocks pwp-admin-content">
							<div id="bg-wrap">
								<svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
									<defs>
										<radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5"><animate attributeName="fx" dur="68s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255, 0, 255, 1)"></stop><stop offset="100%" stop-color="rgba(255, 0, 255, 0)"></stop></radialGradient>
										<radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5"><animate attributeName="fx" dur="47s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255, 255, 0, 1)"></stop><stop offset="100%" stop-color="rgba(255, 255, 0, 0)"></stop></radialGradient>
										<radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5"><animate attributeName="fx" dur="43s" values="0%;3%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0, 255, 255, 1)"></stop><stop offset="100%" stop-color="rgba(0, 255, 255, 0)"></stop></radialGradient>
										<radialGradient id="Gradient4" cx="50%" cy="50%" fx="4.56417%" fy="50%" r=".5"><animate attributeName="fx" dur="46s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0, 255, 0, 1)"></stop><stop offset="100%" stop-color="rgba(0, 255, 0, 0)"></stop></radialGradient>
										<radialGradient id="Gradient5" cx="50%" cy="50%" fx="2.65405%" fy="50%" r=".5"><animate attributeName="fx" dur="49s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(0,0,255, 1)"></stop><stop offset="100%" stop-color="rgba(0,0,255, 0)"></stop></radialGradient>
										<radialGradient id="Gradient6" cx="50%" cy="50%" fx="0.981338%" fy="50%" r=".5"><animate attributeName="fx" dur="51s" values="0%;5%;0%" repeatCount="indefinite"></animate><stop offset="0%" stop-color="rgba(255,0,0, 1)"></stop><stop offset="100%" stop-color="rgba(255,0,0, 0)"></stop></radialGradient>
									</defs>
									<rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)"><animate attributeName="x" dur="40s" values="25%;0%;25%" repeatCount="indefinite"></animate><animate attributeName="y" dur="42s" values="0%;25%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="14s" repeatCount="indefinite"></animateTransform></rect>
									<rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient2)" transform="rotate(255.072 50 50)"><animate attributeName="x" dur="46s" values="-25%;0%;-25%" repeatCount="indefinite"></animate><animate attributeName="y" dur="48s" values="0%;50%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="24s" repeatCount="indefinite"></animateTransform>
									</rect>
									<rect x="9.00483%" y="14.5733%" width="100%" height="100%" fill="url(#Gradient3)" transform="rotate(139.903 50 50)"><animate attributeName="x" dur="50s" values="0%;25%;0%" repeatCount="indefinite"></animate><animate attributeName="y" dur="24s" values="0%;25%;0%" repeatCount="indefinite"></animate><animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50" dur="18s" repeatCount="indefinite"></animateTransform>
									</rect>
								</svg>
							</div>
							<div class="site-main wp-block-group alignfull is-layout-constrained wp-block-group-is-layout-constrained">
								<div class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">
									<?php include $pwp_page . '.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>