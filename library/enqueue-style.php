<?php
/* ------------------------------------------------------------------------- *
 *  Contains the codes to enqueue all the CSS files used in this theme
/* ------------------------------------------------------------------------- */
?>

<?php

if( ! function_exists( 'infiword_enqueue_style' ) ) {
    
	function infiword_enqueue_style()
	{
        
        // ie-only style sheet
	    wp_register_style( 'infiword-ie-only', get_template_directory_uri() . '/css/ie.css', array(), '' );
        
        // normalize stylesheet
		wp_register_style( 'infiword-normalize-stylesheet', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '' );
        
		// foundation stylesheet
		wp_register_style( 'infiword-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css', array(), '' );
        
        // wow stylesheet
		wp_register_style( 'infiword-animate-stylesheet', get_stylesheet_directory_uri() . '/css/animate.css', array(), '' );
        
        // pace stylesheet
		wp_register_style( 'infiword-pace-stylesheet', get_stylesheet_directory_uri() . '/css/pace.css', array(), '' );
        
        // flexslider stylesheet
		wp_register_style( 'infiword-flexslider-stylesheet', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), '' );
        
        // swipebox stylesheet
		wp_register_style( 'infiword-swipebox-stylesheet', get_stylesheet_directory_uri() . '/css/swipebox.css', array(), '' );
        
        // admin stylesheet
		wp_register_style( 'infiword-admin-stylesheet', get_stylesheet_directory_uri() . '/css/admin.css', array(), '' );

		// customizer stylesheet
		wp_register_style( 'infiword-customizer-stylesheet', get_stylesheet_directory_uri() . '/css/customizer.css', array(), '' );

		// Register the main style
		wp_register_style( 'infiword-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		
        wp_enqueue_style('infiword-ie-only');
        wp_enqueue_style( 'infiword-normalize-stylesheet' );
		wp_enqueue_style( 'infiword-foundation-stylesheet' );
        wp_enqueue_style( 'infiword-animate-stylesheet' );
        wp_enqueue_style( 'infiword-pace-stylesheet' );
        wp_enqueue_style( 'infiword-flexslider-stylesheet' );
        wp_enqueue_style( 'infiword-swipebox-stylesheet' );
		wp_enqueue_style( 'infiword-stylesheet' );
        
        if ( is_user_logged_in() ) {
            wp_enqueue_style( 'infiword-admin-stylesheet' );
        }

        if ( is_customize_preview() ) {
            wp_enqueue_style( 'infiword-customizer-stylesheet' );
        }
        
	}
    
}

add_action( 'wp_enqueue_scripts', 'infiword_enqueue_style' );

// adding the conditional wrapper around ie stylesheet
// source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
if( ! function_exists( 'infiword_ie_conditional ' ) ) {
    
	function infiword_ie_conditional( $tag, $handle ) {
		if ( 'infiword-ie-only' == $handle )
			$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
		return $tag;
	}
    
}

?>