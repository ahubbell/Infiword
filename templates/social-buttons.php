                <!-- social-buttons -->
                <ul class="right" >
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_facebook' ) ) { 
                        $infiword_social_buttons_facebook = get_theme_mod( 'infiword_social_buttons_facebook' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_facebook; ?>"><i class="fa fa-facebook-official social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_twitter' ) ) { 
                        $infiword_social_buttons_twitter = get_theme_mod( 'infiword_social_buttons_twitter' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_twitter; ?>"><i class="fa fa-twitter-square social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_github' ) ) { 
                        $infiword_social_buttons_github = get_theme_mod( 'infiword_social_buttons_github' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_github; ?>"><i class="fa fa-github social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_google_plus' ) ) { 
                        $infiword_social_buttons_google_plus = get_theme_mod( 'infiword_social_buttons_google_plus' ); 
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_google_plus; ?>"><i class="fa fa-google-plus-square social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_linkedin' ) ) { 
                        $infiword_social_buttons_linkedin = get_theme_mod( 'infiword_social_buttons_linkedin' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_linkedin; ?>"><i class="fa fa-linkedin-square social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_pinterest' ) ) { 
                        $infiword_social_buttons_pinterest = get_theme_mod( 'infiword_social_buttons_pinterest' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_pinterest; ?>"><i class="fa fa-pinterest social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_medium' ) ) { 
                        $infiword_social_buttons_medium = get_theme_mod( 'infiword_social_buttons_medium' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_medium; ?>"><i class="fa fa-medium social-buttons"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'infiword_social_buttons_youtube' ) ) { 
                        $infiword_social_buttons_youtube = get_theme_mod( 'infiword_social_buttons_youtube' );
                    ?>
                        <li><a href="<?php echo $infiword_social_buttons_youtube; ?>"><i class="fa fa-youtube-play social-buttons"></i></a></li>
                    <?php } ?>
                </ul> 
                <!-- /social-buttons -->