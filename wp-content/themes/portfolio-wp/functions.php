<?php
/**
 * Functions and definitions
 *
 * @package Portfolio WP
 * @since   Portfolio WP 1.0
 * @license GNU General Public License v2 or later
 * @link    https://portfoliowp.com
 */

/*
-------------------------------------------------------------------------------------------------------
	Theme Setup
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'portfolio-wp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 2400, 9999 );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for link color control.
		add_theme_support( 'link-color' );

		// Add support for global style settings.
		add_theme_support( 'appearance-tools' );

		// Add support for custom block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for wide alignment class for Gutenberg blocks.
		add_theme_support( 'align-wide' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for block navigation menus.
		add_theme_support( 'block-nav-menus' );

		/*
		* Enable support for custom menus.
		*/
		register_nav_menus(
			array(
				'main-menu'      => esc_html__( 'Main Menu', 'portfolio-wp' ),
				'secondary-menu' => esc_html__( 'Secondary Menu', 'portfolio-wp' ),
				'social-menu'    => esc_html__( 'Social Menu', 'portfolio-wp' ),
			)
		);

		/*
		* Enable block style support.
		*/
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/group',
			array(
				'name'  => 'pwp-dark-style',
				'label' => __( 'Dark Style', 'portfolio-wp' ),
				'inline_style' => '.is-style-pwp-dark-style {  
					color: var(--wp--preset--color--white);
					background-color: var(--wp--preset--color--bg-dark);
				}
				.is-style-pwp-dark-style p a {  
					color: var(--wp--preset--color--accent-primary);
				}',
			)
		);

		/*
		* Enable custom color palette.
		*/
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_attr__( 'Primary Accent', 'portfolio-wp' ),
					'slug'  => 'accent-primary',
					'color' => '#38bda6',
				),
				array(
					'name'  => esc_attr__( 'Secondary Accent', 'portfolio-wp' ),
					'slug'  => 'accent-secondary',
					'color' => '#D9E9E7',
				),
				array(
					'name'  => esc_attr__( 'Background Dark', 'portfolio-wp' ),
					'slug'  => 'bg-dark',
					'color' => '#495369',
				),
				array(
					'name'  => esc_attr__( 'Background Light', 'portfolio-wp' ),
					'slug'  => 'bg-light',
					'color' => '#E5EEED',
				),
			)
		);
	}
	add_action( 'after_setup_theme', 'portfolio_wp_setup' );
}

/*
-------------------------------------------------------------------------------------------------------
	Register Block Styles
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_register_block_styles' ) ) {
	/**
	 * Sets up theme defaults and registers support for block styles.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_register_block_styles() {

		if ( PWP_EDD::is_valid() ) {

			/*
			* Enable block style support.
			*/
			register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
				'core/group',
				array(
					'name'  => 'pwp-dark-style',
					'label' => __( 'Dark Style', 'portfolio-wp' ),
					'inline_style' => '.is-style-pwp-dark-style {  
						color: var(--wp--preset--color--white);
						background-color: var(--wp--preset--color--bg-dark);
						border-color: var(--wp--preset--color--bg-light);
					}
					.is-style-pwp-dark-style p a {  
						color: var(--wp--preset--color--accent-primary);
					}
					.is-style-pwp-dark-style .wp-block-post-title a {  
						color: var(--wp--preset--color--white);
					}
					.is-style-pwp-dark-style .wp-block-group {
						border-color: var(--wp--preset--color--bg-light) !important;
					}',
				)
			);

		} else {

			/*
			* Enable block style support.
			*/
			register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
				'core/group',
				array(
					'name'  => 'pwp-dark-style',
					'label' => __( 'Get Pro', 'portfolio-wp' ),
				)
			);
			
		}
	}
	add_action( 'init', 'portfolio_wp_register_block_styles' );
}

/*
-------------------------------------------------------------------------------------------------------
	Enqueue Styles and Scripts
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_scripts' ) ) {
	/**
	 * Enqueue scripts and styles for frontend.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_scripts() {
		wp_enqueue_style( 'portfolio-wp-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'portfolio-wp-font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array( 'portfolio-wp-style' ), '6.5.1' );
		wp_enqueue_script( 'portfolio-wp-custom-js', get_template_directory_uri() . '/assets/js/jquery.custom.js', array( 'jquery' ), '1.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'portfolio_wp_scripts' );
}

if ( ! function_exists( 'portfolio_wp_admin_scripts' ) ) {

	/** Function portfolio_wp_admin_scripts */
	function portfolio_wp_admin_scripts( $hook ) {
		if ( 'themes.php' !== $hook || PWP_EDD::is_valid() ) {
			return;
		}
		wp_enqueue_script( 'portfolio-wp-admin-js', get_template_directory_uri() . '/assets/js/jquery.admin.js', array( 'jquery' ), '1.0', true );
	}
	add_action( 'admin_enqueue_scripts', 'portfolio_wp_admin_scripts' );

}

/*
-------------------------------------------------------------------------------------------------------
	Enable Customizer
-------------------------------------------------------------------------------------------------------
*/

add_action( 'customize_register', '__return_true' );

/*
-------------------------------------------------------------------------------------------------------
	Gutenberg Editor Scripts
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_editor_scripts' ) ) {

	/**
	 * Enqueue WordPress theme styles within Gutenberg.
	 */
	function portfolio_wp_editor_scripts() {
		wp_enqueue_style(
			'portfolio-wp-editor',
			get_theme_file_uri( '/assets/css/editor.css' ),
			false,
			'1.0',
			'all'
		);
		wp_enqueue_style(
			'portfolio-wp-font-awesome-editor',
			get_template_directory_uri() . '/assets/css/fontawesome.css',
			array( 'portfolio-wp-editor' ),
			'6.5.1'
		);
		if ( class_exists( 'Woocommerce' ) ) {
			wp_enqueue_style(
				'portfolio-wp-editor-woocommerce',
				get_theme_file_uri( '/assets/css/woocommerce.css' ),
				false,
				'1.0',
				'all'
			);
		}
		if ( class_exists( 'Jetpack' ) ) {
			wp_enqueue_script(
				'portfolio-wp-enqueue-block-variations',
				get_theme_file_uri( '/assets/js/block-variations.js' ),
				array( 'wp-blocks' ), // Primary dependency for block registration
				wp_get_theme()->get( 'Version' ),
				true
			);
		}
	}
}
add_action( 'enqueue_block_assets', 'portfolio_wp_editor_scripts', 10 );

/*
-------------------------------------------------------------------------------------------------------
	Jetpack Modules
-------------------------------------------------------------------------------------------------------
*/

/**
 * Enable select Jetpack modules by default.
 */
if ( class_exists( 'Jetpack' ) ) {

	function portfolio_wp_enable_jetpack_modules() {

		add_theme_support( 'jetpack-portfolio' );

		// Activate carousel module.
		if ( ! Jetpack::is_module_active( 'carousel' ) ) {
			Jetpack::activate_module( 'carousel', false );
		}
		// Activate tiled gallery module.
		if ( ! Jetpack::is_module_active( 'tiled-gallery' ) ) {
			Jetpack::activate_module( 'tiled-gallery', false );
		}
		// Activate contact form module.
		if ( ! Jetpack::is_module_active( 'contact-form' ) ) {
			Jetpack::activate_module( 'contact-form', false );
		}
		// Activate the custom content types module.
		if ( ! Jetpack::is_module_active( 'custom-content-types' ) ) {
			Jetpack::activate_module( 'custom-content-types', false );
		}
		if ( Jetpack::is_module_active( 'custom-content-types' ) && class_exists( 'Jetpack_Portfolio' ) ) {
			Jetpack::activate_module( 'portfolio', false );
		}
	}
	add_action( 'after_setup_theme', 'portfolio_wp_enable_jetpack_modules' );
	add_action( 'jetpack_activate_module_custom-content-types', 'portfolio_wp_enable_jetpack_modules' );

}



/*
-------------------------------------------------------------------------------------------------------
	Remove Core Patterns
-------------------------------------------------------------------------------------------------------
*/

/**
 * Removes core WordPress patterns.
 */
function portfolio_wp_remove_core_patterns() {
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'portfolio_wp_remove_core_patterns' );

/*
-------------------------------------------------------------------------------------------------------
	Register Pattern Categories
-------------------------------------------------------------------------------------------------------
*/

/**
 * Register Block Pattern Categories.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-headers',
		array( 'label' => esc_html__( 'Site Headers', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-footers',
		array( 'label' => esc_html__( 'Site Footers', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-hero',
		array( 'label' => esc_html__( 'Heroes', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-portfolios',
		array( 'label' => esc_html__( 'Portfolios', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-case-studies',
		array( 'label' => esc_html__( 'Case Studies', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-about',
		array( 'label' => esc_html__( 'About Sections', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-testimonials',
		array( 'label' => esc_html__( 'Testimonials', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-pricing',
		array( 'label' => esc_html__( 'Pricing Tables', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-sliders',
		array( 'label' => esc_html__( 'Sliders', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-blogs',
		array( 'label' => esc_html__( 'Blog Layouts', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-contact',
		array( 'label' => esc_html__( 'Contact Sections', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-services',
		array( 'label' => esc_html__( 'Services', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-logo-cloud',
		array( 'label' => esc_html__( 'Logo Clouds', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-awards',
		array( 'label' => esc_html__( 'Awards', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-social',
		array( 'label' => esc_html__( 'Social Media', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-newsletters',
		array( 'label' => esc_html__( 'Newsletters', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-pages',
		array( 'label' => esc_html__( 'Full Pages', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-misc',
		array( 'label' => esc_html__( 'Miscellaneous', 'portfolio-wp' ) )
	);
}

/*
-------------------------------------------------------------------------------------------------------
	Body Class
-------------------------------------------------------------------------------------------------------
*/

function portfolio_wp_add_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name; // Add post type and slug to body class.
	}
	return $classes;
}
add_filter( 'body_class', 'portfolio_wp_add_body_class' );

/*
-------------------------------------------------------------------------------------------------------
	Includes
-------------------------------------------------------------------------------------------------------
*/

// WooCommerce Setup.
if ( class_exists( 'Woocommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// EDD
require_once get_template_directory() . '/inc/class-pwp-edd.php';
new PWP_EDD();

// Pattern Unregistry
require_once get_template_directory() . '/inc/pwp-pattern-registry.php';

/*
-------------------------------------------------------------------------------------------------------
	Dashboard
-------------------------------------------------------------------------------------------------------
*/
require_once get_template_directory() . '/inc/pwp-dashboard.php';

/*
-------------------------------------------------------------------------------------------------------
	Activation
-------------------------------------------------------------------------------------------------------
*/
require_once get_template_directory() . '/inc/pwp-activation.php';