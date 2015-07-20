<?php
/* ------------------------------------------------------------------------- *
 * Enqueue all the stylesheets here
/* ------------------------------------------------------------------------- */

if( ! function_exists( 'foundationbuddy_enqueue_style' ) ) {
    
	function foundationbuddy_enqueue_style()
	{
        
        // ie-only style sheet
	    wp_register_style( 'foundationbuddy-ie-only', get_template_directory_uri() . '/css/ie.css', array(), '' );
        
        // normalize stylesheet
		wp_register_style( 'foundationbuddy-normalize-stylesheet', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '' );
        
		// foundation stylesheet
		wp_register_style( 'foundationbuddy-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css', array(), '' );
        
        // wow stylesheet
		wp_register_style( 'foundationbuddy-animate-stylesheet', get_stylesheet_directory_uri() . '/css/animate.css', array(), '' );
        
        // pace stylesheet
		wp_register_style( 'foundationbuddy-pace-stylesheet', get_stylesheet_directory_uri() . '/css/pace.css', array(), '' );
        
        // flexslider stylesheet
		wp_register_style( 'foundationbuddy-flexslider-stylesheet', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), '' );
        
        // swipebox stylesheet
		wp_register_style( 'foundationbuddy-swipebox-stylesheet', get_stylesheet_directory_uri() . '/css/swipebox.css', array(), '' );
        
        // admin stylesheet
		wp_register_style( 'foundationbuddy-admin-stylesheet', get_stylesheet_directory_uri() . '/css/admin.css', array(), '' );

		// customizer stylesheet
		wp_register_style( 'foundationbuddy-customizer-stylesheet', get_stylesheet_directory_uri() . '/css/customizer.css', array(), '' );

		// Register the main style
		wp_register_style( 'foundationbuddy-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		
        wp_enqueue_style('foundationbuddy-ie-only');
        wp_enqueue_style( 'foundationbuddy-normalize-stylesheet' );
		wp_enqueue_style( 'foundationbuddy-foundation-stylesheet' );
        wp_enqueue_style( 'foundationbuddy-animate-stylesheet' );
        wp_enqueue_style( 'foundationbuddy-pace-stylesheet' );
        wp_enqueue_style( 'foundationbuddy-flexslider-stylesheet' );
        wp_enqueue_style( 'foundationbuddy-swipebox-stylesheet' );
		wp_enqueue_style( 'foundationbuddy-stylesheet' );
        
        if ( is_user_logged_in() ) {
            wp_enqueue_style( 'foundationbuddy-admin-stylesheet' );
        }

        if ( is_customize_preview() ) {
            wp_enqueue_style( 'foundationbuddy-customizer-stylesheet' );
        }
        
	}
    
}

add_action( 'wp_enqueue_scripts', 'foundationbuddy_enqueue_style' );

// adding the conditional wrapper around ie stylesheet
// source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
if( ! function_exists( 'foundationbuddy_ie_conditional ' ) ) {
    
	function foundationbuddy_ie_conditional( $tag, $handle ) {
		if ( 'foundationbuddy-ie-only' == $handle )
			$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
		return $tag;
	}
    
}

?>