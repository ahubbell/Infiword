<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying advertisements in the footer. If the number of
 * advertisements in the footer is set to 1 from the 'Theme Options', then
 * only this page is called. This page is called from 'footer.php'.
 /* ------------------------------------------------------------------------- */
?>

<?php
/* ------------------------------------------------------------------------- *
 * Setting up default variables
 /* ------------------------------------------------------------------------- */
    $infiword_footer_advertisement_one_link = '';
?>

<div class="large-12 columns footer-ads-container">
        <?php
            if ( get_theme_mod( 'infiword_footer_advertisement_one' ) ) {
                if ( get_theme_mod( 'infiword_footer_advertisement_one_link' ) ) {
                    $infiword_footer_advertisement_one_link = get_theme_mod( 'infiword_footer_advertisement_one_link' );
                }
                    $infiword_footer_advertisement_one = '<a href="'. $infiword_footer_advertisement_one_link . '"><img src="'.esc_url( get_theme_mod( 'infiword_footer_advertisement_one' ) ).'"></a>';
                    echo $infiword_footer_advertisement_one;
            }
        ?>
</div>