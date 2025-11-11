<?php
/**
 * FSE Travel Blog functions and definitions
 *
 * @package fse_travel_blog
 * @since 1.0
 */

if ( ! function_exists( 'fse_travel_blog_support' ) ) :
	function fse_travel_blog_support() {

		load_theme_textdomain( 'fse-travel-blog', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

	 add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');
		
	/* Theme Credit link */
	define('FSE_TRAVEL_BLOG_BUY_NOW',__('https://www.cretathemes.com/products/traveller-blog-wordpress-theme','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_PRO_DEMO',__('https://pattern.cretathemes.com/fse-travel-blog/','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-travel-blog/','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-travel-blog/','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_SUPPORT',__('https://wordpress.org/support/theme/fse-travel-blog','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_REVIEW',__('https://wordpress.org/support/theme/fse-travel-blog/reviews/#new-post','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','fse-travel-blog'));
	define('FSE_TRAVEL_BLOG_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','fse-travel-blog'));

	}
endif;
add_action( 'after_setup_theme', 'fse_travel_blog_support' );


if ( ! function_exists( 'fse_travel_blog_styles' ) ) :
	function fse_travel_blog_styles() {
		// Register theme stylesheet.
		$fse_travel_blog_theme_version = wp_get_theme()->get( 'Version' );

		$fse_travel_blog_version_string = is_string( $fse_travel_blog_theme_version ) ? $fse_travel_blog_theme_version : false;
		wp_enqueue_style(
			'fse-travel-blog-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_travel_blog_version_string
		);

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'fse-travel-blog-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		// Enqueue Swiper CSS
		wp_enqueue_style(
		    'fse-travel-blog-swiper-bundle-style',
		    get_template_directory_uri() . '/assets/css/swiper-bundle.css',
		    array(),
		    $fse_travel_blog_version_string
		);

		// Enqueue Swiper JS
		wp_enqueue_script(
		    'fse-travel-blog-swiper-bundle-scripts',
		    get_template_directory_uri() . '/assets/js/swiper-bundle.js',
		    array('jquery'),
		    $fse_travel_blog_version_string,
		    true
		);

		// Enqueue Custom Script (depends on Swiper too)
		wp_enqueue_script(
		    'fse-travel-blog-custom-script',
		    get_template_directory_uri() . '/assets/js/custom-script.js',
		    array('jquery', 'fse-travel-blog-swiper-bundle-scripts'),
		    $fse_travel_blog_version_string,
		    true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_travel_blog_styles' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_fse-travel-blog') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_cretatestimonial_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=fse-travel-blog-guide-page'),
    ]);
});

add_action('wp_ajax_check_creta_testimonial_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $fse_travel_blog_plugin_file = 'creta-testimonial-showcase/creta-testimonial-showcase.php';

    if (is_plugin_active($fse_travel_blog_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function fse_travel_blog_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_travel_blog_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-travel-blog-guide-page' && $current_screen->base != 'toplevel_page_cretats-theme-showcase' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Travel Blog Theme!', 'fse-travel-blog'); ?></h1>
	        <p><a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button get-start-btn">
				   <?php echo __('Nevigate Getstart', 'fse-travel-blog'); ?>
				</a>

				<script type="text/javascript">
				document.getElementById('install-activate-button').addEventListener('click', function () {
				    const fse_travel_blog_button = this;
				    const fse_travel_blog_redirectUrl = '<?php echo esc_url(admin_url("themes.php?page=fse-travel-blog-guide-page")); ?>';
				    // First, check if plugin is already active
				    jQuery.post(ajaxurl, { action: 'check_creta_testimonial_activation' }, function (response) {
				        if (response.success && response.data.active) {
				            // Plugin already active — just redirect
				            window.location.href = fse_travel_blog_redirectUrl;
				        } else {
				            // Show Installing & Activating only if not already active
				            fse_travel_blog_button.textContent = 'Nevigate Getstart';

				            jQuery.post(ajaxurl, {
				                action: 'install_and_activate_creta_testimonial_plugin',
				                nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
				            }, function (response) {
				                if (response.success) {
				                    window.location.href = fse_travel_blog_redirectUrl;
				                } else {
				                    alert('Failed to activate the plugin.');
				                    fse_travel_blog_button.textContent = 'Try Again';
				                }
				            });
				        }
				    });
				});
				</script>

	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-travel-blog'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( FSE_TRAVEL_BLOG_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fse-travel-blog'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( FSE_TRAVEL_BLOG_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'fse-travel-blog'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?fse_travel_blog_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-travel-blog' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'fse_travel_blog_admin_notice' );

if( ! function_exists( 'fse_travel_blog_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_travel_blog_update_admin_notice(){
    if ( isset( $_GET['fse_travel_blog_admin_notice'] ) && $_GET['fse_travel_blog_admin_notice'] = '1' ) {
        update_option( 'fse_travel_blog_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_travel_blog_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_travel_blog_getstart_setup_options');
function fse_travel_blog_getstart_setup_options () {
    update_option('fse_travel_blog_admin_notice', FALSE );
}

function fse_travel_blog_google_fonts() {
 
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'fse_travel_blog_google_fonts' );
