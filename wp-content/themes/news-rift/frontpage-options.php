<?php

/**
 * Option Panel
 *
 * @package News Rift
 */


function news_rift_customize_register($wp_customize) {

    $newsup_default = news_rift_get_default_theme_options();

    //section title
    $wp_customize->add_setting('editior_post_section',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        new newsup_Section_Title(
            $wp_customize,
            'editior_post_section',
            array(
                'label'             => esc_html__( 'Editor Post Section', 'news-rift' ),
                'section'           => 'frontpage_main_banner_section_settings',
                'priority'          => 50,
                'active_callback' => 'newsup_main_banner_section_status'
            )
        )
    );

    // Setting - drop down category for slider.
    $wp_customize->add_setting('select_editor_news_category',
        array(
            'default' => $newsup_default['select_editor_news_category'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(new Newsup_Dropdown_Taxonomies_Control($wp_customize, 'select_editor_news_category',
        array(
            'label' => esc_html__('Category', 'news-rift'),
            'description' => esc_html__('Select category for Editor 2 Post', 'news-rift'),
            'section' => 'frontpage_main_banner_section_settings',
            'type' => 'dropdown-taxonomies',
            'taxonomy' => 'category',
            'priority' => 50,
            'active_callback' => 'newsup_main_banner_section_status'
        )
    ));

    $wp_customize->remove_control('newsup_select_slider_setting');

    /* Option list of all post */  
    $options_posts = array();
    $options_posts_obj = get_posts('posts_per_page=-1');
    $options_posts[''] = __( 'Choose Post','news-rift' );
    foreach ( $options_posts_obj as $posts ) {
        $options_posts[$posts->ID] = $posts->post_title;
    }

    //section title
    $wp_customize->add_setting('one_post_section',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        new newsup_Section_Title(
            $wp_customize,
            'one_post_section',
            array(
                'label'             => esc_html__( 'Latest Post', 'news-rift' ),
                'section'           => 'frontpage_main_banner_section_settings',
                'priority'          => 100,
                'active_callback' => 'newsup_main_banner_section_status'
            )
        )
    );

    //Select Post One
    $wp_customize->add_setting('news_rift_post_one',array(
        'capability'=>'edit_theme_options',
        'sanitize_callback' => 'newsup_sanitize_select',
    ));
    $wp_customize->add_control('news_rift_post_one',array(
        'label' => __('Select Post','news-rift'),
        'section'=>'frontpage_main_banner_section_settings',
        'type'=>'select',
        'priority'          => 110,
        'choices'=>$options_posts,
    ));
}
add_action('customize_register', 'news_rift_customize_register');
