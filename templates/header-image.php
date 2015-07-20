            
            <?php
                if ( get_theme_mod( 'foundationbuddy_custom_header_image' ) ) { ?>
                    <div class="row header-image-row">
                        <div class="large-12 columns header-image">
                
                <?php
                    $header_image = '<img src="'.get_theme_mod('foundationbuddy_custom_header_image').'">';
                    echo $header_image;
                ?>

                        </div>
                    </div>
            <?php } ?>
                