<?php
// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if ( ! function_exists( 'foundationbuddy_entry_meta' ) ) {
    
    function foundationbuddy_entry_meta() {
    	echo '<a href="'. get_permalink( ) .'" title="'. __('Permalink to this post', 'foundationbuddy') .'"><i class="fa fa-link entry-meta"></i></a> ';
        echo '<span class="byline author">'. __('By', 'foundationbuddy') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></span>';
        echo ' on ';
        echo '<time class="updated" datetime="'. get_the_time('c') .'"><a href="'. get_permalink( ) .'">'. get_the_time('F jS, Y') .'</a></time>';
        echo ' in ';
        echo  the_category(', ');
    }
    
}

?>