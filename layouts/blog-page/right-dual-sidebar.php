<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying posts having the 'right-dual-sidebar' layout. This
 * page is called from the 'single.php' file. The right-dual-sidebar layout will
 * provide two sidebars on the right side of the main content. However, for the
 * sidebars to show, there must be some widgets activated on them. If there
 * are no widgets activated on them, then the sidebar will be hidden and
 * there will be a blank space on that side of the main content.
/* ------------------------------------------------------------------------- */
?>
        
        <!-- single-page-content -->
        <div class="small-12 large-6 columns" id="single-page-content" role="main">
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
            <!-- article -->
            <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h2 class="entry-title single-post-header-title"><?php the_title(); ?></h2>
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
            <?php if ( get_theme_mod('foundationbuddy_post_navigation') == 'yes' || get_theme_mod('foundationbuddy_post_navigation') == '' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'navigation' ); ?>
            <?php } ?>
            <!-- /post navigation -->
            
            <!-- author -->
            <?php if ( get_theme_mod('foundationbuddy_author_bio') == 'yes' || get_theme_mod('foundationbuddy_author_bio') == '' ) {  ?> 
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