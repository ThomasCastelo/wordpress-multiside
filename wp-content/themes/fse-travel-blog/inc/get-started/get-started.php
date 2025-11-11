<?php
add_action( 'admin_menu', 'fse_travel_blog_getting_started' );
function fse_travel_blog_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fse-travel-blog'), esc_html__('Get Started', 'fse-travel-blog'), 'edit_theme_options', 'fse-travel-blog-guide-page', 'fse_travel_blog_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function fse_travel_blog_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'fse_travel_blog_admin_theme_style');

//guidline for about theme
function fse_travel_blog_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'fse-travel-blog' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'fse-travel-blog'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'fse-travel-blog'); ?></a>
						<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'fse-travel-blog'); ?></a>
						<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fse-travel-blog'); ?></a>
						<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'fse-travel-blog'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'fse-travel-blog'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'fse-travel-blog'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'fse-travel-blog'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'fse-travel-blog'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'fse-travel-blog'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( FSE_TRAVEL_BLOG_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'fse-travel-blog'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'fse-travel-blog'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'fse-travel-blog'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( FSE_TRAVEL_BLOG_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'fse-travel-blog'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'fse-travel-blog'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'fse-travel-blog');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'fse-travel-blog');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'fse-travel-blog');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'fse-travel-blog');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'fse-travel-blog');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'fse-travel-blog'); ?></h4>
					<p><?php esc_html_e('60+ Premium WordPress Themes', 'fse-travel-blog'); ?></p>
					<p class="main-bundle-price" ><strong class="cancel-bundle-price"><?php esc_html_e('$2340', 'fse-travel-blog'); ?></strong><span class="bundle-price"><?php esc_html_e('$86', 'fse-travel-blog'); ?></span></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'fse-travel-blog'); ?><strong><?php esc_html_e('Extra 20%', 'fse-travel-blog'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'fse-travel-blog'); ?><strong><?php esc_html_e('“HEAT20”', 'fse-travel-blog'); ?></strong></p>
					<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For $86', 'fse-travel-blog'); ?></a>
				</div>
				<div class="pro-boxes  pro-theme-container">
					<h4><?php esc_html_e('FSE Travel Blog Pro', 'fse-travel-blog'); ?></h4>
					<p class="pro-theme-price" ><?php esc_html_e('$39', 'fse-travel-blog'); ?></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'fse-travel-blog'); ?><strong><?php esc_html_e('Extra 25%', 'fse-travel-blog'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'fse-travel-blog'); ?><strong><?php esc_html_e('“SUMMER25”', 'fse-travel-blog'); ?></strong></p>
					<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro At Just at $29.25', 'fse-travel-blog'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'fse-travel-blog'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( FSE_TRAVEL_BLOG_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'fse-travel-blog'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>