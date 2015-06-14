            <div class="row header-image-row">
                <div class="large-12 columns header-image">
                    <?php
                        if ( get_theme_mod( 'foundationbuddy_custom_header_image' ) ) {
                            $header_image = '<img src="'.get_theme_mod('foundationbuddy_custom_header_image').'">';
                            echo $header_image;
                        }
                    ?>
                </div>
            </div>