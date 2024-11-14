<?php

// Add an admin menu item called "Portfolio WP" to the WordPress admin menu at the top.
add_action('admin_menu', 'portfolio_wp_admin_menu');
function portfolio_wp_admin_menu() {
    add_menu_page(
        'Portfolio WP', 
        'Portfolio WP', 
        'manage_options', 
        'portfolio-wp', 
        'portfolio_wp_admin_page', 
        'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzg2OV8xNDgxNDgpIj4KPHBhdGggZD0iTTkuNTQ3ODQgNi4xODY4M0g3LjEwMjI5VjkuNDAyMUg5LjU0Nzg0QzEwLjEwOCA5LjQwMjEgMTAuNTM2MyA5LjI2NTg5IDEwLjgzMjggOC45ODk4OUMxMS4xMjk0IDguNzE3NDcgMTEuMjc5NSA4LjMxOTU5IDExLjI3OTUgNy43OTk4NEMxMS4yNzk1IDcuMjgwMDkgMTEuMTI5NCA2Ljg4MjIyIDEwLjgzMjggNi42MDI2M0MxMC41MzYzIDYuMzIzMDQgMTAuMTA0MyA2LjE4NjgzIDkuNTQ3ODQgNi4xODY4M1oiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xNi40NTYyIDBIMy41NDAxOEMxLjU4MTU1IDAgMCAxLjU0ODQ5IDAgMy40NjYxOVYxNS42MjExQzAgMTcuNTM4OCAxLjU4MTU1IDE5LjA4NzMgMy41NDAxOCAxOS4wODczSDE2LjQ1NjJDMTguNDE0OCAxOS4wODczIDE5Ljk5NjMgMTcuNTM4OCAxOS45OTYzIDE1LjYyMTFWMy40NjYxOUMxOS45OTYzIDEuNTQ4NDkgMTguNDE0OCAwIDE2LjQ1NjIgMFpNMTIuMjY4IDEwLjE0NDFDMTEuNjM4MyAxMC43MjQ3IDEwLjc1OTcgMTEuMDE1MSA5LjYzMjA3IDExLjAxNTFINy4xMDIzMlYxNC40Nzc3SDUuMTgzOTZWNC41NzAySDkuNjMyMDdDMTAuNzU5NyA0LjU3MDIgMTEuNjM4MyA0Ljg2MDU1IDEyLjI2OCA1LjQ0MTIzQzEyLjg5NzcgNi4wMjE5MiAxMy4yMTI1IDYuODA2OTIgMTMuMjEyNSA3Ljc5OTgyQzEzLjIxMjUgOC43OTI3MiAxMi44OTc3IDkuNTYzMzggMTIuMjY4IDEwLjE0NDFaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMTIuMTYxOSAxNC41MjA3VjExLjk5MzdIMTQuODEyNFYxNC41MjA3SDEyLjE2MTlaIiBmaWxsPSIjRjdFQzIzIi8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0iY2xpcDBfODY5XzE0ODE0OCI+CjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIxOS4wOTA5IiBmaWxsPSJ3aGl0ZSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=', 
        0
    );
}

function portfolio_wp_admin_classes( $classes ) {
	global $pagenow;

	if ( 'admin.php' === $pagenow && isset($_GET['page']) && 'portfolio-wp' === $_GET['page'] ) {
        $classes .= ' is-fullscreen-mode site-editor-php block-editor-page';
    }

	return $classes;
}
add_filter( 'admin_body_class', 'portfolio_wp_admin_classes' );

// Import styles from the theme.json file
function get_theme_json_styles_css( $container_class ) {
    if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
        $theme_json = WP_Theme_JSON_Resolver::get_merged_data()->get_raw_data();
        $theme_json = new WP_Theme_JSON( $theme_json, 'theme' );
        $styles = $theme_json->get_stylesheet();

        // Separate the CSS variables and other styles
        $css_variables = '';
        $scoped_styles = '';

        preg_match_all('/([^{]+){([^}]+)}/', $styles, $matches, PREG_SET_ORDER);
        foreach ( $matches as $match ) {
            $selector = trim( $match[1] );
            $rules = trim( $match[2] );
            
            if ( $selector === ':root' ) {
                $css_variables .= "$selector { $rules }";
            } else {
                // Handle body separately
                if ( $selector === 'body' ) {
                    $scoped_styles .= ".$container_class { $rules }";
                } else {
                    $scoped_styles .= ".$container_class $selector { $rules }";
                }
            }
        }

        return $css_variables . $scoped_styles;
    }

    return '';
}

// Enqueue custom styles for the Portfolio WP admin page
function portfolio_wp_admin_styles() {
    global $pagenow;

    // Check if on the specific admin page
    if ( 'admin.php' === $pagenow && isset($_GET['page']) && $_GET['page'] === 'portfolio-wp' ) {

        // Enqueue your custom style
        wp_enqueue_style( 'portfolio-wp-dashboard-style', get_template_directory_uri() . '/assets/css/pwp-dashboard.css', array(), '1.0.0' );
		wp_enqueue_style( 'portfolio-wp-font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '6.5.1' );
		wp_enqueue_style( 'wp-edit-site' );
		wp_enqueue_style( 'dashicons' );

		wp_enqueue_media();

		$container_class = 'pwp-admin-content';
		$custom_css = get_theme_json_styles_css( $container_class );

        if ( ! empty( $custom_css ) ) {
            wp_register_style( 'custom-admin-styles', false );
            wp_enqueue_style( 'custom-admin-styles' );
            wp_add_inline_style( 'custom-admin-styles', $custom_css );
        }
    }
}
add_action( 'admin_enqueue_scripts', 'portfolio_wp_admin_styles' );

function pwp_register_settings() {
    register_setting('pwp_settings_group', 'pwp_color_scheme');
    register_setting('pwp_settings_group', 'pwp_custom_logo');
    register_setting('pwp_settings_group', 'pwp_site_icon');
}
add_action( 'admin_init', 'pwp_register_settings' );

function pwp_sanitize_settings($input) {
    $input['pwp_color_scheme'] = sanitize_text_field($input['pwp_color_scheme']);
    $input['pwp_custom_logo'] = esc_url_raw($input['pwp_custom_logo']);
    $input['pwp_site_icon'] = esc_url_raw($input['pwp_site_icon']);
    return $input;
}
add_filter('pre_update_option_pwp_settings_group', 'pwp_sanitize_settings');

function pwp_sort_nav_data($a, $b) {
	return ($a['order'] < $b['order']) ? -1 : (($a['order'] > $b['order']) ? 1 : 0);
}

function pwp_get_nav_data() {
    $nav_data = array(
        'getting-started' => array(
            'title' => 'Getting Started',
            'icon' => 'dashicons-star-filled',
			'order' => 10,
		),
        'theme-setup' => array(
            'title' => 'Theme Setup',
            'icon' => 'dashicons-admin-tools',
			'order' => 20,
		),
        'site-design' => array(
            'title' => 'Site Design',
            'icon' => 'dashicons-welcome-widgets-menus',
            'external' => admin_url('site-editor.php'),
			'order' => 50,
		)
	);

    // Conditionally add additional pages if not on WP.com
    if ( ! PWP_EDD::is_wpcom() ) {
        $nav_data['pro-license'] = array(
            'title' => 'Pro License',
            'icon' => 'dashicons-admin-network',
			'order' => 30,
		);
        $nav_data['go-pro'] = array(
            'title' => 'Go Pro',
            'icon' => 'dashicons-plus-alt',
            'external' => 'https://portfoliowp.com/pricing/',
			'order' => 40,
		);
    }

	// Sort array based on 'order' key
    uasort($nav_data, 'pwp_sort_nav_data');

    return apply_filters('pwp-dashboard-nav-data', $nav_data);
}



function pwp_load_page( $pwp_page ) {
	// Load the layout.
	include 'pwp-dashboard/layout.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
}

function portfolio_wp_admin_page()
{
	
	$pwp_page = isset($_GET['pwp_page']) ? sanitize_key( $_GET['pwp_page'] ) : 'getting-started';

	switch ($pwp_page) {

		case 'theme-setup':
			pwp_load_page( 'theme-setup' );
			break;

		case 'pro-license':
			pwp_load_page( 'pro-license' );
			break;

		case 'go-pro':
			wp_safe_redirect( 'https://portfoliowp.com/pricing/' );
			exit; // Ensure to exit after the redirect
			break;

		case 'site-design':
			wp_safe_redirect( admin_url( 'site-editor.php' ) );
			exit; // Ensure to exit after the redirect
			break;

		case 'support':
			pwp_load_page( 'support' );
			break;

		case 'changelog':
			pwp_load_page( 'changelog' );
			break;

		default:
			pwp_load_page( 'getting-started' );
			break;
	}
}

function pwp_handle_plugin_install() {
    if ( ! isset( $_POST['pwp_install_plugin'] ) || $_POST['pwp_install_plugin'] !== "1" ) {
        return;
    }

    if ( ! isset( $_POST['pwp_install_plugin_nonce_field'] ) ) {
        return;
    }

    $nonce = sanitize_text_field( wp_unslash( $_POST['pwp_install_plugin_nonce_field'] ) );
    if ( ! wp_verify_nonce( $nonce, 'pwp_install_plugin_nonce' ) ) {
        return;
    }
    
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $plugins = isset( $_POST['pwp_plugins_to_install'] ) ? array_map( 'sanitize_text_field', (array) wp_unslash( $_POST['pwp_plugins_to_install'] ) ) : array();

    foreach ( $plugins as $slug ) {
        pwp_install_plugin( $slug );
    }

    wp_safe_redirect( admin_url( 'admin.php?page=portfolio-wp&pwp_page=theme-setup' ) );
    exit;
}
if (
    is_admin() &&
    isset( $_GET['page'] ) && $_GET['page'] === 'portfolio-wp' &&
    ( isset( $_GET['pwp_page'] ) && in_array($_GET['pwp_page'], array('theme-setup', 'pro-license')) )
) {
    add_action( 'admin_init', 'pwp_handle_plugin_install' );
}

function pwp_install_plugin( $plugin_slug ) {
    if ( ! is_pwp_approved_plugin( $plugin_slug ) ) {
        return false;
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    if( pwp_is_plugin_installed( $plugin_slug ) ) {
        activate_plugin( $plugin_slug . '/' . $plugin_slug . '.php' );
        return true;
    }

    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    include_once ABSPATH . 'wp-admin/includes/file.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    include_once ABSPATH . 'wp-admin/includes/misc.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php'; //phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

    $approved_plugins = pwp_approved_plugins();
    $plugin_url = esc_url_raw( $approved_plugins[$plugin_slug]['url'] );

    if ( ! class_exists( 'PWP_Quiet_Skin' ) ) {
        class PWP_Quiet_Skin extends WP_Upgrader_Skin {
            public function feedback($feedback, ...$args) {}
            public function header() {}
            public function footer() {}
        }
    }
	// phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames -- Ignoring because the sniff does not exist.
    $upgrader = new Plugin_Upgrader( new PWP_Quiet_Skin() );
    $installed = $upgrader->install($plugin_url);
    if ( ! $installed || is_wp_error( $installed ) ) {
        return false;
    }
    activate_plugin( $plugin_slug . '/' . $plugin_slug . '.php' );

    return true;
}

function pwp_approved_plugins() {
    return array(
        'portfolio-wp-plugin' => array(
            'name' => 'Portfolio WP Plugin',
            'url' => 'https://press75-uploads.nyc3.digitaloceanspaces.com/releases/portfolio-wp-plugin.zip',
		),
        'pwp-portfolio-block' => array(
            'name' => 'Portfolio Block Plugin',
            'url' => 'https://press75-uploads.nyc3.digitaloceanspaces.com/releases/pwp-portfolio-block.zip',
		),
        'jetpack' => array(
            'name' => 'Jetpack',
            'url' => 'https://downloads.wordpress.org/plugin/jetpack.latest-stable.zip',
		),
        'woocommerce' => array(
            'name' => 'WooCommerce',
            'url' => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip',
		),
	);
}

function is_pwp_approved_plugin( $plugin_slug ){
    $approved_plugins = pwp_approved_plugins();
    return array_key_exists( $plugin_slug, $approved_plugins );
}

function pwp_is_plugin_installed($plugin_slug) {
    $installed_plugins = get_plugins();
    foreach ($installed_plugins as $plugin_path => $plugin_info) {
        if (strpos($plugin_path, $plugin_slug) !== false) {
            return true;
        }
    }
    return false;
}
