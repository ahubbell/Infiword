<?php

    //Setting up default sets
    $infiword_custom_home_page_carousel_1_image_1_link = '';
    $infiword_custom_home_page_carousel_1_image_2_link = '';
    $infiword_custom_home_page_carousel_1_image_3_link = '';
    $infiword_custom_home_page_carousel_1_image_4_link = '';
    $infiword_custom_home_page_carousel_1_image_5_link = '';
?>
<div class="small-12 large-12 columns custom-home-page-carousel flexslider" id="carousel">
    <?php
        echo '<ul class="slides">';
        if ( get_theme_mod('infiword_custom_home_page_carousel_1_image_1') ) {
            $infiword_custom_home_page_carousel_1_image_1 = '<img src="'.get_theme_mod('infiword_custom_home_page_carousel_1_image_1').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_carousel_1_image_1_link' ) ) {
                    $infiword_custom_home_page_carousel_1_image_1_link = get_theme_mod( 'infiword_custom_home_page_carousel_1_image_1_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_carousel_1_image_1_link .'">'. $infiword_custom_home_page_carousel_1_image_1 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_carousel_1_image_2') ) {
            $infiword_custom_home_page_carousel_1_image_2 = '<img src="'.get_theme_mod('infiword_custom_home_page_carousel_1_image_2').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_carousel_1_image_2_link' ) ) {
                    $infiword_custom_home_page_carousel_1_image_2_link = get_theme_mod( 'infiword_custom_home_page_carousel_1_image_2_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_carousel_1_image_2_link .'">'. $infiword_custom_home_page_carousel_1_image_2 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_carousel_1_image_3') ) {
            $infiword_custom_home_page_carousel_1_image_3 = '<img src="'.get_theme_mod('infiword_custom_home_page_carousel_1_image_3').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_carousel_1_image_3_link' ) ) {
                    $infiword_custom_home_page_carousel_1_image_3_link = get_theme_mod( 'infiword_custom_home_page_carousel_1_image_3_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_carousel_1_image_3_link .'">'. $infiword_custom_home_page_carousel_1_image_3 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_carousel_1_image_4') ) {
            $infiword_custom_home_page_carousel_1_image_4 = '<img src="'.get_theme_mod('infiword_custom_home_page_carousel_1_image_4').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_carousel_1_image_4_link' ) ) {
                    $infiword_custom_home_page_carousel_1_image_4_link = get_theme_mod( 'infiword_custom_home_page_carousel_1_image_4_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_carousel_1_image_4_link .'">'. $infiword_custom_home_page_carousel_1_image_4 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_carousel_1_image_5') ) {
            $infiword_custom_home_page_carousel_1_image_5 = '<img src="'.get_theme_mod('infiword_custom_home_page_carousel_1_image_5').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_carousel_1_image_5_link' ) ) {
                    $infiword_custom_home_page_carousel_1_image_5_link = get_theme_mod( 'infiword_custom_home_page_carousel_1_image_5_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_carousel_1_image_5_link .'">'. $infiword_custom_home_page_carousel_1_image_5 .'</a></li>';
        }
        echo '</ul>';
    ?>
</div>

<script type="text/javascript">
    (function($) {
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                itemWidth: 400,
                itemMargin: 5,
            });
        });
    })(jQuery);
</script>