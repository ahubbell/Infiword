<?php
/* ------------------------------------------------------------------------- *
 * Page to show the blog posts. This page is called from 'single.php'
/* ------------------------------------------------------------------------- */
?>
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
            <!-- article -->
            <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h2 class="entry-title single-post-header-title"><?php the_title(); ?></h2>
                    <?php infiword_entry_meta(); ?>
                </header>
                <?php
                    if ( ! is_sticky() || false !== get_post_format() ) {
                        get_template_part( 'library/post', 'formats' );
                    }
                    else {
                ?>

                        <div class="entry-content"><?php the_content(); ?></div>

                <?php
                    }
                ?>
                <div class="entry-content"><?php the_content(); ?></div>
                <div class="separator"></div>
                <div class="after-post-footer">
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'infiword'), 'after' => '</p></nav>' )); ?>
                    <?php edit_post_link('Edit this Post'); ?>
                </div>
            </article>
            <!-- /article -->
            
            <!-- post tags -->
            <?php if ( get_theme_mod('infiword_post_tags') == 'yes' || get_theme_mod('infiword_post_tags') == '' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'tags' ); ?>
            <?php } ?>
            <!-- /post tags -->
            
            <!-- post navigation -->
            <?php if ( get_theme_mod('infiword_post_navigation') == 'yes' || get_theme_mod('infiword_post_navigation') == '' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'navigation' ); ?>
            <?php } ?>
            <!-- /post navigation -->
            
            <!-- author -->
            <?php if ( get_theme_mod('infiword_author_bio') == 'yes' || get_theme_mod('infiword_author_bio') == '' ) {  ?> 
            <div class="separator"></div>
            <?php get_template_part( 'templates/author', 'bio' ); ?>
            <?php } ?>
            <!-- /author -->
            
            <!-- related posts -->
            <?php if ( get_theme_mod('infiword_show_related_posts') == 'tags' || get_theme_mod('infiword_show_related_posts') == 'category' || get_theme_mod('infiword_show_related_posts') == '' ) { ?>
            <div class="separator"></div>
            <?php get_template_part( 'templates/related', 'posts' ); ?>
            <?php } ?>
            <!-- /related posts -->
            
            <!-- comments -->
            <div class="separator"></div>
            <?php comments_template(); ?>
            <!-- /comments -->
        
            <?php endwhile; // End the loop ?>