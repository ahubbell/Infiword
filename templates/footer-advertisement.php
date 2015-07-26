<!-- footer-ads-container-section -->
<section class="footer-ads-container-section">
    <div class="row">
        
        <?php
            if ( get_theme_mod( 'infiword_footer_advertisement_count' ) == 'off' ) {
                //no ads
            }
            if ( get_theme_mod( 'infiword_footer_advertisement_count' ) == 'one' ) {
                get_template_part( 'layouts/footer/footer', 'advertisement-one-column' );
            }
            if ( get_theme_mod( 'infiword_footer_advertisement_count' ) == 'two' ) {
                get_template_part( 'layouts/footer/footer', 'advertisement-two-column' );
            }
            if ( get_theme_mod( 'infiword_footer_advertisement_count' ) == 'three' ) {
                get_template_part( 'layouts/footer/footer', 'advertisement-three-column' );
            }
            if ( get_theme_mod( 'infiword_footer_advertisement_count' ) == 'four' ) {
                get_template_part( 'layouts/footer/footer', 'advertisement-four-column' );
            }
        ?>

	</div>
</section>
<!-- /footer-ads-container-section -->