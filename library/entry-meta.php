<?php
/* ------------------------------------------------------------------------- *
 *  Contains the meta information about each blog post like the author,
 *  post date and category. This meta is showing underneath the post title
/* ------------------------------------------------------------------------- */
?>

<?php
// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if ( ! function_exists( 'infiword_entry_meta' ) ) {
    
    function infiword_entry_meta() {
    	if ( ! is_single() ) {

    		// no need to show permalink on the single blog posts
    		echo '<a href="'. get_permalink( ) .'" title="'. __('Permalink to this post', 'infiword') .'"><i class="fa fa-link entry-meta"></i></a> ';	
    	
    	}

    	// the author name
        echo '<span class="byline author">'. __('By', 'infiword') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></span>';
        echo ' on ';
        
        if ( ! is_single() ) {
            // post time
            echo '<time class="updated" datetime="'. get_the_time('c') .'"><a href="'. get_permalink( ) .'">'. get_the_time('F jS, Y') .'</a></time>';
        }
        else {
            // post time
            echo '<time class="updated" datetime="'. get_the_time('c') .'">'. get_the_time('F jS, Y') .'</time>';
        }
        echo ' in ';

        // post category
        echo  the_category(', ');
    }
    
}
?>