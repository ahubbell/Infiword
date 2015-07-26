            <div class="row header-image-row">
                <div class="large-12 columns header-image">
                    <?php
                        if ( get_theme_mod( 'infiword_custom_header_image' ) ) {
                            $header_image = '<img src="'.get_theme_mod('infiword_custom_header_image').'">';
                            echo $header_image;
                    ?>
                        <style type="text/css">
                            .header-image-row { padding: 20px 12px 0px 12px }
                            .header-image img {
                                width: 100%;
                                border-radius: 3px;
                                -webkit-border-radius: 3px;
                                -moz-border-radius: 3px;
                            }
                        </style>
                    <?php
                        }
                    ?>
                </div>
            </div>