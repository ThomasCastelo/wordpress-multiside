<?php

/**
 * Title: Main Banner
 * Slug: fse-travel-blog/main-banner
 */

?>

<!-- wp:columns {"className":"banner-wrap","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns banner-wrap">
	<!-- wp:column {"verticalAlignment":"bottom","className":"banner-left wow bounceInDown"} -->
		<div class="wp-block-column is-vertically-aligned-bottom banner-left wow bounceInDown">
			<!-- wp:group {"className":"banner-sub-heading","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group banner-sub-heading">
					<!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/icon.png' ); ?>" alt="" class="wp-image-59"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"body-text","fontFamily":"manrope"} -->
						<h4 class="wp-block-heading has-body-text-color has-text-color has-link-color has-manrope-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Nature','fse-travel-blog'); ?></h4>
					<!-- /wp:heading -->
				</div>
			<!-- /wp:group -->

			<!-- wp:heading {"style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"900"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:35px;font-style:normal;font-weight:900"><?php esc_html_e('20 Photos That’ll Make You','fse-travel-blog'); ?><br><?php esc_html_e('Want to Go to Sri Lanka','fse-travel-blog'); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"banner-text","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="banner-text" style="margin-top:0;margin-bottom:0;font-size:18px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','fse-travel-blog'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontFamily":"poppins"} -->
						<div class="wp-block-button has-custom-font-size has-poppins-font-family" style="font-size:16px;font-style:normal;font-weight:500"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Know More','fse-travel-blog'); ?></a></div>
					<!-- /wp:button -->
				</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":92,"sizeSlug":"full","linkDestination":"none","align":"right","className":"left-img","style":{"border":{"radius":"15px"}}} -->
						<figure class="wp-block-image alignright size-full has-custom-border left-img"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide1.png' ); ?>" alt="" class="wp-image-92" style="border-radius:15px"/></figure>
					<!-- /wp:image -->
				</div>
			<!-- /wp:group -->
		</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"bottom","className":"banner-right"} -->
		<div class="wp-block-column is-vertically-aligned-bottom banner-right">
			<!-- wp:image {"id":90,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"15px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" alt="" class="wp-image-90" style="border-radius:15px"/></figure>
			<!-- /wp:image -->
		</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->