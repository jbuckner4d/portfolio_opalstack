<?php

if ( ! PWP_EDD::is_wpcom() ) {
	add_action( 'admin_init', 'pwp_activation' );
	add_action( 'after_switch_theme', 'pwp_redirect_on_activation' );
}

function pwp_redirect_on_activation() {
	// Set the option to redirect
	add_option('pwp_has_been_activated', true);
}
function pwp_activation() {

    if ( get_option('pwp_has_been_activated', false ) ) {
        // Delete the option to prevent subsequent redirects
        delete_option('pwp_has_been_activated');

        // Redirect to the desired page using safe redirect
        wp_safe_redirect(admin_url('admin.php?page=portfolio-wp'));
        exit;
    }
}

