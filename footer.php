<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying the footer.
/* ------------------------------------------------------------------------- */
?>

                </div><!-- Row End -->
            </div><!-- Container End -->
            <!-- /container -->

            <div class="separator"></div>
                
            <!-- footer-widget -->
            <div class="full-width footer-widget">
            	<div class="row">
                    <div class="large-3 columns">
                        <?php dynamic_sidebar("Footer-1"); ?>
                    </div>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar("Footer-2"); ?>
                    </div>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar("Footer-3"); ?>
                    </div>
                    <div class="large-3 columns">
                        <?php dynamic_sidebar("Footer-4"); ?>
                    </div>
            	</div>
            </div>
            <!-- /footer-widget -->

            <?php if ( has_nav_menu('footer') ): ?>
                <!-- footer-menu -->
                <nav class="top-bar footer-menu" data-topbar>

                    <!-- title-area -->
                    <ul class="title-area">
                        <li class="name"></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span><i class="fa fa-arrow-down"></i> <?php _e('Menu','infiword'); ?></span></a></li>
                    </ul>
                    <!-- /title-area -->

                    <!-- top-bar-section -->
                    <section class="top-bar-section footer-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="left">%3$s</ul>', 'fallback_cb' => 'infiword_menu_fallback', 'walker' => new infiword_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
                    </section>
                    <!-- /top-bar-section -->

                </nav>
                <!-- /footer-menu -->
            <?php endif; ?>

            <!-- back to top -->
                <?php if ( get_theme_mod( 'infiword_footer_back_to_top') == 'yes' || get_theme_mod( 'infiword_footer_back_to_top') == '') { ?>
                    <a href="#0" class="back-to-top">Top</a>
                <?php } ?>
                <!-- /back to top -->

            	<?php
                    if ( get_theme_mod( 'infiword_footer_advertisement_one' ) || get_theme_mod('infiword_footer_advertisement_two' ) || get_theme_mod('infiword_footer_advertisement_three' ) || get_theme_mod('infiword_footer_advertisement_four' ) ) {
                ?>
                        <!-- footer-advertisement -->
                        <footer class="full-width footer-links" role="contentinfo">
                        
                            <?php
                                get_template_part( 'templates/footer', 'advertisement' );
                            ?>
                    
                        </footer>
                        <!-- /footer-advertisement -->

                <?php
                    }
                ?>

            <footer class="full-width copyright" role="contentinfo">
                
                <!-- love-infiword -->
            	<div class="row love-infiword">
            		<div class="large-6 columns">
                        <?php if ( get_theme_mod('infiword_footer_copyright_text_left') ) { ?>
                            <?php
                                $infiword_footer_copyright_text_left = get_theme_mod('infiword_footer_copyright_text_left');
                                echo wpautop( $infiword_footer_copyright_text_left ); 
                            ?>
                        <?php } else { ?>
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'> &copy; <?php bloginfo( 'name' ); ?></a>
                        <?php } ?>
            		</div>
                    
                    <div class="large-6 columns copyright-right">
                        <?php if ( get_theme_mod('infiword_footer_copyright_text_right') ) { ?>
                            <?php
                                $infiword_footer_copyright_text_right = get_theme_mod('infiword_footer_copyright_text_right');
                                echo wpautop( $infiword_footer_copyright_text_right ); 
                            ?>
                        <?php } else { ?>
                            <?php _e('Powered by','infiword'); ?> WordPress. <?php _e('Theme by &nbsp;','infiword'); ?> <a href="http://infismash.com" rel="nofollow"> <?php _e('Infismash - Creativity that inspires you!','infiword'); ?> </a>
                        <?php } ?>
            		</div>
                    
            	</div>
                <!-- /love-infiword -->

            </footer>
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>