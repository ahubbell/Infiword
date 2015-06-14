<?php
/**
 * The template for displaying posts in the index page when the masonry option for the front-page is set to 'no'.
 **/
?>

<div class="small-12 large-12 columns" id="content" role="main">   
    <div class="posts-wrapper">
        <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ $ink_count = 0; $ink_row_count=0 ?>
            <?php while ( have_posts() ) : the_post(); if ($ink_count == 0 ) { echo "<div class='row-".$ink_row_count." row'>"; } ?>
            <!-- the number of columns for the front page -->
            <?php if ( get_theme_mod('foundationbuddy_front_page_column_count') ) { 
                if ( get_theme_mod('foundationbuddy_front_page_column_count') == 'one' ) { ?>
                    <!-- full-width layout -->
                    <div class="small-12 large-12 columns">
                <?php } if ( get_theme_mod('foundationbuddy_front_page_column_count') == 'two' ) { ?>
                    <!-- two-column layout -->
                    <div class="small-12 large-6 columns">
                <?php } if ( get_theme_mod('foundationbuddy_front_page_column_count') == 'three' ) { ?>
                    <!-- three-column layout -->
                    <div class="small-12 large-4 columns">
                <?php } } ?>
                        <div class="index-content">
                            <?php get_template_part( 'content', get_post_format() ); ?>
                        </div>    
                    </div>
                <?php if ($ink_count == 2 ) { echo "</div>"; $ink_count=0; $ink_row_count++; } else { $ink_count++; } ?>
            <?php endwhile; ?>
        <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; // end have_posts() check ?>   
    </div>
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('foundationbuddy_pagination') ) { foundationbuddy_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationbuddy' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationbuddy' ) ); ?></div>                
        </nav>
	<?php } ?>