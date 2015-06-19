<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying advertisements in the footer. If the number of
 * advertisements in the footer is set to 1 from the 'Theme Options', then
 * only this page is called. This page is called from 'footer.php'.
 /* ------------------------------------------------------------------------- */
?>

<div class="large-12 columns">
        <?php
            if ( get_theme_mod( 'foundationbuddy_footer_advertisement_one' ) ) {
                if ( get_theme_mod( 'foundationbuddy_footer_advertisement_one_link' ) ) {
                    $foundationbuddy_footer_advertisement_one_link = get_theme_mod( 'foundationbuddy_footer_advertisement_one_link' );
                }
                    $foundationbuddy_footer_advertisement_one = '<a href="'. $foundationbuddy_footer_advertisement_one_link . '"><img src="'.esc_url( get_theme_mod( 'foundationbuddy_footer_advertisement_one' ) ).'"></a>';
                    echo $foundationbuddy_footer_advertisement_one;
            }
        ?>
</div>