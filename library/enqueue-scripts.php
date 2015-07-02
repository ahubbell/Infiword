<?php

/**********************
Enqueue CSS and Scripts
**********************/

// loading modernizr and jquery, and reply script
if( ! function_exists( 'foundationbuddy_scripts_and_styles ' ) ) {
    
	function foundationbuddy_scripts_and_styles() {
	  if (!is_admin()) {
        
        //move jquery to the footer
        wp_deregister_script('jquery'); 
        wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', false, '1.11.3', false); 

	    // modernizr (without media query polyfill)
	    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.6.2', false );

	    // comment reply script for threaded comments
	    if( get_option( 'thread_comments' ) )  { wp_enqueue_script( 'comment-reply' ); }
	    
	    // adding Foundation scripts file in the footer
	    wp_register_script( 'foundation-js', get_template_directory_uri() . '/js/foundation/foundation.min.js', array( 'jquery' ), '', true );
          
        // adding Fastclick scripts file in the footer
	    wp_register_script( 'fastclick-js', get_template_directory_uri() . '/js/vendor/fastclick.js', array( 'jquery' ), '1.0.0', true );
          
        // adding Masonry scripts file in the footer
	    wp_register_script( 'masonry-js', get_template_directory_uri() . '/js/vendor/masonry.pkgd.js', array( 'jquery' ), '3.3.0', true );
          
        // adding imagesLoaded scripts file in the footer
	    wp_register_script( 'imagesloaded-js', get_template_directory_uri() . '/js/vendor/imagesloaded.pkgd.js', array( 'jquery' ), '3.1.8', true );
          
        // adding wow scripts file in the footer
	    wp_register_script( 'wow-js', get_template_directory_uri() . '/js/vendor/wow.js', array( 'jquery' ), '', true );
          
        // adding pace scripts file in the footer
	    wp_register_script( 'pace-js', get_template_directory_uri() . '/js/vendor/pace.js', array( 'jquery' ), '', true );
          
        // adding fitvid scripts file in the footer
	    wp_register_script( 'fitvids-js', get_template_directory_uri() . '/js/vendor/jquery.fitvids.js', array( 'jquery' ), '', true );
          
        // adding flexslider scripts file in the footer
	    wp_register_script( 'flexslider-js', get_template_directory_uri() . '/js/vendor/jquery.flexslider.js', array( 'jquery' ), '', true );
          
        // adding swipebox scripts file in the footer
	    wp_register_script( 'swipebox-js', get_template_directory_uri() . '/js/vendor/jquery.swipebox.js', array( 'jquery' ), '', true );
          
        // adding Custom scripts file in the footer
	    wp_register_script( 'custom-js', get_template_directory_uri() . '/js/vendor/custom.js', array( 'jquery' ), '', true );
          	    
	    global $is_IE;
	    if ($is_IE) {
	       wp_register_script ( 'html5shiv', "/js/vendor/html5.js" , false, true);
	    }

	    // enqueue styles and scripts
        wp_enqueue_script('jquery');
	    wp_enqueue_script( 'modernizr' );
	    wp_enqueue_script( 'foundation-js' );
        wp_enqueue_script( 'fastclick-js' );
        wp_enqueue_script( 'masonry-js' );
        wp_enqueue_script( 'imagesloaded-js' );
        wp_enqueue_script( 'wow-js' );
        wp_enqueue_script( 'pace-js' );
        wp_enqueue_script( 'fitvids-js' );
        wp_enqueue_script( 'flexslider-js' );
        wp_enqueue_script( 'swipebox-js' );
        wp_enqueue_script( 'custom-js' );
	    wp_enqueue_script( 'html5shiv' );

	  }
	}
    
}

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