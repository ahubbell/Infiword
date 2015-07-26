<div class="small-12 large-12 columns custom-home-page-slider flexslider" id="slider-2">
    <?php
        echo '<ul class="slides">';
        if ( get_theme_mod('infiword_custom_home_page_slider_2_image_1') ) {
            $infiword_custom_home_page_slider_2_image_1 = '<img src="'.get_theme_mod('infiword_custom_home_page_slider_2_image_1').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_slider_2_image_1_link' ) ) {
                    $infiword_custom_home_page_slider_2_image_1_link = get_theme_mod( 'infiword_custom_home_page_slider_2_image_1_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_slider_2_image_1_link .'">'. $infiword_custom_home_page_slider_2_image_1 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_slider_2_image_2') ) {
            $infiword_custom_home_page_slider_2_image_2 = '<img src="'.get_theme_mod('infiword_custom_home_page_slider_2_image_2').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_slider_2_image_2_link' ) ) {
                    $infiword_custom_home_page_slider_2_image_2_link = get_theme_mod( 'infiword_custom_home_page_slider_2_image_2_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_slider_2_image_2_link .'">'. $infiword_custom_home_page_slider_2_image_2 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_slider_2_image_3') ) {
            $infiword_custom_home_page_slider_2_image_3 = '<img src="'.get_theme_mod('infiword_custom_home_page_slider_2_image_3').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_slider_2_image_3_link' ) ) {
                    $infiword_custom_home_page_slider_2_image_3_link = get_theme_mod( 'infiword_custom_home_page_slider_2_image_3_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_slider_2_image_3_link .'">'. $infiword_custom_home_page_slider_2_image_3 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_slider_2_image_4') ) {
            $infiword_custom_home_page_slider_2_image_4 = '<img src="'.get_theme_mod('infiword_custom_home_page_slider_2_image_4').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_slider_2_image_4_link' ) ) {
                    $infiword_custom_home_page_slider_2_image_4_link = get_theme_mod( 'infiword_custom_home_page_slider_2_image_4_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_slider_2_image_4_link .'">'. $infiword_custom_home_page_slider_2_image_4 .'</a></li>';
        }
        if ( get_theme_mod('infiword_custom_home_page_slider_2_image_5') ) {
            $infiword_custom_home_page_slider_2_image_5 = '<img src="'.get_theme_mod('infiword_custom_home_page_slider_2_image_5').'">';
            if ( get_theme_mod( 'infiword_custom_home_page_slider_2_image_5_link' ) ) {
                    $infiword_custom_home_page_slider_2_image_5_link = get_theme_mod( 'infiword_custom_home_page_slider_2_image_5_link' );
                }
            echo '<li><a href="'. $infiword_custom_home_page_slider_2_image_5_link .'">'. $infiword_custom_home_page_slider_2_image_5 .'</a></li>';
        }
        echo '</ul>';
    ?>
</div>

<script type="text/javascript">
    (function($) {
        $(window).load(function() {
            $('#slider-2').flexslider({
                // change #slider to #carousel to use the carousel and uncomment all the lines
                animation: "slide",
                prevText: " ",
                nextText: " ",
                slideshow: true,
                directionNav: true,
                pauseOnHover: true,
                slideshowSpeed: 7000,
                animationSpeed: 600,
                smoothHeight: true,
                controlNav: true,
                animationLoop: true,
                //slideshow: false,
                //itemWidth: 210,
                //itemMargin: 5,
                //asNavFor: '#slider'
              });

              /*$('#slider').flexslider({
                animation: "slide",
                prevText: " ",
                nextText: " ",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
              });*/
        });
    })(jQuery);
</script>