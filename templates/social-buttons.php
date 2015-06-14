                <!-- social-buttons -->
                <ul class="right" >
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_facebook' ) ) { 
                        $foundationbuddy_social_buttons_facebook = get_theme_mod( 'foundationbuddy_social_buttons_facebook' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_facebook; ?>"><i class="fa fa-facebook-official"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_twitter' ) ) { 
                        $foundationbuddy_social_buttons_twitter = get_theme_mod( 'foundationbuddy_social_buttons_twitter' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_twitter; ?>"><i class="fa fa-twitter-square"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_github' ) ) { 
                        $foundationbuddy_social_buttons_github = get_theme_mod( 'foundationbuddy_social_buttons_github' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_github; ?>"><i class="fa fa-github"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_google_plus' ) ) { 
                        $foundationbuddy_social_buttons_google_plus = get_theme_mod( 'foundationbuddy_social_buttons_google_plus' ); 
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_google_plus; ?>"><i class="fa fa-google-plus-square"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_linkedin' ) ) { 
                        $foundationbuddy_social_buttons_linkedin = get_theme_mod( 'foundationbuddy_social_buttons_linkedin' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_linkedin; ?>"><i class="fa fa-linkedin-square"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_pinterest' ) ) { 
                        $foundationbuddy_social_buttons_pinterest = get_theme_mod( 'foundationbuddy_social_buttons_pinterest' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_pinterest; ?>"><i class="fa fa-pinterest"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_medium' ) ) { 
                        $foundationbuddy_social_buttons_medium = get_theme_mod( 'foundationbuddy_social_buttons_medium' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_medium; ?>"><i class="fa fa-medium"></i></a></li>
                    <?php } ?>
                    <?php 
                        if ( get_theme_mod( 'foundationbuddy_social_buttons_youtube' ) ) { 
                        $foundationbuddy_social_buttons_youtube = get_theme_mod( 'foundationbuddy_social_buttons_youtube' );
                    ?>
                        <li><a href="<?php echo $foundationbuddy_social_buttons_youtube; ?>"><i class="fa fa-youtube-play"></i></a></li>
                    <?php } ?>
                </ul> 
                <!-- /social-buttons -->