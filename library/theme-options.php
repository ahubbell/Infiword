<?php

/* ------------------------------------------------------------------------- *
 *  This file contains the options provided with this theme. This theme uses
 *  the Kirki toolkit to provide custom options.
/* ------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------- *
 *  Kirki essentials
/* ------------------------------------------------------------------------- */
include_once( get_template_directory() . '/kirki/kirki.php' );

/**
 * Create our panels and sections.
 * For this example we'll be creating 2 panels (1 for default WordPress controls and another for our custom controls)
 * and then a separate section for each control type.
 */
function infiword_panels_sections( $wp_customize ) {
    /**
     * Add panels
     */

    //General panel
    $wp_customize->add_panel( 'general', array(
        'priority'    => 10,
        'title'       => __( 'General', 'infiword' ),
        'description' => __( 'Upload your logo, favicon and set up your search bar.', 'infiword' ),
    ) );
    
    //Header panel
    $wp_customize->add_panel( 'header', array(
        'priority'    => 10,
        'title'       => __( 'Header', 'infiword' ),
        'description' => __( 'Upload a header image, add header ads and custom CSS to the head of your website.', 'infiword' ),
    ) );
    
    //Footer panel
    $wp_customize->add_panel( 'footer', array(
        'priority'    => 10,
        'title'       => __( 'Footer', 'infiword' ),
        'description' => __( 'Add ads or copyright text in the footer of your website.', 'infiword' ),
    ) );
    
    //Front page panel
    $wp_customize->add_panel( 'front_page', array(
        'priority'    => 10,
        'title'       => __( 'Front Page', 'infiword' ),
        'description' => __( 'Edit the layout of the front page of your website.', 'infiword' ),
    ) );
    
    //Blog page panel
    $wp_customize->add_panel( 'blog_page', array(
        'priority'    => 10,
        'title'       => __( 'Blog Page', 'infiword' ),
        'description' => __( 'Edit the layout of the blog page of your website.', 'infiword' ),
    ) );

    //Search page panel
    $wp_customize->add_panel( 'search_page', array(
        'priority'    => 10,
        'title'       => __( 'Search Page', 'infiword' ),
        'description' => __( 'Edit the layout of the Search page of your website.', 'infiword' ),
    ) );

    //Author page panel
    $wp_customize->add_panel( 'author_page', array(
        'priority'    => 10,
        'title'       => __( 'Author Page', 'infiword' ),
        'description' => __( 'Edit the layout of the Author page of your website.', 'infiword' ),
    ) );

    //Category page panel
    $wp_customize->add_panel( 'category_page', array(
        'priority'    => 10,
        'title'       => __( 'Category Page', 'infiword' ),
        'description' => __( 'Edit the layout of the Category page of your website.', 'infiword' ),
    ) );

    //Tag page panel
    $wp_customize->add_panel( 'tag_page', array(
        'priority'    => 10,
        'title'       => __( 'Tag Page', 'infiword' ),
        'description' => __( 'Edit the layout of the Tag page of your website.', 'infiword' ),
    ) );
    
    //Woocommerce page panel
    $wp_customize->add_panel( 'woocommerce_page', array(
        'priority'    => 10,
        'title'       => __( 'Woocommerce Page', 'infiword' ),
        'description' => __( 'Edit the layout of the woocommerce page of your website.', 'infiword' ),
    ) );
    
    //Custom home page panel
    /*$wp_customize->add_panel( 'custom_home_page', array(
        'priority'    => 10,
        'title'       => __( 'Custom Home Page', 'infiword' ),
        'description' => __( 'Edit the layout of the home page of your website.', 'infiword' ),
    ) );*/

    //Social buttons panel
    $wp_customize->add_panel( 'social_buttons', array(
        'priority'    => 10,
        'title'       => __( 'Social Buttons', 'infiword' ),
        'description' => __( 'Add social buttons in your website.', 'infiword' ),
    ) );
    
    //Custom style panel
    $wp_customize->add_panel( 'custom_style', array(
        'priority'    => 10,
        'title'       => __( 'Custom Style', 'infiword' ),
        'description' => __( 'Edit the custom style of your website.', 'infiword' ),
    ) );

    
    /**
     * Add sections
     */

    /* General */
    
    //Logo section
    $wp_customize->add_section( 'logo_section' , array(
        'title'       => __( 'Logo', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Upload a logo to replace the default site name and description in the header', 'infiword' ),
    ) );
    
    //Logo size section (height and width of the logo)
    $wp_customize->add_section( 'logo_size_section' , array(
        'title'       => __( 'Logo size', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Change the height and width of your logo.', 'infiword' ),
    ) );
    
    //Search bar section
    $wp_customize->add_section( 'search_bar_section' , array(
        'title'       => __( 'Search bar', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Choose whether you want to show a search bar at the right of the primary navigation or not. This search bar will be visible at the top right of the website. The primary navigation must be activated in order to show the search bar.', 'infiword' ),
    ) );
    
    /* Header */
    
    //Header ads section
    $wp_customize->add_section( 'header_ads_section' , array(
        'title'       => __( 'Header ads', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'header',
        'description' => __( 'Show an advertisement banner on the header beside the logo.', 'infiword' ),
    ) );
    
    // Custom Header image
    $wp_customize->add_section( 'infiword_custom_header_image_section' , array(
        'title'       => __( 'Header image', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'header',
        'description' => __( 'Upload your custom header image. This header image will be shown on all the pages of the website.', 'infiword' ),
    ) );
    
    /* Footer */
    
    //Footer ads count section
    $wp_customize->add_section( 'infiword_footer_advertisement_count_section' , array(
        'title'       => __( 'Number of advertisements', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'The number of advertisements on the footer.', 'infiword' ),
    ) );
    
    //Footer Ads (one)
    $wp_customize->add_section( 'infiword_footer_advertisement_one_section' , array(
        'title'       => __( 'Advertisement 1', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (one) section.', 'infiword' ),
    ) );
    
    //Footer Ads (two)
    $wp_customize->add_section( 'infiword_footer_advertisement_two_section' , array(
        'title'       => __( 'Advertisement 2', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (two) section.', 'infiword' ),
    ) );
    
    //Footer Ads (three)
    $wp_customize->add_section( 'infiword_footer_advertisement_three_section' , array(
        'title'       => __( 'Advertisement 3', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (three) section.', 'infiword' ),
    ) );
    
    //Footer Ads (four)
    $wp_customize->add_section( 'infiword_footer_advertisement_four_section' , array(
        'title'       => __( 'Advertisement 4', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (four) section.', 'infiword' ),
    ) );
    
    //Back to top button
    $wp_customize->add_section( 'infiword_footer_back_to_top_section' , array(
        'title'       => __( 'Back to top', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Choose whether you want to show a back to top button or not. This button or link will be shown on the right side of the website and will be visible only after a certain amount of scroll.', 'infiword' ),
    ) );
    
    //Footer copyright text left
    $wp_customize->add_section( 'infiword_footer_copyright_text_left_section' , array(
        'title'       => __( 'Copyright text (left)', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Write your own copyright text. This text will be shown at the bottom of the website on the left side.', 'infiword' ),
    ) );
    
    //Footer copyright text right
    $wp_customize->add_section( 'infiword_footer_copyright_text_right_section' , array(
        'title'       => __( 'Copyright text (right)', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Write your own copyright text. This text will be shown at the bottom of the website on the right side.', 'infiword' ),
    ) );
    
    /* Front page options */

    //Slider for front page
    $wp_customize->add_section( 'infiword_front_page_slider_section' , array(
        'title'       => __( 'Slider for front page', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose whether you want a slider for the front page.', 'infiword' ),
    ) );
          
    //Pinterest style front page
    $wp_customize->add_section( 'infiword_front_page_layout_pinterest_section' , array(
        'title'       => __( 'Pinterest style', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose whether you want a Pinterest style grid layout for the front page.', 'infiword' ),
    ) );
    
    //Front page column number
    $wp_customize->add_section( 'infiword_front_page_column_count_section' , array(
        'title'       => __( 'Column number', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose the number of columns for the front page.', 'infiword' ),
    ) );
    
    //Front page layout
    $wp_customize->add_section( 'infiword_front_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose the layout that you want to use for the front page. This option is valid only if the Pinterest style for the front page is set to off.', 'infiword' ),
    ) );
    

    /* Blog page options */
          
    //Blog page layout
    $wp_customize->add_section( 'infiword_blog_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose the layout that you want to use for the blog posts page.', 'infiword' ),
    ) );
    
    //Related posts
    $wp_customize->add_section( 'infiword_show_related_posts_section' , array(
        'title'       => __( 'Related posts', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show related post after the end of every post or not.', 'infiword' ),
    ) );
    
    //Post navigation after every posts
    $wp_customize->add_section( 'infiword_post_navigation_section' , array(
        'title'       => __( 'Post navigation', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show next and previous posts after the end of every post or not.', 'infiword' ),
    ) );
    
    //Post tags after every posts
    $wp_customize->add_section( 'infiword_post_tags_section' , array(
        'title'       => __( 'Post tags', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show post tags after the end of every post or not.', 'infiword' ),
    ) );
    
    //Author bio
    $wp_customize->add_section( 'infiword_author_bio_section' , array(
        'title'       => __( 'Author panel', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show author bio after the end of every post or not.', 'infiword' ),
    ) );

    /* Author page options */
          
    //Author page layout
    $wp_customize->add_section( 'infiword_author_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'author_page',
        'description' => __( 'Choose the layout that you want to use for the Author posts page.', 'infiword' ),
    ) );

    /* Search page options */
          
    //Search page layout
    $wp_customize->add_section( 'infiword_search_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'search_page',
        'description' => __( 'Choose the layout that you want to use for the Search posts page.', 'infiword' ),
    ) );

    /* Category page options */
          
    //Category page layout
    $wp_customize->add_section( 'infiword_category_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'category_page',
        'description' => __( 'Choose the layout that you want to use for the Category posts page.', 'infiword' ),
    ) );

    /* Tag page options */
          
    //Tag page layout
    $wp_customize->add_section( 'infiword_tag_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'tag_page',
        'description' => __( 'Choose the layout that you want to use for the Tag posts page.', 'infiword' ),
    ) );
    
    /* Woocommerce page options */
          
    //Woocommerce page layout
    $wp_customize->add_section( 'infiword_woocommerce_page_layout_section' , array(
        'title'       => __( 'Layout', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'woocommerce_page',
        'description' => __( 'Choose the layout that you want to use for the woocommerce posts page.', 'infiword' ),
    ) );
    
    /* Social buttons options*/
    
    //Social buttons
    $wp_customize->add_section( 'infiword_social_buttons_section' , array(
        'title'       => __( 'Social buttons', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Social buttons for your website.', 'infiword' ),
    ) );
    
    //Facebook
    $wp_customize->add_section( 'infiword_social_buttons_facebook_section' , array(
        'title'       => __( 'Facebook', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Facebook url.', 'infiword' ),
    ) );
    
    //Twitter
    $wp_customize->add_section( 'infiword_social_buttons_twitter_section' , array(
        'title'       => __( 'Twitter', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Twitter url.', 'infiword' ),
    ) );
    
    //Linkedin
    $wp_customize->add_section( 'infiword_social_buttons_linkedin_section' , array(
        'title'       => __( 'LinkedIn', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full LinkedIn url.', 'infiword' ),
    ) );
    
    //Google-plus
    $wp_customize->add_section( 'infiword_social_buttons_google_plus_section' , array(
        'title'       => __( 'Google Plus', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Google Plus url.', 'infiword' ),
    ) );
    
    //Pinterest
    $wp_customize->add_section( 'infiword_social_buttons_pinterest_section' , array(
        'title'       => __( 'Pinterest', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Pinterest url.', 'infiword' ),
    ) );
    
    //Medium
    $wp_customize->add_section( 'infiword_social_buttons_medium_section' , array(
        'title'       => __( 'Medium', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Medium url.', 'infiword' ),
    ) );
    
    //Github
    $wp_customize->add_section( 'infiword_social_buttons_github_section' , array(
        'title'       => __( 'Github', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Github url.', 'infiword' ),
    ) );
    
    //Youtube
    $wp_customize->add_section( 'infiword_social_buttons_youtube_section' , array(
        'title'       => __( 'Youtube', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Youtube url.', 'infiword' ),
    ) );
    
    //index page post title font
    $wp_customize->add_section( 'infiword_index_page_post_title_font_section' , array(
        'title'       => __( 'Index Page Post Title font', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Index Page Post Title font', 'infiword' ),
    ) );
    
    //blog page post body font
    $wp_customize->add_section( 'infiword_blog_page_post_body_font_section' , array(
        'title'       => __( 'Blog page post body font', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Blog page post body font', 'infiword' ),
    ) );
    
    //blog page post title font
    $wp_customize->add_section( 'infiword_blog_page_post_title_font_section' , array(
        'title'       => __( 'Blog page post title font', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Blog page post title font', 'infiword' ),
    ) );
    
    //General font section
    $wp_customize->add_section( 'infiword_general_font_section' , array(
        'title'       => __( 'General font', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'General font', 'infiword' ),
    ) );

    //Background section
    $wp_customize->add_section( 'infiword_background_section' , array(
        'title'       => __( 'Background', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Background color of the body', 'infiword' ),
    ) );
    
    //Custom Home page slider 1
    /*$wp_customize->add_section( 'infiword_custom_home_page_slider_1_section' , array(
        'title'       => __( 'Slider 1', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Show a slider on the front page. This slider will be shown above all the post excerpts but below the navigation.', 'infiword' ),
    ) );*/
    
    //Custom Home page slider 2
    /*$wp_customize->add_section( 'infiword_custom_home_page_slider_2_section' , array(
        'title'       => __( 'Slider 2', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Show a slider on the front page. This slider will be shown above all the post excerpts but below the navigation.', 'infiword' ),
    ) );*/

    //Custom Home page carousel 1
    /*$wp_customize->add_section( 'infiword_custom_home_page_carousel_1_section' , array(
        'title'       => __( 'Carousel 1', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Show a carousel on the front page. This carousel will be shown above all the post excerpts but below the navigation.', 'infiword' ),
    ) );*/

    //Custom Home page header 1 text
    /*$wp_customize->add_section( 'infiword_custom_homepage_header_section-1_section' , array(
        'title'       => __( 'Section 1', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 1.', 'infiword' ),
    ) );*/

    //Custom Home page header 2 text
    /*$wp_customize->add_section( 'infiword_custom_homepage_header_section-2_section' , array(
        'title'       => __( 'Section 2', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 2.', 'infiword' ),
    ) );*/

    //Custom Home page header 3 text
    /*$wp_customize->add_section( 'infiword_custom_homepage_header_section-3_section' , array(
        'title'       => __( 'Section 3', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 3.', 'infiword' ),
    ) );*/

    //Custom Home page header 4 text
    /*$wp_customize->add_section( 'infiword_custom_homepage_header_section-4_section' , array(
        'title'       => __( 'Section 4', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 4.', 'infiword' ),
    ) );*/

    //Custom Home page header 5 text
    /*$wp_customize->add_section( 'infiword_custom_homepage_header_section-5_section' , array(
        'title'       => __( 'Section 5', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 5.', 'infiword' ),
    ) );*/

    //Custom Home page header 6 text
    /*$wp_customize->add_section( 'infiword_custom_homepage_header_section-6_section' , array(
        'title'       => __( 'Section 6', 'infiword' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 6.', 'infiword' ),
    ) );*/

}

add_action( 'customize_register', 'infiword_panels_sections' );


/**
 * Add our controls.
 */
function infiword_controls( $controls ) {
 
    //logo control
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_logo',
        'label'       => __( 'Upload your logo.', 'infiword' ),
        'description' => __( 'Please choose an image with atleast 200px width and 100px height for proper display of your logo.', 'infiword' ),
        'section'     => 'logo_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //logo width control
    $controls[] = array(
        'type'        => 'number',
        'settings'     => 'infiword_logo_width',
        'label'       => __( 'Edit the width of your logo.', 'infiword' ),
        'description' => __( 'Please choose a width between 200px and 400px for proper display of your logo.', 'infiword' ),
        'section'     => 'logo_size_section',
        'default'     => 200,
        'priority'    => 10,
    );
    
    //logo height control
    $controls[] = array(
        'type'        => 'number',
        'settings'     => 'infiword_logo_height',
        'label'       => __( 'Edit the height of your logo.', 'infiword' ),
        'description' => __( 'Please choose a width between 100px and 200px for proper display of your logo.', 'infiword' ),
        'section'     => 'logo_size_section',
        'default'     => 100,
        'priority'    => 10,
    );

    //search bar control
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_show_search_bar',
        'label'       => __( 'Show the search bar.', 'infiword' ),
        'description' => __( 'Choose yes if you want to show the search bar.', 'infiword' ),
        'section'     => 'search_bar_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );

    //header ads control
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_header_advertisement',
        'label'       => __( 'Header ad image', 'infiword' ),
        'description' => __( 'Upload the image for the advertisement in the header.', 'infiword' ),
        'section'     => 'header_ads_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //header ads link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_header_advertisement_link',
        'label'       => __( 'Header ad link', 'infiword' ),
        'description' => __( 'Type the url that the visitor will visit on clicking the header ad.', 'infiword' ),
        'section'     => 'header_ads_section',
        'default'     => '',
        'priority'    => 10,
    );

    // Custom Header image
    $controls[] = array(
        'type'        => 'image',
        'settings'    => 'infiword_custom_header_image',
        'label'       => __( 'Custom header image', 'infiword' ),
        'description' => __( 'Choose the image for your custom header.', 'infiword' ),
        'section'     => 'infiword_custom_header_image_section',
        'default'     => '',
        'priority'    => 10,
    );

    // Custom Header background
    $controls[] = array(
        'type'        => 'background',
        'settings'    => 'infiword_header_background',
        'label'       => __( 'Header background', 'infiword' ),
        'description' => __( 'Customize your header.', 'infiword' ),
        'section'     => 'infiword_background_section',
        'default'     => array(
            'color'    => 'rgba(99,193,255,1)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => 'header.contain-to-grid',
    );
    
    //footer advertisement count control
    $controls[] = array(
        'type'        => 'radio',
        'settings'    => 'infiword_footer_advertisement_count',
        'label'       => __( 'Footer ads count', 'infiword' ),
        'description' => __( 'Choose the number of ads to be shown on the footer.', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_count_section',
        'default'     => 'off',
        'priority'    => 10,
        'choices'     => array(
            'off' => __( 'Off', 'infiword' ),
            'one' => __( 'One', 'infiword' ),
            'two' => __( 'Two', 'infiword' ),
            'three' => __( 'Three', 'infiword' ),
            'four' => __( 'Four', 'infiword' ),
        ),
    );
    
    //footer ads (one)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_footer_advertisement_one',
        'label'       => __( 'Footer ad (one)', 'infiword' ),
        'description' => __( 'Choose the image to be shown on Footer ad (one).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_one_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (one) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_footer_advertisement_one_link',
        'label'       => __( 'Footer ad (one) link', 'infiword' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (one).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_one_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (two)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_footer_advertisement_two',
        'label'       => __( 'Footer ad (two)', 'infiword' ),
        'description' => __( 'Choose the image to be shown on Footer ad (two).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_two_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (two) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_footer_advertisement_two_link',
        'label'       => __( 'Footer ad (two) link', 'infiword' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (two).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_two_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (three)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_footer_advertisement_three',
        'label'       => __( 'Footer ad (three)', 'infiword' ),
        'description' => __( 'Choose the image to be shown on Footer ad (three).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_three_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (three) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_footer_advertisement_three_link',
        'label'       => __( 'Footer ad (three) link', 'infiword' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (three).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_three_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (four)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_footer_advertisement_four',
        'label'       => __( 'Footer ad (four)', 'infiword' ),
        'description' => __( 'Choose the image to be shown on Footer ad (four).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_four_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (four) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_footer_advertisement_four_link',
        'label'       => __( 'Footer ad (four) link', 'infiword' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (four).', 'infiword' ),
        'section'     => 'infiword_footer_advertisement_four_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //back to top button control
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_footer_back_to_top',
        'label'       => __( 'Back to top', 'infiword' ),
        'description' => __( 'Show the back to top button.', 'infiword' ),
        'section'     => 'infiword_footer_back_to_top_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );
    
    //footer copyright text (left)
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_footer_copyright_text_left',
        'label'       => __( 'Footer copyright text (left)', 'infiword' ),
        'description' => __( 'Type what you want to be shown on the left side of the footer.', 'infiword' ),
        'section'     => 'infiword_footer_copyright_text_left_section',
        'default'     => 'This is some default text',
        'priority'    => 10,
    );
    
    //footer copyright text (right)
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_footer_copyright_text_right',
        'label'       => __( 'Footer copyright text (right)', 'infiword' ),
        'description' => __( 'Type what you want to be shown on the right side of the footer.', 'infiword' ),
        'section'     => 'infiword_footer_copyright_text_right_section',
        'default'     => 'This is some default text',
        'priority'    => 10,
    );
    
    //front page slider
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_front_page_slider',
        'label'       => __( 'Front page slider', 'infiword' ),
        'description' => __( 'Choose whether to use the front page slider or not.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => 'off',
        'priority'    => 10,
        'choices'     => array(
            'on' => __( 'On', 'infiword' ),
            'off' => __( 'Off', 'infiword' ),
        ),
    );

    // front page slider 1 image 1
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_front_page_slider_1_image_1',
        'label'       => __( 'Front page slider 1 image 1', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 1 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_front_page_slider_1_image_1_link',
        'label'       => __( 'Front page slider 1 image 1 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 2
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_front_page_slider_1_image_2',
        'label'       => __( 'Front page slider 1 image 2', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 2 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_front_page_slider_1_image_2_link',
        'label'       => __( 'Front page slider 1 image 2 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // front page slider 1 image 3
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_front_page_slider_1_image_3',
        'label'       => __( 'Front page slider 1 image 3', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 3 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_front_page_slider_1_image_3_link',
        'label'       => __( 'Front page slider 1 image 3 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // front page slider 1 image 4
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_front_page_slider_1_image_4',
        'label'       => __( 'Front page slider 1 image 4', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 4 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_front_page_slider_1_image_4_link',
        'label'       => __( 'Front page slider 1 image 4 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 1 image 5
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_front_page_slider_1_image_5',
        'label'       => __( 'Front page slider 1 image 5', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 5 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_front_page_slider_1_image_5_link',
        'label'       => __( 'Front page slider 1 image 5 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );

    //pinterest style front page control
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_front_page_layout_pinterest',
        'label'       => __( 'Pinterest style', 'infiword' ),
        'description' => __( 'Choose whether to use the Pinterest style or not.', 'infiword' ),
        'section'     => 'infiword_front_page_layout_pinterest_section',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => array(
            'on' => __( 'On', 'infiword' ),
            'off' => __( 'Off', 'infiword' ),
        ),
    );
    
    //Front page column number
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_front_page_column_count',
        'label'       => __( 'Front page column number', 'infiword' ),
        'description' => __( 'Number of columns for the front page.', 'infiword' ),
        'section'     => 'infiword_front_page_column_count_section',
        'default'     => 'three',
        'priority'    => 10,
        'choices'     => array(
            'one' => __( 'One', 'infiword' ),
            'two' => __( 'Two', 'infiword' ),
            'three' => __( 'Three', 'infiword' ),
        ),
    );
    
    //Front page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_front_page_layout',
        'label'       => __( 'Front page layout', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_front_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );

    //Blog page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_blog_page_layout',
        'label'       => __( 'Blog page layout', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_blog_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );

    //Author page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_author_page_layout',
        'label'       => __( 'Author page layout', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_author_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );

    //Search page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_search_page_layout',
        'label'       => __( 'Search page layout', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_search_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );

    //Category page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_category_page_layout',
        'label'       => __( 'Category page layout', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_category_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );

    //Tag page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_tag_page_layout',
        'label'       => __( 'Tag page layout', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_tag_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );
    
    //Related posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_show_related_posts',
        'label'       => __( 'Related posts', 'infiword' ),
        'description' => __( 'Choose whether to show related posts or not.', 'infiword' ),
        'section'     => 'infiword_show_related_posts_section',
        'default'     => 'tags',
        'priority'    => 10,
        'choices'     => array(
            'tags' => __( 'Tags', 'infiword' ),
            'category' => __( 'Category', 'infiword' ),
            'off' => __( 'Off', 'infiword' ),
        ),
    );
    
    //Post navigation after every posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_post_navigation',
        'label'       => __( 'Post navigation after every posts', 'infiword' ),
        'description' => __( 'Choose whether to show post navigation after every posts or not.', 'infiword' ),
        'section'     => 'infiword_post_navigation_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );
    
    //Post tags after every posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_post_tags',
        'label'       => __( 'Post tags after every posts', 'infiword' ),
        'description' => __( 'Choose whether to show post tags after every posts or not.', 'infiword' ),
        'section'     => 'infiword_post_tags_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );
    
    //author bio
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_author_bio',
        'label'       => __( 'Author bio', 'infiword' ),
        'description' => __( 'Choose whether to show author bio or not.', 'infiword' ),
        'section'     => 'infiword_author_bio_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );
    
    //Woocommerce page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'infiword_woocommerce_page_layout',
        'label'       => __( 'Woocommerce page layout.', 'infiword' ),
        'description' => __( 'Choose the layout.', 'infiword' ),
        'section'     => 'infiword_woocommerce_page_layout_section',
        'default'     => 'right-sidebar',
        'priority'    => 10,
        'choices'     => array(
            'right-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cr.png',
            'left-sidebar' => get_template_directory_uri() . '/kirki/assets/images/2cl.png',
            'full-width' => get_template_directory_uri() . '/kirki/assets/images/1c.png',
            'dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cm.png',
            'left-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cl.png',
            'right-dual-sidebar' => get_template_directory_uri() . '/kirki/assets/images/3cr.png',
        ),
    );
    
    //show social buttons
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_social_buttons',
        'label'       => __( 'Social buttons', 'infiword' ),
        'description' => __( 'Choose whether to show social buttons or not.', 'infiword' ),
        'section'     => 'infiword_social_buttons_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );
    
    //facebook url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_facebook',
        'label'       => __( 'Facebook url', 'infiword' ),
        'description' => __( 'Type in the full Facebook url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_facebook_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //twitter url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_twitter',
        'label'       => __( 'Twitter url', 'infiword' ),
        'description' => __( 'Type in the full Twitter url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_twitter_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //linkedin url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_linkedin',
        'label'       => __( 'Linkedin url', 'infiword' ),
        'description' => __( 'Type in the full Linkedin url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_linkedin_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //pinterest url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_pinterest',
        'label'       => __( 'Pinterest url', 'infiword' ),
        'description' => __( 'Type in the full Pinterest url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_pinterest_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //github url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_github',
        'label'       => __( 'Github url', 'infiword' ),
        'description' => __( 'Type in the full Github url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_github_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //medium url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_medium',
        'label'       => __( 'Medium url', 'infiword' ),
        'description' => __( 'Type in the full Medium url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_medium_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //google plus url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_google_plus',
        'label'       => __( 'Google Plus url', 'infiword' ),
        'description' => __( 'Type in the full Google Plus url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_google_plus_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //youtube url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_social_buttons_youtube',
        'label'       => __( 'Youtube url', 'infiword' ),
        'description' => __( 'Type in the full Youtube url.', 'infiword' ),
        'section'     => 'infiword_social_buttons_youtube_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Category, tag, search and author page description background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_category_tag_search_author_background',
        'label'    => __( 'Category, tag, search and author page description background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => 'rgba(99,193,255,1)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => '.tag-query, .category-query, .author-query, .search-query',
    );

    //Body background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_body_background',
        'label'    => __( 'Body background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => '#ededed',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => 'body',
    );

    //Article background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_article_background',
        'label'    => __( 'Article background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => '#fff',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => '.page-card',
    );

    //Sidebar background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_sidebar_background',
        'label'    => __( 'Sidebar background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => 'rgba(255, 255, 255, 0.5)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => '#left-sidebar .panel, #left-dual-sidebar .panel, #sidebar .panel',
    );

    //Footer background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_footer_background',
        'label'    => __( 'Footer background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => '#faf9f9',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => '.full-width.footer-widget',
    );

    //Footer advertisement background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_footer_advertisement_background',
        'label'    => __( 'Footer advertisement background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => '#333',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => 'footer.full-width',
    );

    //Footer copyright background
    $controls[] = array(
        'type'     => 'background',
        'settings'  => 'infiword_footer_copyright_background',
        'label'    => __( 'Footer copyright background', 'infiword' ),
        'section'  => 'infiword_background_section',
        'default'     => array(
            'color'    => '#33363b',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
            'opacity'  => 100
        ),
        'priority'    => 10,
        'output'      => 'footer.full-width.copyright',
    );
    
    //Font color
    /*$controls[] = array(
        'type'     => 'color',
        'settings'  => 'infiword_general_font_color',
        'label'    => __( 'Font Color', 'infiword' ),
        'section'  => 'infiword_general_font_section',
        'default'     => '#de3495',
        'priority'    => 10,
     );*/
    
    // general font
    $controls[] = array(
        'type'     => 'select',
        'settings'  => 'infiword_general_font_family',
        'label'    => __( 'Font Family', 'infiword' ),
        'section'  => 'infiword_general_font_section',
        'default'  => 'Open Sans',
        'priority' => 20,
        'choices'  => Kirki_Fonts::get_font_choices(),
        'output' => array(
            'element'  => 'body, h1, h2, h3, h4, h5, h6, a, p',
            'property' => 'font-family',
        ),
     );

    // general font
    $controls[] = array(
        'type'     => 'multicheck',
        'settings'  => 'infiword_general_body_font_subsets',
        'label'    => __( 'Google-Font subsets', 'infiword' ),
        'description' => __( 'The subsets used from Google\'s API.', 'infiword' ),
        'section'  => 'infiword_general_font_section',
        'default'  => 'all',
        'priority' => 22,
        'choices'  => Kirki_Fonts::get_google_font_subsets(),
        'output' => array(
            'element'  => 'body, h1, h2, h3, h4, h5, h6, a, p',
            'property' => 'font-subset',
        ),
    );

    // general font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_general_font_weight',
        'label'    => __( 'Font Weight', 'infiword' ),
        'section'  => 'infiword_general_font_section',
        'default'  => 400,
        'priority' => 24,
        'choices'  => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
        'output' => array(
            'element'  => 'body, h1, h2, h3, h4, h5, h6, a, p',
            'property' => 'font-weight',
        ),
     );

    // general font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_general_font_size',
        'label'    => __( 'Font Size', 'infiword' ),
        'section'  => 'infiword_general_font_section',
        'default'  => 16,
        'priority' => 25,
        'choices'  => array(
            'min'  => 7,
            'max'  => 48,
            'step' => 1,
        ),
        'output' => array(
            'element'  => 'body, h1, h2, h3, h4, h5, h6, a, p',
            'property' => 'font-size',
            'units'    => 'px',
        ),
     );
    
    // index page post title font
    $controls[] = array(
        'type'     => 'select',
        'settings'  => 'infiword_index_page_post_title_font_family',
        'label'    => __( 'Font Family', 'infiword' ),
        'section'  => 'infiword_index_page_post_title_font_section',
        'default'  => 'Open Sans',
        'priority' => 20,
        'choices'  => Kirki_Fonts::get_font_choices(),
        'output' => array(
            'element'  => '.post-entry-meta h2 a',
            'property' => 'font-family',
        ),
     );

    // index page post title font
    $controls[] = array(
        'type'     => 'multicheck',
        'settings'  => 'infiword_index_page_post_title_font_subsets',
        'label'    => __( 'Google-Font subsets', 'infiword' ),
        'description' => __( 'The subsets used from Google\'s API.', 'infiword' ),
        'section'  => 'infiword_index_page_post_title_font_section',
        'default'  => 'all',
        'priority' => 22,
        'choices'  => Kirki_Fonts::get_google_font_subsets(),
        'output' => array(
            'element'  => '.post-entry-meta h2 a',
            'property' => 'font-subset',
        ),
    );

    // index page post title font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_index_page_post_title_font_weight',
        'label'    => __( 'Font Weight', 'infiword' ),
        'section'  => 'infiword_index_page_post_title_font_section',
        'default'  => 700,
        'priority' => 24,
        'choices'  => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
        'output' => array(
            'element'  => '.post-entry-meta h2 a',
            'property' => 'font-weight',
        ),
     );

    // index page post title font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_index_page_post_title_font_size',
        'label'    => __( 'Font Size', 'infiword' ),
        'section'  => 'infiword_index_page_post_title_font_section',
        'default'  => 34,
        'priority' => 25,
        'choices'  => array(
            'min'  => 7,
            'max'  => 48,
            'step' => 1,
        ),
        'output' => array(
            'element'  => '.post-entry-meta h2 a',
            'property' => 'font-size',
            'units'    => 'px',
        ),
     );
    
    // blog page post body font
    $controls[] = array(
        'type'     => 'select',
        'settings'  => 'infiword_blog_page_post_body_font_family',
        'label'    => __( 'Font Family', 'infiword' ),
        'section'  => 'infiword_blog_page_post_body_font_section',
        'default'  => 'Open Sans',
        'priority' => 20,
        'choices'  => Kirki_Fonts::get_font_choices(),
        'output' => array(
            'element'  => '.entry-content p, .entry-content ul, .entry-content dl, .entry-content ol, .entry-content a',
            'property' => 'font-family',
        ),
     );

    // blog page post body font
    $controls[] = array(
        'type'     => 'multicheck',
        'settings'  => 'infiword_blog_page_post_body_font_subsets',
        'label'    => __( 'Google-Font subsets', 'infiword' ),
        'description' => __( 'The subsets used from Google\'s API.', 'infiword' ),
        'section'  => 'infiword_blog_page_post_body_font_section',
        'default'  => 'all',
        'priority' => 22,
        'choices'  => Kirki_Fonts::get_google_font_subsets(),
        'output' => array(
            'element'  => '.entry-content p, .entry-content ul, .entry-content dl, .entry-content ol, .entry-content a',
            'property' => 'font-subset',
        ),
    );

    // blog page post body font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_blog_page_post_body_font_weight',
        'label'    => __( 'Font Weight', 'infiword' ),
        'section'  => 'infiword_blog_page_post_body_font_section',
        'default'  => 400,
        'priority' => 24,
        'choices'  => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
        'output' => array(
            'element'  => '.entry-content p, .entry-content ul, .entry-content dl, .entry-content ol, .entry-content a',
            'property' => 'font-weight',
        ),
     );

    // blog page post body font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_blog_page_post_body_font_size',
        'label'    => __( 'Font Size', 'infiword' ),
        'section'  => 'infiword_blog_page_post_body_font_section',
        'default'  => 16,
        'priority' => 25,
        'choices'  => array(
            'min'  => 7,
            'max'  => 48,
            'step' => 1,
        ),
        'output' => array(
            'element'  => '.entry-content p, .entry-content ul, .entry-content dl, .entry-content ol, .entry-content a',
            'property' => 'font-size',
            'units'    => 'px',
        ),
     );
    
    // blog page post title font
    $controls[] = array(
        'type'     => 'select',
        'settings'  => 'infiword_blog_page_post_title_font_family',
        'label'    => __( 'Font Family', 'infiword' ),
        'section'  => 'infiword_blog_page_post_title_font_section',
        'default'  => 'Lato',
        'priority' => 20,
        'choices'  => Kirki_Fonts::get_font_choices(),
        'output' => array(
            'element'  => 'h2.entry-title',
            'property' => 'font-family',
        ),
     );

    // blog page post title font
    $controls[] = array(
        'type'     => 'multicheck',
        'settings'  => 'infiword_blog_page_post_title_font_subsets',
        'label'    => __( 'Google-Font subsets', 'infiword' ),
        'description' => __( 'The subsets used from Google\'s API.', 'infiword' ),
        'section'  => 'infiword_blog_page_post_title_font_section',
        'default'  => 'all',
        'priority' => 22,
        'choices'  => Kirki_Fonts::get_google_font_subsets(),
        'output' => array(
            'element'  => 'h2.entry-title',
            'property' => 'font-subset',
        ),
    );

    // blog page post title font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_blog_page_post_title_font_weight',
        'label'    => __( 'Font Weight', 'infiword' ),
        'section'  => 'infiword_blog_page_post_title_font_section',
        'default'  => 700,
        'priority' => 24,
        'choices'  => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
        'output' => array(
            'element'  => 'h2.entry-title',
            'property' => 'font-weight',
        ),
     );

    // blog page post title font
    $controls[] = array(
        'type'     => 'slider',
        'settings'  => 'infiword_blog_page_post_title_font_size',
        'label'    => __( 'Font Size', 'infiword' ),
        'section'  => 'infiword_blog_page_post_title_font_section',
        'default'  => 50,
        'priority' => 25,
        'choices'  => array(
            'min'  => 7,
            'max'  => 48,
            'step' => 1,
        ),
        'output' => array(
            'element'  => 'h2.entry-title',
            'property' => 'font-size',
            'units'    => 'px',
        ),
     );

    //Custom home page section 1 header text
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_homepage_header_section-1',
        'label'       => __( 'Custom home page section 1 header(string)', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page section 1 header text or not.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-1_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page section 2 header text
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_homepage_header_section-2',
        'label'       => __( 'Custom home page section 2 header(string)', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page section 2 header text or not.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-2_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page section 3 header text
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_homepage_header_section-3',
        'label'       => __( 'Custom home page section 3 header(string)', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page section 3 header text or not.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-3_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page section 4 header text
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_homepage_header_section-4',
        'label'       => __( 'Custom home page section 4 header(string)', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page section 4 header text or not.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-4_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page section 5 header text
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_homepage_header_section-5',
        'label'       => __( 'Custom home page section 5 header(string)', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page section 5 header text or not.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-5_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    /* ------------------------------------------------------------------------- *
     *  TODO: Issue reported in Kirki
    /* ------------------------------------------------------------------------- */
    
    //Custom home page section 5 editor
    /*$controls[] = array(
        'type'        => 'editor',
        'settings'     => 'infiword_custom_homepage_editor_section-5',
        'label'       => __( 'Custom home page section 6 editor text', 'infiword' ),
        'description' => __( 'Customize the section 5 with you editor text.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-5_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page section 6 header text
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_homepage_header_section-6',
        'label'       => __( 'Custom home page section 6 header(string)', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page section 6 header text or not.', 'infiword' ),
        'section'     => 'infiword_custom_homepage_header_section-6_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 1
    /*$controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_custom_home_page_slider_1',
        'label'       => __( 'Custom home page slider 1', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page slider 1 or not.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );*/
    
    // Custom home page slider 1 image 1
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_1_image_1',
        'label'       => __( 'Custom home page slider 1 image 1', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 1 image 1 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_1_image_1_link',
        'label'       => __( 'Custom home page slider 1 image 1 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 1 image 2
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_1_image_2',
        'label'       => __( 'Custom home page slider 1 image 2', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 1 image 2 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_1_image_2_link',
        'label'       => __( 'Custom home page slider 1 image 2 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 1 image 3
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_1_image_3',
        'label'       => __( 'Custom home page slider 1 image 3', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 1 image 3 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_1_image_3_link',
        'label'       => __( 'Custom home page slider 1 image 3 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 1 image 4
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_1_image_4',
        'label'       => __( 'Custom home page slider 1 image 4', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 1 image 4 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_1_image_4_link',
        'label'       => __( 'Custom home page slider 1 image 4 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 1 image 5
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_1_image_5',
        'label'       => __( 'Custom home page slider 1 image 5', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 1 image 5 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_1_image_5_link',
        'label'       => __( 'Custom home page slider 1 image 5 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 2
    /*$controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_custom_home_page_slider_2',
        'label'       => __( 'Custom home page slider 2', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page slider 2 or not.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );*/
    
    // Custom home page slider 2 image 1
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_2_image_1',
        'label'       => __( 'Custom home page slider 2 image 1', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 2 image 1 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_2_image_1_link',
        'label'       => __( 'Custom home page slider 2 image 1 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 2 image 2
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_2_image_2',
        'label'       => __( 'Custom home page slider 2 image 2', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 2 image 2 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_2_image_2_link',
        'label'       => __( 'Custom home page slider 2 image 2 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 2 image 3
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_2_image_3',
        'label'       => __( 'Custom home page slider 2 image 3', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 2 image 3 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_2_image_3_link',
        'label'       => __( 'Custom home page slider 2 image 3 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 2 image 4
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_2_image_4',
        'label'       => __( 'Custom home page slider 2 image 4', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 2 image 4 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_2_image_4_link',
        'label'       => __( 'Custom home page slider 2 image 4 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page slider 2 image 5
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_slider_2_image_5',
        'label'       => __( 'Custom home page slider 2 image 5', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page slider 2 image 5 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_slider_2_image_5_link',
        'label'       => __( 'This is the label', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page carousel 1
    /*$controls[] = array(
        'type'        => 'radio',
        'settings'     => 'infiword_custom_home_page_carousel_1',
        'label'       => __( 'Custom home page carousel 1', 'infiword' ),
        'description' => __( 'Choose whether to show the custom home page carousel 1 or not.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'infiword' ),
            'no' => __( 'No', 'infiword' ),
        ),
    );*/
    
    // Custom home page carousel 1 image 1
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_1',
        'label'       => __( 'Custom home page carousel 1 image 1', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page carousel 1 image 1 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_1_link',
        'label'       => __( 'Custom home page carousel 1 image 1 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page carousel 1 image 2
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_2',
        'label'       => __( 'Custom home page carousel 1 image 2', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page carousel 1 image 2 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_2_link',
        'label'       => __( 'Custom home page carousel 1 image 2 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page carousel 1 image 3
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_3',
        'label'       => __( 'Custom home page carousel 1 image 3', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page carousel 1 image 3 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_3_link',
        'label'       => __( 'Custom home page carousel 1 image 3 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page carousel 1 image 4
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_4',
        'label'       => __( 'Custom home page carousel 1 image 4', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page carousel 1 image 4 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_4_link',
        'label'       => __( 'Custom home page carousel 1 image 4 link', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    // Custom home page carousel 1 image 5
    /*$controls[] = array(
        'type'        => 'image',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_5',
        'label'       => __( 'Custom home page carousel 1 image 5', 'infiword' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/
    
    //Custom home page carousel 1 image 5 link
    /*$controls[] = array(
        'type'        => 'text',
        'settings'     => 'infiword_custom_home_page_carousel_1_image_5_link',
        'label'       => __( 'This is the label', 'infiword' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'infiword' ),
        'section'     => 'infiword_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    return $controls;

}

add_filter( 'kirki/controls', 'infiword_controls' );

/**
 * Configuration sample for the infiword Customizer
 */
function infiword_configuration_sample() {

    $args = array(
        'logo_image'   => get_template_directory_uri() . '/images/infiword-logo.png',
        'description'  => __( 'Infiword is a versatile HTML5 responsive WordPress theme based on ZURB Foundation. Infiword is mostly suitable for a magazine layout website. Infiword is highly customizable through the WordPress Customizer option.', 'infiword' ),

    );

    return $args;

}

add_filter( 'kirki/config', 'infiword_configuration_sample' );

?>