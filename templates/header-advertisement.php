<!-- header-ads-container-section -->
<section class="header-ads-container-section">
    <?php
        if ( get_theme_mod( 'foundationbuddy_header_advertisement_link' ) ) {
            $foundationbuddy_header_advertisement_link = get_theme_mod( 'foundationbuddy_header_advertisement_link' );
        }
        $foundationbuddy_header_advertisement = '<a href="'. $foundationbuddy_header_advertisement_link . '"><img src="'.esc_url( get_theme_mod( 'foundationbuddy_header_advertisement' ) ).'"></a>';
        echo $foundationbuddy_header_advertisement;
    ?>
</section>
<!-- /header-ads-container-section -->