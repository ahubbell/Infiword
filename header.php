<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->

<!-- html -->
<html <?php language_attributes(); ?>>
    
<!-- head -->
<head>

        <meta name=viewport content="width=device-width, initial-scale=1">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <link rel="Shortcut Icon" type="image/x-icon" href='<?php echo esc_url( get_theme_mod( 'infi_favicon' ) ); ?>'>

        <!-- stylesheet -->
        <link href="<?php echo get_stylesheet_uri() ?>" rel="stylesheet">

        <?php wp_head(); ?>

</head>
<!-- /.head -->

<!-- body -->
<body <?php body_class(''); ?>>

    <?php if (has_nav_menu('primary')): ?>
    
    <!-- navmenu -->
    <div class="navmenu navmenu-default navmenu-fixed-right">
     
        <!-- brand -->
        <h2 class="navmenu-brand" href="#"></h2>
        <!-- /.brand -->
      
        <!-- navmenu-nav -->
        <?php
            $args = array(
                'theme_location' => 'primary',
                'depth'		 => 3,
                'container'	 => false,
                'menu_class'	 => 'nav navmenu-nav',
                'walker'	 => new infi_BootstrapNavMenuWalker()
            );
            wp_nav_menu($args);
        ?>
        
    </div>
    <!-- /.navmenu -->

    <?php endif; ?>
        
    </div>
    <!-- /.navmenu -->

    <!-- canvas -->
    <div class="canvas">
      
        <!-- navbar -->
        <div class="navbar navbar-default">
        
            <!-- logo-container -->
            <div class="logo-container">
                <?php if ( get_theme_mod( 'infi_logo' ) ) : ?>
                    <a class="navmenu-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                        <img src='<?php echo esc_url( get_theme_mod( 'infi_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
                <?php else : ?>
                    <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                <?php endif; ?>
            </div>
            <!-- /.logo-container -->
            
            <!-- search-button -->
            <div class="search-button-container">
                <div class="box">
                    <div class="container-search">
                        <!-- search-form -->
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <!-- /.search-button -->
            
            <!-- navbar button -->
            <button type="button" class="navbar-toggle-primary" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">          
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="menu-placeholder">MENU</span>
            </button>
            <!-- /.navbar button -->
     
        </div>
        <!-- /.navbar -->
            
        <!-- container -->
        <div class="fluid-container top-container">
            
            <!-- block-wrapper -->
            <div class="block-wrapper">
