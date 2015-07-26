<!-- header-ads-container-section -->
<section class="header-ads-container-section">
    <?php
        if ( get_theme_mod( 'infiword_header_advertisement_link' ) ) {
            $infiword_header_advertisement_link = get_theme_mod( 'infiword_header_advertisement_link' );
        }
        $infiword_header_advertisement = '<a href="'. $infiword_header_advertisement_link . '"><img src="'.esc_url( get_theme_mod( 'infiword_header_advertisement' ) ).'"></a>';
        echo $infiword_header_advertisement;
    ?>
</section>
<!-- /header-ads-container-section -->