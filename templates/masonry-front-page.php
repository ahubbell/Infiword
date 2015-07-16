<?php
/**
 * The template for displaying posts in the index page when the masonry option for the front-page is set to 'yes'.
 **/
?>

<!-- content -->
<div class="small-12 large-12 columns" id="content" role="main">

    <!-- container -->
    <div id="container">
        
        <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            
            <!-- the number of columns for the front page -->
            <?php if ( get_theme_mod('foundationbuddy_front_page_column_count') == 'three' || get_theme_mod('foundationbuddy_front_page_column_count') == '' ) { ?>
                <div class="small-12 large-4 columns masonry-content">
                    
            <?php } if ( get_theme_mod('foundationbuddy_front_page_column_count') == 'two' ) { ?>
                <div class="small-12 large-6 columns masonry-content">
            
            <?php } if ( get_theme_mod('foundationbuddy_front_page_column_count') == 'one' ) { ?>
                <div class="small-12 large-12 columns masonry-content">
            <?php } ?>
                            
            <?php get_template_part( 'content', get_post_format() ); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; // end have_posts() check ?>   
                    
    </div>
    <!-- /container -->
           
    <!-- separator-->
    <div class="separator"></div>          
    <!-- /separator-->
                    
    <!-- pagination -->
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('foundationbuddy_pagination') ) { foundationbuddy_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationbuddy' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationbuddy' ) ); ?></div>
		</nav>
	<?php } ?>
    <!-- /pagination -->
                    
</div>
<!-- /content -->
        
     <script type="text/javascript">
        jQuery(function($) {
                                    
            imagesLoaded( document.querySelector('#container'), function( instance ) {
                                              
                $('#container').masonry({
                  itemSelector: '.masonry-content',
                });
                
            });
            
        });
    </script> 