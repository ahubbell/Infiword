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
function foundationbuddy_panels_sections( $wp_customize ) {
    /**
     * Add panels
     */

    //General panel
    $wp_customize->add_panel( 'general', array(
        'priority'    => 10,
        'title'       => __( 'General', 'foundationbuddy' ),
        'description' => __( 'Upload your logo, favicon and set up your search bar.', 'foundationbuddy' ),
    ) );
    
    //Header panel
    $wp_customize->add_panel( 'header', array(
        'priority'    => 10,
        'title'       => __( 'Header', 'foundationbuddy' ),
        'description' => __( 'Upload a header image, add header ads and custom CSS to the head of your website.', 'foundationbuddy' ),
    ) );
    
    //Footer panel
    $wp_customize->add_panel( 'footer', array(
        'priority'    => 10,
        'title'       => __( 'Footer', 'foundationbuddy' ),
        'description' => __( 'Add ads or copyright text in the footer of your website.', 'foundationbuddy' ),
    ) );
    
    //Front page panel
    $wp_customize->add_panel( 'front_page', array(
        'priority'    => 10,
        'title'       => __( 'Front Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the front page of your website.', 'foundationbuddy' ),
    ) );
    
    //Blog page panel
    $wp_customize->add_panel( 'blog_page', array(
        'priority'    => 10,
        'title'       => __( 'Blog Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the blog page of your website.', 'foundationbuddy' ),
    ) );

    //Search page panel
    $wp_customize->add_panel( 'search_page', array(
        'priority'    => 10,
        'title'       => __( 'Search Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the Search page of your website.', 'foundationbuddy' ),
    ) );

    //Author page panel
    $wp_customize->add_panel( 'author_page', array(
        'priority'    => 10,
        'title'       => __( 'Author Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the Author page of your website.', 'foundationbuddy' ),
    ) );
    
    //Portfolio page panel
    $wp_customize->add_panel( 'portfolio_page', array(
        'priority'    => 10,
        'title'       => __( 'Portfolio Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the portfolio page of your website.', 'foundationbuddy' ),
    ) );
    
    //Woocommerce page panel
    $wp_customize->add_panel( 'woocommerce_page', array(
        'priority'    => 10,
        'title'       => __( 'Woocommerce Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the woocommerce page of your website.', 'foundationbuddy' ),
    ) );
    
    //Custom home page panel
    $wp_customize->add_panel( 'custom_home_page', array(
        'priority'    => 10,
        'title'       => __( 'Custom home Page', 'foundationbuddy' ),
        'description' => __( 'Edit the layout of the home page of your website.', 'foundationbuddy' ),
    ) );

    //Social buttons panel
    $wp_customize->add_panel( 'social_buttons', array(
        'priority'    => 10,
        'title'       => __( 'Social Buttons', 'foundationbuddy' ),
        'description' => __( 'Add social buttons in your website.', 'foundationbuddy' ),
    ) );
    
    //Custom style panel
    $wp_customize->add_panel( 'custom_style', array(
        'priority'    => 10,
        'title'       => __( 'Custom Style', 'foundationbuddy' ),
        'description' => __( 'Edit the custom style of your website.', 'foundationbuddy' ),
    ) );

    
    /**
     * Add sections
     */

    /* General */
    
    //Logo section
    $wp_customize->add_section( 'logo_section' , array(
        'title'       => __( 'Logo', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Upload a logo to replace the default site name and description in the header', 'foundationbuddy' ),
    ) );
    
    //Logo size section (height and width of the logo)
    $wp_customize->add_section( 'logo_size_section' , array(
        'title'       => __( 'Logo size', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Change the height and width of your logo.', 'foundationbuddy' ),
    ) );
    
    //Search bar section
    $wp_customize->add_section( 'search_bar_section' , array(
        'title'       => __( 'Search bar', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Choose whether you want to show a search bar at the right of the primary navigation or not. This search bar will be visible at the top right of the website. The primary navigation must be activated in order to show the search bar.', 'foundationbuddy' ),
    ) );
    
    /* Header */
    
    //Header ads section
    $wp_customize->add_section( 'header_ads_section' , array(
        'title'       => __( 'Header ads', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'header',
        'description' => __( 'Show an advertisement banner on the header beside the logo.', 'foundationbuddy' ),
    ) );
    
    // Custom Header image
    $wp_customize->add_section( 'foundationbuddy_custom_header_image_section' , array(
        'title'       => __( 'Header image', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'header',
        'description' => __( 'Upload your custom header image. This header image will be shown on all the pages of the website.', 'foundationbuddy' ),
    ) );

    // Header background
    $wp_customize->add_section( 'foundationbuddy_custom_header_background_section' , array(
        'title'       => __( 'Header background', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'header',
        'description' => __( 'Customize the background of your header.', 'foundationbuddy' ),
    ) );
    
    /* Footer */
    
    //Footer ads count section
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_count_section' , array(
        'title'       => __( 'Number of advertisements', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'The number of advertisements on the footer.', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (one)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_one_section' , array(
        'title'       => __( 'Advertisement 1', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (one) section.', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (two)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_two_section' , array(
        'title'       => __( 'Advertisement 2', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (two) section.', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (three)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_three_section' , array(
        'title'       => __( 'Advertisement 3', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (three) section.', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (four)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_four_section' , array(
        'title'       => __( 'Advertisement 4', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a image for the advertisement (four) section.', 'foundationbuddy' ),
    ) );
    
    //Back to top button
    $wp_customize->add_section( 'foundationbuddy_footer_back_to_top_section' , array(
        'title'       => __( 'Back to top', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Choose whether you want to show a back to top button or not. This button or link will be shown on the right side of the website and will be visible only after a certain amount of scroll.', 'foundationbuddy' ),
    ) );
    
    //Footer copyright text left
    $wp_customize->add_section( 'foundationbuddy_footer_copyright_text_left_section' , array(
        'title'       => __( 'Copyright text (left)', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Write your own copyright text. This text will be shown at the bottom of the website on the left side.', 'foundationbuddy' ),
    ) );
    
    //Footer copyright text right
    $wp_customize->add_section( 'foundationbuddy_footer_copyright_text_right_section' , array(
        'title'       => __( 'Copyright text (right)', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Write your own copyright text. This text will be shown at the bottom of the website on the right side.', 'foundationbuddy' ),
    ) );
    
    /* Front page options */

    //Slider for front page
    $wp_customize->add_section( 'foundationbuddy_front_page_slider_section' , array(
        'title'       => __( 'Slider for front page', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose whether you want a slider for the front page.', 'foundationbuddy' ),
    ) );
          
    //Pinterest style front page
    $wp_customize->add_section( 'foundationbuddy_front_page_layout_pinterest_section' , array(
        'title'       => __( 'Pinterest style', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose whether you want a Pinterest style grid layout for the front page.', 'foundationbuddy' ),
    ) );
    
    //Front page column number
    $wp_customize->add_section( 'foundationbuddy_front_page_column_count_section' , array(
        'title'       => __( 'Column number', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose the number of columns for the front page.', 'foundationbuddy' ),
    ) );
    
    //Front page layout
    $wp_customize->add_section( 'foundationbuddy_front_page_layout_section' , array(
        'title'       => __( 'Layout', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose the layout that you want to use for the front page. This option is valid only if the Pinterest style for the front page is set to off.', 'foundationbuddy' ),
    ) );
    

    /* Blog page options */
          
    //Blog page layout
    $wp_customize->add_section( 'foundationbuddy_blog_page_layout_section' , array(
        'title'       => __( 'Layout', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose the layout that you want to use for the blog posts page.', 'foundationbuddy' ),
    ) );
    
    //Featured images for available posts
    $wp_customize->add_section( 'foundationbuddy_post_show_featured_image_on_single_page_section' , array(
        'title'       => __( 'Featured images', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Show featured image within posts. This featured image will be shown above the post body just below the title of the post.', 'foundationbuddy' ),
    ) );
    
    //Related posts
    $wp_customize->add_section( 'foundationbuddy_show_related_posts_section' , array(
        'title'       => __( 'Related posts', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show related post after the end of every post or not.', 'foundationbuddy' ),
    ) );
    
    //Post navigation after every posts
    $wp_customize->add_section( 'foundationbuddy_post_navigation_section' , array(
        'title'       => __( 'Post navigation', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show next and previous posts after the end of every post or not.', 'foundationbuddy' ),
    ) );
    
    //Post tags after every posts
    $wp_customize->add_section( 'foundationbuddy_post_tags_section' , array(
        'title'       => __( 'Post tags', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show post tags after the end of every post or not.', 'foundationbuddy' ),
    ) );
    
    //Author bio
    $wp_customize->add_section( 'foundationbuddy_author_bio_section' , array(
        'title'       => __( 'Author panel', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show author bio after the end of every post or not.', 'foundationbuddy' ),
    ) );

    /* Author page options */
          
    //Author page layout
    $wp_customize->add_section( 'foundationbuddy_author_page_layout_section' , array(
        'title'       => __( 'Layout', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'author_page',
        'description' => __( 'Choose the layout that you want to use for the Author posts page.', 'foundationbuddy' ),
    ) );

    /* Search page options */
          
    //Search page layout
    $wp_customize->add_section( 'foundationbuddy_search_page_layout_section' , array(
        'title'       => __( 'Layout', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'search_page',
        'description' => __( 'Choose the layout that you want to use for the Search posts page.', 'foundationbuddy' ),
    ) );
    
    /* Portfolio page options */
    
    //Portfolio category slug
    $wp_customize->add_section( 'foundationbuddy_portfolio_category_slug_section' , array(
        'title'       => __( 'Portfolio category slug', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'portfolio_page',
        'description' => __( 'Write the Portfolio category slug.', 'foundationbuddy' ),
    ) );
    
    /* Woocommerce page options */
          
    //Woocommerce page layout
    $wp_customize->add_section( 'foundationbuddy_woocommerce_page_layout_section' , array(
        'title'       => __( 'Layout', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'woocommerce_page',
        'description' => __( 'Choose the layout that you want to use for the woocommerce posts page.', 'foundationbuddy' ),
    ) );
    
    /* Social buttons options*/
    
    //Social buttons
    $wp_customize->add_section( 'foundationbuddy_social_buttons_section' , array(
        'title'       => __( 'Social buttons', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Social buttons for your website.', 'foundationbuddy' ),
    ) );
    
    //Facebook
    $wp_customize->add_section( 'foundationbuddy_social_buttons_facebook_section' , array(
        'title'       => __( 'Facebook', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Facebook url.', 'foundationbuddy' ),
    ) );
    
    //Twitter
    $wp_customize->add_section( 'foundationbuddy_social_buttons_twitter_section' , array(
        'title'       => __( 'Twitter', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Twitter url.', 'foundationbuddy' ),
    ) );
    
    //Linkedin
    $wp_customize->add_section( 'foundationbuddy_social_buttons_linkedin_section' , array(
        'title'       => __( 'LinkedIn', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full LinkedIn url.', 'foundationbuddy' ),
    ) );
    
    //Google-plus
    $wp_customize->add_section( 'foundationbuddy_social_buttons_google_plus_section' , array(
        'title'       => __( 'Google Plus', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Google Plus url.', 'foundationbuddy' ),
    ) );
    
    //Pinterest
    $wp_customize->add_section( 'foundationbuddy_social_buttons_pinterest_section' , array(
        'title'       => __( 'Pinterest', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Pinterest url.', 'foundationbuddy' ),
    ) );
    
    //Medium
    $wp_customize->add_section( 'foundationbuddy_social_buttons_medium_section' , array(
        'title'       => __( 'Medium', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Medium url.', 'foundationbuddy' ),
    ) );
    
    //Github
    $wp_customize->add_section( 'foundationbuddy_social_buttons_github_section' , array(
        'title'       => __( 'Github', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Github url.', 'foundationbuddy' ),
    ) );
    
    //Youtube
    $wp_customize->add_section( 'foundationbuddy_social_buttons_youtube_section' , array(
        'title'       => __( 'Youtube', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Type the full Youtube url.', 'foundationbuddy' ),
    ) );
    
    //index page post title font
    $wp_customize->add_section( 'foundationbuddy_index_page_post_title_font_section' , array(
        'title'       => __( 'Index Page Post Title font', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Index Page Post Title font', 'foundationbuddy' ),
    ) );
    
    //blog page post body font
    $wp_customize->add_section( 'foundationbuddy_blog_page_post_body_font_section' , array(
        'title'       => __( 'Blog page post body font', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Blog page post body font', 'foundationbuddy' ),
    ) );
    
    //blog page post title font
    $wp_customize->add_section( 'foundationbuddy_blog_page_post_title_font_section' , array(
        'title'       => __( 'Blog page post title font', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'Blog page post title font', 'foundationbuddy' ),
    ) );
    
    //General font section
    $wp_customize->add_section( 'foundationbuddy_general_font_section' , array(
        'title'       => __( 'General font', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_style',
        'description' => __( 'General font', 'foundationbuddy' ),
    ) );
    
    //Custom Home page slider 1
    $wp_customize->add_section( 'foundationbuddy_custom_home_page_slider_1_section' , array(
        'title'       => __( 'Slider 1', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Show a slider on the front page. This slider will be shown above all the post excerpts but below the navigation.', 'foundationbuddy' ),
    ) );
    
    //Custom Home page slider 2
    $wp_customize->add_section( 'foundationbuddy_custom_home_page_slider_2_section' , array(
        'title'       => __( 'Slider 2', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Show a slider on the front page. This slider will be shown above all the post excerpts but below the navigation.', 'foundationbuddy' ),
    ) );

    //Custom Home page carousel 1
    $wp_customize->add_section( 'foundationbuddy_custom_home_page_carousel_1_section' , array(
        'title'       => __( 'Carousel 1', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Show a carousel on the front page. This carousel will be shown above all the post excerpts but below the navigation.', 'foundationbuddy' ),
    ) );

    //Custom Home page header 1 text
    $wp_customize->add_section( 'foundationbuddy_custom_homepage_header_section-1_section' , array(
        'title'       => __( 'Section 1', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 1.', 'foundationbuddy' ),
    ) );

    //Custom Home page header 2 text
    $wp_customize->add_section( 'foundationbuddy_custom_homepage_header_section-2_section' , array(
        'title'       => __( 'Section 2', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 2.', 'foundationbuddy' ),
    ) );

    //Custom Home page header 3 text
    $wp_customize->add_section( 'foundationbuddy_custom_homepage_header_section-3_section' , array(
        'title'       => __( 'Section 3', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 3.', 'foundationbuddy' ),
    ) );

    //Custom Home page header 4 text
    $wp_customize->add_section( 'foundationbuddy_custom_homepage_header_section-4_section' , array(
        'title'       => __( 'Section 4', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 4.', 'foundationbuddy' ),
    ) );

    //Custom Home page header 5 text
    $wp_customize->add_section( 'foundationbuddy_custom_homepage_header_section-5_section' , array(
        'title'       => __( 'Section 5', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 5.', 'foundationbuddy' ),
    ) );

    //Custom Home page header 6 text
    $wp_customize->add_section( 'foundationbuddy_custom_homepage_header_section-6_section' , array(
        'title'       => __( 'Section 6', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'custom_home_page',
        'description' => __( 'Header text for section 6.', 'foundationbuddy' ),
    ) );

}

add_action( 'customize_register', 'foundationbuddy_panels_sections' );


/**
 * Add our controls.
 */
function foundationbuddy_controls( $controls ) {
 
    //logo control
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_logo',
        'label'       => __( 'Upload your logo.', 'foundationbuddy' ),
        'description' => __( 'Please choose an image with atleast 200px width and 100px height for proper display of your logo.', 'foundationbuddy' ),
        'section'     => 'logo_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //logo width control
    $controls[] = array(
        'type'        => 'number',
        'settings'     => 'foundationbuddy_logo_width',
        'label'       => __( 'Edit the width of your logo.', 'foundationbuddy' ),
        'description' => __( 'Please choose a width between 200px and 400px for proper display of your logo.', 'foundationbuddy' ),
        'section'     => 'logo_size_section',
        'default'     => 200,
        'priority'    => 10,
    );
    
    //logo height control
    $controls[] = array(
        'type'        => 'number',
        'settings'     => 'foundationbuddy_logo_height',
        'label'       => __( 'Edit the height of your logo.', 'foundationbuddy' ),
        'description' => __( 'Please choose a width between 100px and 200px for proper display of your logo.', 'foundationbuddy' ),
        'section'     => 'logo_size_section',
        'default'     => 100,
        'priority'    => 10,
    );

    //search bar control
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_show_search_bar',
        'label'       => __( 'Show the search bar.', 'foundationbuddy' ),
        'description' => __( 'Choose yes if you want to show the search bar.', 'foundationbuddy' ),
        'section'     => 'search_bar_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );

    //header ads control
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_header_advertisement',
        'label'       => __( 'Header ad image', 'foundationbuddy' ),
        'description' => __( 'Upload the image for the advertisement in the header.', 'foundationbuddy' ),
        'section'     => 'header_ads_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //header ads link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_header_advertisement_link',
        'label'       => __( 'Header ad link', 'foundationbuddy' ),
        'description' => __( 'Type the url that the visitor will visit on clicking the header ad.', 'foundationbuddy' ),
        'section'     => 'header_ads_section',
        'default'     => '',
        'priority'    => 10,
    );

    // Custom Header image
    $controls[] = array(
        'type'        => 'image',
        'settings'    => 'foundationbuddy_custom_header_image',
        'label'       => __( 'Custom header image', 'foundationbuddy' ),
        'description' => __( 'Choose the image for your custom header.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_header_image_section',
        'default'     => '',
        'priority'    => 10,
    );

    /* ------------------------------------------------------------------------- *
     *  TODO: Issue reported in Kirki
    /* ------------------------------------------------------------------------- */

    // Custom Header background
    $controls[] = array(
        'type'        => 'background',
        'settings'    => 'foundationbuddy_custom_header_background',
        'label'       => __( 'Custom header background', 'foundationbuddy' ),
        'description' => __( 'Customize your header.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_header_background_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
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
        'settings'    => 'foundationbuddy_footer_advertisement_count',
        'label'       => __( 'Footer ads count', 'foundationbuddy' ),
        'description' => __( 'Choose the number of ads to be shown on the footer.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_count_section',
        'default'     => 'off',
        'priority'    => 10,
        'choices'     => array(
            'off' => __( 'Off', 'foundationbuddy' ),
            'one' => __( 'One', 'foundationbuddy' ),
            'two' => __( 'Two', 'foundationbuddy' ),
            'three' => __( 'Three', 'foundationbuddy' ),
            'four' => __( 'Four', 'foundationbuddy' ),
        ),
    );
    
    //footer ads (one)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_footer_advertisement_one',
        'label'       => __( 'Footer ad (one)', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on Footer ad (one).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_one_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (one) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_footer_advertisement_one_link',
        'label'       => __( 'Footer ad (one) link', 'foundationbuddy' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (one).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_one_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (two)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_footer_advertisement_two',
        'label'       => __( 'Footer ad (two)', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on Footer ad (two).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_two_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (two) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_footer_advertisement_two_link',
        'label'       => __( 'Footer ad (two) link', 'foundationbuddy' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (two).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_two_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (three)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_footer_advertisement_three',
        'label'       => __( 'Footer ad (three)', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on Footer ad (three).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_three_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (three) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_footer_advertisement_three_link',
        'label'       => __( 'Footer ad (three) link', 'foundationbuddy' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (three).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_three_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (four)
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_footer_advertisement_four',
        'label'       => __( 'Footer ad (four)', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on Footer ad (four).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_four_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (four) link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_footer_advertisement_four_link',
        'label'       => __( 'Footer ad (four) link', 'foundationbuddy' ),
        'description' => __( 'Type in the url that the user would visit on clicking the Footer ad (four).', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_four_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //back to top button control
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_footer_back_to_top',
        'label'       => __( 'Back to top', 'foundationbuddy' ),
        'description' => __( 'Show the back to top button.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_back_to_top_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    //footer copyright text (left)
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_footer_copyright_text_left',
        'label'       => __( 'Footer copyright text (left)', 'foundationbuddy' ),
        'description' => __( 'Type what you want to be shown on the left side of the footer.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_copyright_text_left_section',
        'default'     => 'This is some default text',
        'priority'    => 10,
    );
    
    //footer copyright text (right)
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_footer_copyright_text_right',
        'label'       => __( 'Footer copyright text (right)', 'foundationbuddy' ),
        'description' => __( 'Type what you want to be shown on the right side of the footer.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_copyright_text_right_section',
        'default'     => 'This is some default text',
        'priority'    => 10,
    );
    
    //front page slider
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_front_page_slider',
        'label'       => __( 'Front page slider', 'foundationbuddy' ),
        'description' => __( 'Choose whether to use the front page slider or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => 'off',
        'priority'    => 10,
        'choices'     => array(
            'on' => __( 'On', 'foundationbuddy' ),
            'off' => __( 'Off', 'foundationbuddy' ),
        ),
    );

    // front page slider 1 image 1
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_1',
        'label'       => __( 'Front page slider 1 image 1', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 1 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_1_link',
        'label'       => __( 'Front page slider 1 image 1 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 2
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_2',
        'label'       => __( 'Front page slider 1 image 2', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 2 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_2_link',
        'label'       => __( 'Front page slider 1 image 2 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // front page slider 1 image 3
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_3',
        'label'       => __( 'Front page slider 1 image 3', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 3 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_3_link',
        'label'       => __( 'Front page slider 1 image 3 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // front page slider 1 image 4
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_4',
        'label'       => __( 'Front page slider 1 image 4', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 4 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_4_link',
        'label'       => __( 'Front page slider 1 image 4 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 1 image 5
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_5',
        'label'       => __( 'Front page slider 1 image 5', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //front page slider 1 image 5 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_front_page_slider_1_image_5_link',
        'label'       => __( 'Front page slider 1 image 5 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_slider_section',
        'default'     => '',
        'priority'    => 10,
    );

    //pinterest style front page control
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_front_page_layout_pinterest',
        'label'       => __( 'Pinterest style', 'foundationbuddy' ),
        'description' => __( 'Choose whether to use the Pinterest style or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_layout_pinterest_section',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => array(
            'on' => __( 'On', 'foundationbuddy' ),
            'off' => __( 'Off', 'foundationbuddy' ),
        ),
    );
    
    //Front page column number
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_front_page_column_count',
        'label'       => __( 'Front page column number', 'foundationbuddy' ),
        'description' => __( 'Number of columns for the front page.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_column_count_section',
        'default'     => 'three',
        'priority'    => 10,
        'choices'     => array(
            'one' => __( 'One', 'foundationbuddy' ),
            'two' => __( 'Two', 'foundationbuddy' ),
            'three' => __( 'Three', 'foundationbuddy' ),
        ),
    );
    
    //Front page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'foundationbuddy_front_page_layout',
        'label'       => __( 'Front page layout', 'foundationbuddy' ),
        'description' => __( 'Choose the layout.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_layout_section',
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
        'settings'     => 'foundationbuddy_blog_page_layout',
        'label'       => __( 'Blog page layout', 'foundationbuddy' ),
        'description' => __( 'Choose the layout.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_blog_page_layout_section',
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
        'settings'     => 'foundationbuddy_author_page_layout',
        'label'       => __( 'Author page layout', 'foundationbuddy' ),
        'description' => __( 'Choose the layout.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_author_page_layout_section',
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
        'settings'     => 'foundationbuddy_search_page_layout',
        'label'       => __( 'Search page layout', 'foundationbuddy' ),
        'description' => __( 'Choose the layout.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_search_page_layout_section',
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
    
    //featured images for single posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_post_show_featured_image_on_single_page',
        'label'       => __( 'Featured images for single posts', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show featured images on single posts or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_post_show_featured_image_on_single_page_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    //Related posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_show_related_posts',
        'label'       => __( 'Related posts', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show related posts or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_show_related_posts_section',
        'default'     => 'tags',
        'priority'    => 10,
        'choices'     => array(
            'tags' => __( 'Tags', 'foundationbuddy' ),
            'category' => __( 'Category', 'foundationbuddy' ),
            'off' => __( 'Off', 'foundationbuddy' ),
        ),
    );
    
    //Post navigation after every posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_post_navigation',
        'label'       => __( 'Post navigation after every posts', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show post navigation after every posts or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_post_navigation_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    //Post tags after every posts
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_post_tags',
        'label'       => __( 'Post tags after every posts', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show post tags after every posts or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_post_tags_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    //author bio
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_author_bio',
        'label'       => __( 'Author bio', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show author bio or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_author_bio_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    //Woocommerce page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'settings'     => 'foundationbuddy_woocommerce_page_layout',
        'label'       => __( 'Woocommerce page layout.', 'foundationbuddy' ),
        'description' => __( 'Choose the layout.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_woocommerce_page_layout_section',
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
        'settings'     => 'foundationbuddy_social_buttons',
        'label'       => __( 'Social buttons', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show social buttons or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    //facebook url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_facebook',
        'label'       => __( 'Facebook url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Facebook url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_facebook_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //twitter url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_twitter',
        'label'       => __( 'Twitter url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Twitter url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_twitter_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //linkedin url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_linkedin',
        'label'       => __( 'Linkedin url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Linkedin url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_linkedin_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //pinterest url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_pinterest',
        'label'       => __( 'Pinterest url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Pinterest url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_pinterest_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //github url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_github',
        'label'       => __( 'Github url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Github url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_github_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //medium url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_medium',
        'label'       => __( 'Medium url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Medium url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_medium_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //google plus url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_google_plus',
        'label'       => __( 'Google Plus url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Google Plus url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_google_plus_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //youtube url
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_social_buttons_youtube',
        'label'       => __( 'Youtube url', 'foundationbuddy' ),
        'description' => __( 'Type in the full Youtube url.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_youtube_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Font color
    $controls[] = array(
        'type'     => 'color',
        'settings'  => 'foundationbuddy_general_font_color',
        'label'    => __( 'Font Color', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_general_font_section',
        'default'     => '#de3495',
        'priority'    => 10,
     );
    
    // general font
    $controls[] = array(
        'type'     => 'select',
        'settings'  => 'foundationbuddy_general_font_family',
        'label'    => __( 'Font Family', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_general_font_section',
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
        'settings'  => 'foundationbuddy_general_body_font_subsets',
        'label'    => __( 'Google-Font subsets', 'foundationbuddy' ),
        'description' => __( 'The subsets used from Google\'s API.', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_general_font_section',
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
        'settings'  => 'foundationbuddy_general_font_weight',
        'label'    => __( 'Font Weight', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_general_font_section',
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
        'settings'  => 'foundationbuddy_general_font_size',
        'label'    => __( 'Font Size', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_general_font_section',
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
        'settings'  => 'foundationbuddy_index_page_post_title_font_family',
        'label'    => __( 'Font Family', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_index_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_index_page_post_title_font_subsets',
        'label'    => __( 'Google-Font subsets', 'foundationbuddy' ),
        'description' => __( 'The subsets used from Google\'s API.', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_index_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_index_page_post_title_font_weight',
        'label'    => __( 'Font Weight', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_index_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_index_page_post_title_font_size',
        'label'    => __( 'Font Size', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_index_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_body_font_family',
        'label'    => __( 'Font Family', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_body_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_body_font_subsets',
        'label'    => __( 'Google-Font subsets', 'foundationbuddy' ),
        'description' => __( 'The subsets used from Google\'s API.', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_body_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_body_font_weight',
        'label'    => __( 'Font Weight', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_body_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_body_font_size',
        'label'    => __( 'Font Size', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_body_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_title_font_family',
        'label'    => __( 'Font Family', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_title_font_subsets',
        'label'    => __( 'Google-Font subsets', 'foundationbuddy' ),
        'description' => __( 'The subsets used from Google\'s API.', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_title_font_weight',
        'label'    => __( 'Font Weight', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_title_font_section',
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
        'settings'  => 'foundationbuddy_blog_page_post_title_font_size',
        'label'    => __( 'Font Size', 'foundationbuddy' ),
        'section'  => 'foundationbuddy_blog_page_post_title_font_section',
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
    
    //portfolio page category slug
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_portfolio_category_slug',
        'label'       => __( 'Portfolio category slug', 'foundationbuddy' ),
        'description' => __( 'Type in the category slug to be displayed in the portfolio page.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_portfolio_category_slug_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Custom home page section 1 header text
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_homepage_header_section-1',
        'label'       => __( 'Custom home page section 1 header(string)', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page section 1 header text or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-1_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Custom home page section 2 header text
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_homepage_header_section-2',
        'label'       => __( 'Custom home page section 2 header(string)', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page section 2 header text or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-2_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Custom home page section 3 header text
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_homepage_header_section-3',
        'label'       => __( 'Custom home page section 3 header(string)', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page section 3 header text or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-3_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Custom home page section 4 header text
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_homepage_header_section-4',
        'label'       => __( 'Custom home page section 4 header(string)', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page section 4 header text or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-4_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Custom home page section 5 header text
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_homepage_header_section-5',
        'label'       => __( 'Custom home page section 5 header(string)', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page section 5 header text or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-5_section',
        'default'     => '',
        'priority'    => 10,
    );

    /* ------------------------------------------------------------------------- *
     *  TODO: Issue reported in Kirki
    /* ------------------------------------------------------------------------- */
    
    //Custom home page section 5 editor
    /*$controls[] = array(
        'type'        => 'editor',
        'settings'     => 'foundationbuddy_custom_homepage_editor_section-5',
        'label'       => __( 'Custom home page section 6 editor text', 'foundationbuddy' ),
        'description' => __( 'Customize the section 5 with you editor text.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-5_section',
        'default'     => '',
        'priority'    => 10,
    );*/

    //Custom home page section 6 header text
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_homepage_header_section-6',
        'label'       => __( 'Custom home page section 6 header(string)', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page section 6 header text or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_homepage_header_section-6_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 1
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1',
        'label'       => __( 'Custom home page slider 1', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page slider 1 or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    // Custom home page slider 1 image 1
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_1',
        'label'       => __( 'Custom home page slider 1 image 1', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 1 image 1 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_1_link',
        'label'       => __( 'Custom home page slider 1 image 1 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 1 image 2
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_2',
        'label'       => __( 'Custom home page slider 1 image 2', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 1 image 2 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_2_link',
        'label'       => __( 'Custom home page slider 1 image 2 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 1 image 3
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_3',
        'label'       => __( 'Custom home page slider 1 image 3', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 1 image 3 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_3_link',
        'label'       => __( 'Custom home page slider 1 image 3 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 1 image 4
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_4',
        'label'       => __( 'Custom home page slider 1 image 4', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 1 image 4 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_4_link',
        'label'       => __( 'Custom home page slider 1 image 4 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 1 image 5
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_5',
        'label'       => __( 'Custom home page slider 1 image 5', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 1 image 5 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_1_image_5_link',
        'label'       => __( 'Custom home page slider 1 image 5 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 2
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2',
        'label'       => __( 'Custom home page slider 2', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page slider 2 or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    // Custom home page slider 2 image 1
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_1',
        'label'       => __( 'Custom home page slider 2 image 1', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 2 image 1 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_1_link',
        'label'       => __( 'Custom home page slider 2 image 1 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 2 image 2
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_2',
        'label'       => __( 'Custom home page slider 2 image 2', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 2 image 2 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_2_link',
        'label'       => __( 'Custom home page slider 2 image 2 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 2 image 3
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_3',
        'label'       => __( 'Custom home page slider 2 image 3', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 2 image 3 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_3_link',
        'label'       => __( 'Custom home page slider 2 image 3 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 2 image 4
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_4',
        'label'       => __( 'Custom home page slider 2 image 4', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 2 image 4 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_4_link',
        'label'       => __( 'Custom home page slider 2 image 4 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page slider 2 image 5
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_5',
        'label'       => __( 'Custom home page slider 2 image 5', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page slider 2 image 5 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_slider_2_image_5_link',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_slider_2_section',
        'default'     => '',
        'priority'    => 10,
    );

    //Custom home page carousel 1
    $controls[] = array(
        'type'        => 'radio',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1',
        'label'       => __( 'Custom home page carousel 1', 'foundationbuddy' ),
        'description' => __( 'Choose whether to show the custom home page carousel 1 or not.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'Yes', 'foundationbuddy' ),
            'no' => __( 'No', 'foundationbuddy' ),
        ),
    );
    
    // Custom home page carousel 1 image 1
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_1',
        'label'       => __( 'Custom home page carousel 1 image 1', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page carousel 1 image 1 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_1_link',
        'label'       => __( 'Custom home page carousel 1 image 1 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the first slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page carousel 1 image 2
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_2',
        'label'       => __( 'Custom home page carousel 1 image 2', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page carousel 1 image 2 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_2_link',
        'label'       => __( 'Custom home page carousel 1 image 2 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the second slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page carousel 1 image 3
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_3',
        'label'       => __( 'Custom home page carousel 1 image 3', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page carousel 1 image 3 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_3_link',
        'label'       => __( 'Custom home page carousel 1 image 3 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the third slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page carousel 1 image 4
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_4',
        'label'       => __( 'Custom home page carousel 1 image 4', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page carousel 1 image 4 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_4_link',
        'label'       => __( 'Custom home page carousel 1 image 4 link', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fourth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    // Custom home page carousel 1 image 5
    $controls[] = array(
        'type'        => 'image',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_5',
        'label'       => __( 'Custom home page carousel 1 image 5', 'foundationbuddy' ),
        'description' => __( 'Choose the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom home page carousel 1 image 5 link
    $controls[] = array(
        'type'        => 'text',
        'settings'     => 'foundationbuddy_custom_home_page_carousel_1_image_5_link',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'Choose the link of the image to be shown on the fifth slide.', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_home_page_carousel_1_section',
        'default'     => '',
        'priority'    => 10,
    );

    return $controls;

}

add_filter( 'kirki/controls', 'foundationbuddy_controls' );

/**
 * Configuration sample for the foundationbuddy Customizer
 */
function foundationbuddy_configuration_sample() {

    $args = array(
        'logo_image'   => get_template_directory_uri() . '/images/infiword-logo.png',
        'description'  => __( 'Infiword is a versatile HTML5 responsive WordPress theme based on ZURB Foundation. Infiword is mostly suitable for a magazine layout website. Infiword is highly customizable through the WordPress Customizer option.', 'foundationbuddy' ),

    );

    return $args;

}

add_filter( 'kirki/config', 'foundationbuddy_configuration_sample' );

?>