<?php
/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/
function news_rift_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Noto Sans JP:300,400,500,600,700,800,900');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function news_rift_scripts_styles() {
    wp_enqueue_style( 'news-rift-fonts', news_rift_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'news_rift_scripts_styles' );