<div class="small-12 large-12 columns custom-home-page-slider" id="slider-content"> 
    <?php
        echo '<ul data-orbit>';
        if ( get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_1') ) {
            $foundationbuddy_custom_home_page_slider_1_image_1 = '<img src="'.get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_1').'">';
            if ( get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_1_link' ) ) {
                    $foundationbuddy_custom_home_page_slider_1_image_1_link = get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_1_link' );
                }
            echo '<li><a href="'. $foundationbuddy_custom_home_page_slider_1_image_1_link .'">'. $foundationbuddy_custom_home_page_slider_1_image_1 .'</a></li>';
        }
        if ( get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_2') ) {
            $foundationbuddy_custom_home_page_slider_1_image_2 = '<img src="'.get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_2').'">';
            if ( get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_2_link' ) ) {
                    $foundationbuddy_custom_home_page_slider_1_image_2_link = get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_2_link' );
                }
            echo '<li><a href="'. $foundationbuddy_custom_home_page_slider_1_image_2_link .'">'. $foundationbuddy_custom_home_page_slider_1_image_2 .'</a></li>';
        }
        if ( get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_3') ) {
            $foundationbuddy_custom_home_page_slider_1_image_3 = '<img src="'.get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_3').'">';
            if ( get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_3_link' ) ) {
                    $foundationbuddy_custom_home_page_slider_1_image_3_link = get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_3_link' );
                }
            echo '<li><a href="'. $foundationbuddy_custom_home_page_slider_1_image_3_link .'">'. $foundationbuddy_custom_home_page_slider_1_image_3 .'</a></li>';
        }
        if ( get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_4') ) {
            $foundationbuddy_custom_home_page_slider_1_image_4 = '<img src="'.get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_4').'">';
            if ( get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_4_link' ) ) {
                    $foundationbuddy_custom_home_page_slider_1_image_4_link = get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_4_link' );
                }
            echo '<li><a href="'. $foundationbuddy_custom_home_page_slider_1_image_4_link .'">'. $foundationbuddy_custom_home_page_slider_1_image_4 .'</a></li>';
        }
        if ( get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_5') ) {
            $foundationbuddy_custom_home_page_slider_1_image_5 = '<img src="'.get_theme_mod('foundationbuddy_custom_home_page_slider_1_image_5').'">';
            if ( get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_5_link' ) ) {
                    $foundationbuddy_custom_home_page_slider_1_image_5_link = get_theme_mod( 'foundationbuddy_custom_home_page_slider_1_image_5_link' );
                }
            echo '<li><a href="'. $foundationbuddy_custom_home_page_slider_1_image_5_link .'">'. $foundationbuddy_custom_home_page_slider_1_image_5 .'</a></li>';
        }
        echo '</ul>';
    ?>
</div>