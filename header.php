<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->

<!-- head -->
<head>

    <!-- meta -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width" />
    
    <!-- Feed -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo esc_url( home_url() ); ?>/feed/">

    <?php wp_head(); ?>

</head>
<!-- /head -->

<!-- body -->
<body <?php body_class('antialiased'); ?>>

    <div id="main-container" class="animation-outer-wrapper">
        <div class="animation-inner-wrapper animation-inner-wrapper--fadein">
 
            <!-- header -->
            <header class="contain-to-grid">

                <!-- <div class="fixed"> -->
                    
                <?php if ( has_nav_menu('primary') ): ?>

                    <div class="foundation-sticky">
                        <!-- primary-menu -->
                        <nav class="top-bar primary-menu" data-topbar data-options="sticky_on: large;scrolltop: false;">

                            <!-- title-area -->
                            <ul class="title-area">
                                <li class="name"></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                                <li class="toggle-topbar menu-icon"><a href="#"><span><i class="fa fa-arrow-down"></i> <?php _e('Menu','infiword'); ?></span></a></li>
                            </ul>
                            <!-- /title-area -->

                            <!-- top-bar-section -->
                            <section class="top-bar-section">
                                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="left">%3$s</ul>', 'fallback_cb' => 'infiword_menu_fallback', 'walker' => new infiword_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>

                                <?php if ( get_theme_mod( 'infiword_show_search_bar' ) == 'yes' || get_theme_mod( 'infiword_show_search_bar' ) == '') { ?>

                                <!-- search bar -->
                                <ul class="right" >
                                	<li class="has-form">
            					  		<div class="row collapse">
            					    		<div class="large-12 small-12 columns">
            					      			<?php get_search_form(); ?>
            					    		</div>
            							 </div>
            						</li>
                                </ul> 
                                <!-- /search bar -->

                                <?php } ?>

                            </section>
                            <!-- /top-bar-section -->

                        </nav>
                        <!-- primary-menu -->
                    </div>

                <?php endif; ?>
                    
                <!-- </div> -->

                <div class="row">
                    <div class="large-6 columns">
                        <!-- logo-container-section -->
                        <section class="logo-container-section">

                            <!-- logo-container -->
                            <?php get_template_part( 'templates/logo', 'container' ); ?>
                            <!-- /logo-container -->

                        </section>
                        <!-- /logo-container-section -->
                    </div>
                    <div class="large-6 columns">
                        <?php 
                            if ( get_theme_mod( 'infiword_header_advertisement' ) ) {
                                get_template_part( 'templates/header', 'advertisement' );
                            }
                        ?>
                    </div>
                </div>

                <?php if ( has_nav_menu('additional') ): ?>
                    <!-- secondary-menu -->
                    <nav class="top-bar secondary-menu" data-topbar role="navigation">

                        <!-- title-area -->
                        <ul class="title-area">
                            <li class="name"></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span><i class="fa fa-arrow-down"></i> <?php _e('Menu','infiword'); ?></span></a></li>
                        </ul>
                        <!-- /title-area -->

                        <!-- top-bar-section -->
                        <section class="top-bar-section secondary-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'additional', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="left">%3$s</ul>', 'fallback_cb' => 'infiword_menu_fallback', 'walker' => new infiword_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>

                            <?php if ( get_theme_mod( 'infiword_social_buttons' ) == 'yes' || get_theme_mod( 'infiword_social_buttons' ) == '' ) {
                                get_template_part( 'templates/social', 'buttons' );
                             } ?>

                        </section>
                        <!-- /top-bar-section -->

                    </nav>
                    <!-- /secondary-menu -->
                <?php endif; ?>
                
            </header>
            <!-- header -->
            
            <!-- Start the main container -->
            <!-- container -->
            <div class="container" role="document" id="main-content">
                <?php get_template_part( 'templates/header', 'image' ); ?>
                <div class="row">