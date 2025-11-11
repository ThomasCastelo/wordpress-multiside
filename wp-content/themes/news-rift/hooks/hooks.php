<?php
//Front Page Banner
if (!function_exists('news_rift_front_page_banner_section')) :
    /**
        *
        * @since News Rift
        *
        */
    function news_rift_front_page_banner_section() {
        if (is_front_page() || is_home()) {
        $newsup_enable_main_slider = newsup_get_option('show_main_news_section');
        $select_vertical_slider_news_category = newsup_get_option('select_vertical_slider_news_category');
        $vertical_slider_number_of_slides = newsup_get_option('vertical_slider_number_of_slides');
        $all_posts_vertical = newsup_get_posts($vertical_slider_number_of_slides, $select_vertical_slider_news_category);
        if ($newsup_enable_main_slider):  

            $main_banner_section_background_image = newsup_get_option('main_banner_section_background_image');
            $main_banner_section_background_image_url = wp_get_attachment_image_src($main_banner_section_background_image, 'full');
        if(!empty($main_banner_section_background_image)){ ?>
                <section class="mg-fea-area over" style="background-image:url('<?php echo esc_url($main_banner_section_background_image_url[0]); ?>');">
        <?php }else{ ?>
            <section class="mg-fea-area">
        <?php  } ?>
            <div class="overlay">
                <div class="container-fluid">
                    <div class="row<?php echo newsup_get_option('newsup_select_slider_setting') == 'left' ? '': ' flex-row-reverse';?>">
                        <?php do_action('news_rift_action_front_page_editor_section'); ?>
                        <div class="col-md-6">
                            <div id="homemain"class="homemain owl-carousel mr-bot60"> 
                                <?php newsup_get_block('list', 'banner'); ?>
                            </div>
                        </div>
                        <?php do_action('news_rift_action_latest_posts');?>
                    </div>
                </div>
            </div>
        </section>
        <!--==/ Home Slider ==-->
        <?php endif; ?>
        <!-- end slider-section -->
        <?php }
    }
endif;
add_action('news_rift_action_front_page_main_section_1', 'news_rift_front_page_banner_section', 40);

if(!function_exists('news_rift_frontpage_editor_post_section')):
    /**
    *
    * @since News Rift
    *
    *
    */
    function news_rift_frontpage_editor_post_section() {

        if(is_front_page() || is_home()) { 
        $number_of_posts = '2';
        $newsup_editor_news_category = newsup_get_option('select_editor_news_category');
        $newsup_all_posts_main = newsup_get_posts($number_of_posts, $newsup_editor_news_category); ?>

        <div class="col-md-3"> 
            <?php if ($newsup_all_posts_main->have_posts()) :
            while ($newsup_all_posts_main->have_posts()) : $newsup_all_posts_main->the_post();
            global $post;
            $newsup_url = newsup_get_freatured_image_url($post->ID, 'newsup-slider-full'); ?>
            <div class="mg-blog-post lg mins back-img mr-bot30" style="background-image: url('<?php echo esc_url($newsup_url); ?>'); ">
                <a class="link-div" href="<?php the_permalink(); ?>"></a>
                <article class="bottom">
                    <div class="mg-blog-category"> <?php newsup_post_categories(); ?> </div>
                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php newsup_post_meta(); ?>
                </article>
            </div>
            <?php
            endwhile; endif;
            wp_reset_postdata(); ?>          
        </div>
        <?php }
    }
endif;

add_action('news_rift_action_front_page_editor_section', 'news_rift_frontpage_editor_post_section', 30);

//Banner Tabed Section
if (!function_exists('news_rift_latest_posts')):
    /**
     *
     * @since News Rift 1.0.0
     *
     */
    function news_rift_latest_posts() {

        $news_rift_post_one_id = newsup_get_option('news_rift_post_one');
        $news_rift_post_one_title = get_the_title($news_rift_post_one_id);
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'title' => $news_rift_post_one_title,
            'posts_per_page' => 1, // Adjust the number of posts you want to retrieve
            'ignore_sticky_posts' => true
        );
        
        // Execute the query
        $query = new WP_Query($args);?>
        <div class="col-md-3">
        <?php
        // Check if there are any posts
        if ($query->have_posts()) {
            // Loop through the posts
            while ($query->have_posts()) {
                $query->the_post();
                global $post;
                $newsup_url = newsup_get_freatured_image_url($post->ID, 'newsup-slider-full'); ?>
                    <div class="mg-blog-post lg back-img" style="background-image: url('<?php echo esc_url($newsup_url); ?>'); ">
                        <a class="link-div" href="<?php the_permalink(); ?>"></a>
                        <article class="bottom">
                            <span class="post-form"><i class="fa fa-camera"></i></span>
                            <?php newsup_post_categories(); ?>
                            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php newsup_post_meta(); ?>
                        </article>
                    </div>
                <?php
            }
            // Reset post data
            wp_reset_postdata();
        } ?>
            </div>
        <?php
    }
endif;

add_action('news_rift_action_latest_posts', 'news_rift_latest_posts', 10);