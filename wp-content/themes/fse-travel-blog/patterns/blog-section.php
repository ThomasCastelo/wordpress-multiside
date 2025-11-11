<?php
 /**
  * Title: Blog Section
  * Slug: fse-travel-blog/blog-section
  */
?>

<!-- wp:heading {"className":"sec-heading","style":{"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading sec-heading" style="margin-top:0;margin-bottom:0;font-size:26px;font-style:normal;font-weight:700"><?php esc_html_e('Recent Post','fse-travel-blog'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sec-text","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"16px"}}} -->
<p class="sec-text" style="margin-top:0;margin-bottom:0;font-size:16px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','fse-travel-blog'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"blog-wrap"} -->
<div class="wp-block-columns blog-wrap"><!-- wp:column {"width":"40%","className":"blog-left wow fadeInLeft"} -->
<div class="wp-block-column blog-left wow fadeInLeft" style="flex-basis:40%"><!-- wp:query {"queryId":14,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"className":"blog-img-box","style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-img-box" style="margin-bottom:10px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"heading","isUserOverlayColor":true,"minHeight":227,"isDark":false,"style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:10px;min-height:227px"><span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cat-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group cat-box" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blogleft-text-box","style":{"border":{"width":"1px","color":"#1B1818","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blogleft-text-box has-border-color" style="border-color:#1B1818;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":11,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:columns {"verticalAlignment":"center","className":"blog-btn-wrap","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center blog-btn-wrap" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"blog-btn-left"} -->
<div class="wp-block-column is-vertically-aligned-center blog-btn-left" style="flex-basis:40%"><!-- wp:read-more {"content":"Know more","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"5px","bottom":"5px"}}},"backgroundColor":"primary","textColor":"background"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"blog-btn-right"} -->
<div class="wp-block-column is-vertically-aligned-center blog-btn-right" style="flex-basis:60%"><!-- wp:group {"className":"meta-wrap","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group meta-wrap"><!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true,"className":"is-style-default author-img"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small","fontFamily":"nunito-sans"} /-->

<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"nunito-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"blog-right wow fadeInRight"} -->
<div class="wp-block-column blog-right wow fadeInRight" style="flex-basis:60%"><!-- wp:query {"queryId":14,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"post_tag":[]},"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"className":"right-inner"} -->
<div class="wp-block-columns right-inner"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"blog-img-box","style":{"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-img-box" style="margin-bottom:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"heading","isUserOverlayColor":true,"minHeight":180,"isDark":false,"style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:10px;min-height:180px"><span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cat-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group cat-box" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"main-text-box","style":{"border":{"width":"1px","color":"#1B1818","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-text-box has-border-color" style="border-color:#1B1818;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":12,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:columns {"verticalAlignment":"center","className":"blog-btn-wrap","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center blog-btn-wrap" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"blog-btn-left"} -->
<div class="wp-block-column is-vertically-aligned-center blog-btn-left" style="flex-basis:40%"><!-- wp:read-more {"content":"Know more","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"5px","bottom":"5px"}}},"backgroundColor":"primary","textColor":"background"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"blog-btn-right"} -->
<div class="wp-block-column is-vertically-aligned-center blog-btn-right" style="flex-basis:60%"><!-- wp:group {"className":"meta-wrap","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group meta-wrap"><!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true,"className":"is-style-default author-img"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small","fontFamily":"nunito-sans"} /-->

<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"nunito-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->