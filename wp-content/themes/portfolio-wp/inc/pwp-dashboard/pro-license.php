<?php

if ( ! class_exists( 'PWP\Core' ) ) {
	require get_template_directory() . '/inc/pwp-dashboard/need-pwp-plugin.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	return;
}

if ( function_exists( 'edd_pwp_license_page' ) ) {
	edd_pwp_license_page();
}