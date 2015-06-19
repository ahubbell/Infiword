<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying posts with the page template named 'Custom
 * Homepage'. To create a custom page having this template, create a new page
 * and select 'Custom Homepage' from the 'Template' section under 'Page
 * Attributes'.
 /* ------------------------------------------------------------------------- */
?>

<?php get_header(); ?>
<div class="small-12 large-12 columns" id="index-page-content" role="main">
    
    <!-- custom-homepage-first-section -->
    <section id="custom-homepage-first">
        <!-- custom-homepage slider -->
        <?php if ( get_theme_mod('foundationbuddy_custom_home_page_slider_1') != 'no' ) { ?> 
        <?php get_template_part( 'templates/custom', 'home-page-slider-1' ); ?>
        <?php } ?>
        <!-- /custom-homepage slider -->
    </section>
    <!-- custom-homepage-first-section -->

    <!-- custom-homepage-second-section -->
    <section id="custom-homepage-second-section">
        <div class="wow bounceInUp">
            <div class="row custom-homepage-section-2-widget">
                <div class="large-12 columns">
                    <?php if ( get_theme_mod('foundationbuddy_custom_homepage_header_section-2') ) { ?>
                        <?php
                            $foundationbuddy_custom_homepage_header_section_2 = get_theme_mod('foundationbuddy_custom_homepage_header_section-2');
                        ?>
                        <h2><?php echo wpautop( $foundationbuddy_custom_homepage_header_section_2 ); ?></h2>
                    <?php } ?>
                </div>      
            </div>

            <div class="row custom-homepage-section-2-widget">
                <div class="wow bounceInLeft">
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-2-widget-1"); ?>
                    </div>
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-2-widget-2"); ?>
                    </div>
                </div>
                <div class="wow bounceInRight">
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-2-widget-3"); ?>
                    </div>
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-2-widget-4"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /custom-homepage-second-section -->

    <!-- custom-homepage-third-section -->
    <section id="custom-homepage-third">
        <div class="wow bounceInUp">
            <div class="row custom-homepage-section-3-widget">
                <div class="large-12 columns">
                    <?php if ( get_theme_mod('foundationbuddy_custom_homepage_header_section-3') ) { ?>
                        <?php
                            $foundationbuddy_custom_homepage_header_section_3 = get_theme_mod('foundationbuddy_custom_homepage_header_section-3');
                        ?>
                        <h2><?php echo wpautop( $foundationbuddy_custom_homepage_header_section_3 ); ?></h2>
                    <?php } ?>
                </div>      
            </div>

            <!-- custom-homepage slider -->
            <?php if ( get_theme_mod('foundationbuddy_custom_home_page_slider_2') != 'no' ) { ?> 
            <?php get_template_part( 'templates/custom', 'home-page-slider-2' ); ?>
            <?php } ?>
            <!-- /custom-homepage slider -->
        </div>
    </section>
    <!-- custom-homepage-third-section -->

    <!-- custom-homepage-fourth-section -->
    <section id="custom-homepage-fourth-section">
        <div class="wow bounceInUp">
            <div class="row custom-homepage-section-4-widget">
                <div class="large-12 columns">
                    <?php if ( get_theme_mod('foundationbuddy_custom_homepage_header_section-4') ) { ?>
                        <?php
                            $foundationbuddy_custom_homepage_header_section_4 = get_theme_mod('foundationbuddy_custom_homepage_header_section-4');
                        ?>
                        <h2><?php echo wpautop( $foundationbuddy_custom_homepage_header_section_4 ); ?></h2>
                    <?php } ?>
                </div>      
            </div>

            <div class="row custom-homepage-section-4-widget">
                <div class="wow bounceInLeft">
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-4-widget-1"); ?>
                    </div>
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-4-widget-2"); ?>
                    </div>
                </div>
                <div class="wow bounceInRight">
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-4-widget-3"); ?>
                    </div>
                    <div class="medium-3 large-3 text-center columns">
                        <?php dynamic_sidebar("custom-homepage-section-4-widget-4"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /custom-homepage-fourth-section -->

</div>
<?php get_footer(); ?>