<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying posts having the 'full-width' layout. This
 * page is called from the 'single.php' file. The full-width layout will not
 * provide any sidebar on any side of the main content.
/* ------------------------------------------------------------------------- */
?>

        <!-- single-page-content -->
        <div class="small-12 large-12 columns" id="single-page-content" role="main">
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
            <!-- article -->
            <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title single-post-header-title"><?php the_title(); ?></h1>
                    <?php foundationbuddy_entry_meta(); ?>
                </header>
                <?php if ( get_theme_mod('foundationbuddy_post_show_featured_image_on_single_page') == 'yes' ) {  ?>
                    <!-- featured image -->
                    <?php get_template_part( 'templates/featured', 'image' ); ?>
                    <!-- /featured image -->
                <?php } ?>
                <?php get_template_part( 'library/post', 'formats' ); ?>
                <div class="entry-content"><?php the_content(); ?></div>
                <div class="separator"></div>
                <div class="after-post-footer">
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'foundationbuddy'), 'after' => '</p></nav>' )); ?>
                    <?php edit_post_link('Edit this Post'); ?>
                </div>
            </article>
            <!-- /article -->
            
            <!-- post tags -->
            <?php if ( get_theme_mod('foundationbuddy_post_tags') == 'yes' || get_theme_mod('foundationbuddy_post_tags') == '' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'tags' ); ?>
            <?php } ?>
            <!-- /post tags -->
            
            <!-- post navigation -->
            <?php if ( get_theme_mod('foundationbuddy_post_navigation' || get_theme_mod('foundationbuddy_post_navigation') == '' ) == 'yes' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'navigation' ); ?>
            <?php } ?>
            <!-- /post navigation -->
            
            <!-- author -->
            <?php if ( get_theme_mod('foundationbuddy_author_bio' || get_theme_mod('foundationbuddy_author_bio') == '' ) == 'yes' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/author', 'bio' ); ?>
            <?php } ?>
            <!-- /author -->
            
            <!-- related posts -->
            <?php if ( get_theme_mod('foundationbuddy_show_related_posts') == 'tags' || get_theme_mod('foundationbuddy_show_related_posts') == 'category' || get_theme_mod('foundationbuddy_show_related_posts') == '' ) { ?>
            <div class="separator"></div>
            <?php get_template_part( 'templates/related', 'posts' ); ?>
            <?php } ?>
            <!-- /related posts -->
            
            
            <!-- comments -->
            <div class="separator"></div>
            <?php comments_template(); ?>
            <!-- /comments -->
        
            <?php endwhile; // End the loop ?>
        </div>
        <!-- /single-page-content -->