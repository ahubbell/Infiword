<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying advertisements in the footer. If the number of
 * advertisements in the footer is set to 2 from the 'Theme Options', then
 * only this page is called. This page is called from 'footer.php'.
 /* ------------------------------------------------------------------------- */
?>

<div class="large-6 columns">
    <?php
            if ( get_theme_mod( 'foundationbuddy_footer_advertisement_one' ) ) {
                $foundationbuddy_footer_advertisement_one = '<img src="'.esc_url( get_theme_mod( 'foundationbuddy_footer_advertisement_one' ) ).'">';
                echo $foundationbuddy_footer_advertisement_one;
            }
        ?>
</div>

<div class="large-6 columns">
    <?php
            if ( get_theme_mod( 'foundationbuddy_footer_advertisement_two' ) ) {
                $foundationbuddy_footer_advertisement_two = '<img src="'.esc_url( get_theme_mod( 'foundationbuddy_footer_advertisement_two' ) ).'">';
                echo $foundationbuddy_footer_advertisement_two;
            }
        ?>
</div>