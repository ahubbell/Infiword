<?php
/* ------------------------------------------------------------------------- *
 * Page to show the author posts. This page is called from 'category.php'
/* ------------------------------------------------------------------------- */
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
                 <div class="category-query">
                    <h2 class="category-page-name"><?php echo single_cat_title( '', true ); ?></h2>
                    <div class="category-page-description"><?php echo category_description(); ?></div>
                </div>
            </article>
            <?php if ( have_posts() ) : ?>
    
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
                
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                
            <?php endif; // end have_posts() check ?>
            
            <div class="separator"></div>
            
            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if ( function_exists('foundationbuddy_pagination') ) { foundationbuddy_pagination(); } else if ( is_paged() ) { ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationbuddy' ) ); ?></div>
                    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationbuddy' ) ); ?></div>
                </nav>
            <?php } ?>