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
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Header panel
    $wp_customize->add_panel( 'header', array(
        'priority'    => 10,
        'title'       => __( 'Header', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Footer panel
    $wp_customize->add_panel( 'footer', array(
        'priority'    => 10,
        'title'       => __( 'Footer', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Style panel
    $wp_customize->add_panel( 'style', array(
        'priority'    => 10,
        'title'       => __( 'Style', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Front page panel
    $wp_customize->add_panel( 'front_page', array(
        'priority'    => 10,
        'title'       => __( 'Front Page', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Blog page panel
    $wp_customize->add_panel( 'blog_page', array(
        'priority'    => 10,
        'title'       => __( 'Blog Page', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Custom home page panel
    $wp_customize->add_panel( 'custom_home_page', array(
        'priority'    => 10,
        'title'       => __( 'Custom Home Page', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );
    
    //Woocommerce page panel
    $wp_customize->add_panel( 'woocommerce_page', array(
        'priority'    => 10,
        'title'       => __( 'Woocommerce Page', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
    ) );

    //Social buttons panel
    $wp_customize->add_panel( 'social_buttons', array(
        'priority'    => 10,
        'title'       => __( 'Social Buttons', 'foundationbuddy' ),
        'description' => __( 'Enhance your experience using the custom theme options.', 'foundationbuddy' ),
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
        
    //Favicon section
    $wp_customize->add_section( 'favicon_section' , array(
        'title'       => __( 'Favicon', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'general',
        'description' => __( 'Upload a favicon for your website', 'foundationbuddy' ),
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
    
    //Custom CSS
    $wp_customize->add_section( 'foundationbuddy_header_custom_css_section' , array(
        'title'       => __( 'Add custom CSS to the header', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'header',
        'description' => __( 'Add custom CSS to the header', 'foundationbuddy' ),
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
        'description' => __( 'Upload a favicon for your website', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (two)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_two_section' , array(
        'title'       => __( 'Advertisement 2', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a favicon for your website', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (three)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_three_section' , array(
        'title'       => __( 'Advertisement 3', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a favicon for your website', 'foundationbuddy' ),
    ) );
    
    //Footer Ads (four)
    $wp_customize->add_section( 'foundationbuddy_footer_advertisement_four_section' , array(
        'title'       => __( 'Advertisement 4', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'footer',
        'description' => __( 'Upload a favicon for your website', 'foundationbuddy' ),
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
          
    //Pinterest style front page
    $wp_customize->add_section( 'foundationbuddy_front_page_layout_pinterest_section' , array(
        'title'       => __( 'Pinterest style', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose whether you want a Pinterest style grid layout for the front page.', 'foundationbuddy' ),
    ) );
    
    //Masonry style front page
    $wp_customize->add_section( 'foundationbuddy_masonry_front_page_section' , array(
        'title'       => __( 'Masonry grid', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'front_page',
        'description' => __( 'Choose whether you want Masonry layout activated for the front page or not.', 'foundationbuddy' ),
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
    
    //Author bio
    $wp_customize->add_section( 'foundationbuddy_author_bio_section' , array(
        'title'       => __( 'Author panel', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'blog_page',
        'description' => __( 'Choose whether you want to show author bio after the end of every post or not.', 'foundationbuddy' ),
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
        'description' => __( 'Social buttons', 'foundationbuddy' ),
    ) );
    
    //Facebook
    $wp_customize->add_section( 'foundationbuddy_social_buttons_facebook_section' , array(
        'title'       => __( 'Facebook', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Facebook url.', 'foundationbuddy' ),
    ) );
    
    //Twitter
    $wp_customize->add_section( 'foundationbuddy_social_buttons_twitter_section' , array(
        'title'       => __( 'Twitter', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Twitter url.', 'foundationbuddy' ),
    ) );
    
    //Linkedin
    $wp_customize->add_section( 'foundationbuddy_social_buttons_linkedin_section' , array(
        'title'       => __( 'LinkedIn', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'LinkedIn url.', 'foundationbuddy' ),
    ) );
    
    //Google-plus
    $wp_customize->add_section( 'foundationbuddy_social_buttons_google_plus_section' , array(
        'title'       => __( 'Google Plus', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Google Plus url.', 'foundationbuddy' ),
    ) );
    
    //Pinterest
    $wp_customize->add_section( 'foundationbuddy_social_buttons_pinterest_section' , array(
        'title'       => __( 'Pinterest', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Pinterest url.', 'foundationbuddy' ),
    ) );
    
    //Medium
    $wp_customize->add_section( 'foundationbuddy_social_buttons_medium_section' , array(
        'title'       => __( 'Medium', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Medium url.', 'foundationbuddy' ),
    ) );
    
    //Github
    $wp_customize->add_section( 'foundationbuddy_social_buttons_github_section' , array(
        'title'       => __( 'Github', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Github url.', 'foundationbuddy' ),
    ) );
    
    //Youtube
    $wp_customize->add_section( 'foundationbuddy_social_buttons_youtube_section' , array(
        'title'       => __( 'Youtube', 'foundationbuddy' ),
        'priority'    => 10,
        'panel'       => 'social_buttons',
        'description' => __( 'Youtube url.', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_logo',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'logo_section',
        'default'     => '',
        'priority'    => 10,
    );

    //favicon control
    $controls[] = array(
        'type'        => 'image',
        'setting'     => 'foundationbuddy_favicon',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'favicon_section',
        'default'     => '',
        'priority'    => 10,
    );

    //search bar control
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_show_search_bar',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_header_advertisement',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'header_ads_section',
        'default'     => '',
        'priority'    => 10,
    );

    // Custom Header image
    $controls[] = array(
        'type'        => 'image',
        'setting'     => 'foundationbuddy_custom_header_image',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_custom_header_image_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //Custom CSS
    $controls[] = array(
        'type'        => 'textarea',
        'setting'     => 'foundationbuddy_header_custom_css',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_header_custom_css_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer advertisement count control
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_footer_advertisement_count',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_footer_advertisement_one',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_one_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (two)
    $controls[] = array(
        'type'        => 'image',
        'setting'     => 'foundationbuddy_footer_advertisement_two',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_two_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (three)
    $controls[] = array(
        'type'        => 'image',
        'setting'     => 'foundationbuddy_footer_advertisement_three',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_three_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //footer ads (four)
    $controls[] = array(
        'type'        => 'image',
        'setting'     => 'foundationbuddy_footer_advertisement_four',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_advertisement_four_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //back to top button control
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_footer_back_to_top',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_footer_copyright_text_left',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_copyright_text_left_section',
        'default'     => 'This is some default text',
        'priority'    => 10,
    );
    
    //footer copyright text (right)
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_footer_copyright_text_right',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_footer_copyright_text_right_section',
        'default'     => 'This is some default text',
        'priority'    => 10,
    );
    
    //pinterest style front page control
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_front_page_layout_pinterest',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_front_page_layout_pinterest_section',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => array(
            'on' => __( 'On', 'foundationbuddy' ),
            'off' => __( 'Off', 'foundationbuddy' ),
        ),
    );
    
    //Masonry style front page
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_masonry_front_page',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_masonry_front_page_section',
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
        'setting'     => 'foundationbuddy_front_page_column_count',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_front_page_layout',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_blog_page_layout',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
    
    //featured images for single posts
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_post_show_featured_image_on_single_page',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_post_show_featured_image_on_single_page_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'yes', 'foundationbuddy' ),
            'no' => __( 'no', 'foundationbuddy' ),
        ),
    );
    
    //Related posts
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_show_related_posts',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_post_navigation',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_post_navigation_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'yes', 'foundationbuddy' ),
            'no' => __( 'no', 'foundationbuddy' ),
        ),
    );
    
    //author bio
    $controls[] = array(
        'type'        => 'radio',
        'setting'     => 'foundationbuddy_author_bio',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_author_bio_section',
        'default'     => 'yes',
        'priority'    => 10,
        'choices'     => array(
            'yes' => __( 'yes', 'foundationbuddy' ),
            'no' => __( 'no', 'foundationbuddy' ),
        ),
    );
    
    //Woocommerce page layout
    $controls[] = array(
        'type'        => 'radio-image',
        'setting'     => 'foundationbuddy_woocommerce_page_layout',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_social_buttons',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
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
        'setting'     => 'foundationbuddy_social_buttons_facebook',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_facebook_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //twitter url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_twitter',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_twitter_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //linkedin url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_linkedin',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_linkedin_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //pinterest url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_pinterest',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_pinterest_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //github url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_github',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_github_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //medium url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_medium',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_medium_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //google plus url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_google_plus',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_google_plus_section',
        'default'     => '',
        'priority'    => 10,
    );
    
    //youtube url
    $controls[] = array(
        'type'        => 'text',
        'setting'     => 'foundationbuddy_social_buttons_youtube',
        'label'       => __( 'This is the label', 'foundationbuddy' ),
        'description' => __( 'This is the control description', 'foundationbuddy' ),
        'section'     => 'foundationbuddy_social_buttons_youtube_section',
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
        'description'  => __( 'Infiword is a versatile HTML5 responsive WordPress theme based on ZURB Foundation.', 'foundationbuddy' ),

    );

    return $args;

}

add_filter( 'kirki/config', 'foundationbuddy_configuration_sample' );

?>