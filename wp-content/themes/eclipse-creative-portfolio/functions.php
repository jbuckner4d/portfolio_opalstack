<?php 

function eclipse_creative_portfolio_theme_custom_script(){
    wp_enqueue_script( 'cursor-js', get_stylesheet_directory_uri() . '/assets/js/cursor.js', array(), false, true );
    wp_enqueue_script( 'custom-controls-js', get_stylesheet_directory_uri() . '/assets/js/custom-controls.js', array(), false, true );
    wp_enqueue_script( 'ad-js', get_stylesheet_directory_uri() . '/assets/js/ad.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'eclipse_creative_portfolio_theme_custom_script' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
require get_template_directory() . '/free-patterns.php';

// Add Customizer
require get_stylesheet_directory() . '/inc/customizer.php';


// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Eclipse_Creative_Portfolio_Upsell_Section extends WP_Customize_Section {
		public $type = 'eclipse-creative-portfolio-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : 'linear-gradient(90deg,rgb(0,0,0) 0%,rgb(0,0,0) 35%,rgb(0,0,0) 70%,rgb(0,0,0) 100%)
            ';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="eclipse-creative-portfolio_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}


// Add Get Started
require get_stylesheet_directory() . '/inc/get-started/get-started.php';

function eclipse_creative_portfolio_notice() {
    $user_id = get_current_user_id();
    if ( !get_user_meta( $user_id, 'eclipse-creative-portfolio_notice_dismissed' ) ) {
 
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex-inline;padding: 10px;">
        <h2 style="color: #FFC300"><?php echo esc_html('☆☆☆☆☆', 'eclipse-creative-portfolio'); ?><br></h2>
            <p><?php echo esc_html('This is just a sample of what the Eclipse Creative Portifolio Template can do, the Premium Version is waiting for you!', 'eclipse-creative-portfolio'); ?></p>
            <a style="margin-top: 18px;" class="button button-primary" target="_blank"
               href="<?php echo esc_url('https://realtimethemes.com/theme-eclipse'); ?>"><?php esc_html_e('See Premium Version', 'eclipse-creative-portfolio') ?></a>
               <a href="?eclipse-creative-portfolio-dismissed" style="margin-top: 18px;" class="button button-secondary"><?php echo esc_html('Dismiss', 'eclipse-creative-portfolio'); ?></a>
        </div>
        <?php
        }
}
add_action( 'admin_notices', 'eclipse_creative_portfolio_notice' );
    
function eclipse_creative_portfolio_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['eclipse_creative_portfolio-dismissed'] ) ) 
        add_user_meta( $user_id, 'eclipse_creative_portfolio_notice_dismissed', 'true', true );
}
add_action( 'admin_init', 'eclipse_creative_portfolio_notice_dismissed' );

define('eclipse_creative_portfolio_BUY_NOW',__('https://realtimethemes.com/theme-eclipse','eclipse-creative-portfolio'));
define('eclipse_creative_portfolio_PRO_DEMO',__('https://realtimethemes.com/preview-eclipse','eclipse-creative-portfolio'));
define('eclipse_creative_portfolio_REVIEW',__('https://realtimethemes.com/theme-eclipse','eclipse-creative-portfolio'));
define('eclipse_creative_portfolio_SUPPORT',__('https://realtimethemes.com/','eclipse-creative-portfolio'));

?>