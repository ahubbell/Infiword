<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying the index page having the 'left-dual-sidebar' layout. This
 * page is called from the 'index.php' file. The left-dual-sidebar layout will
 * provide two sidebar on the left side of the main content. However, for the
 * sidebars to show, there must be some widgets activated on them. If there
 * are no widgets activated on them, then the sidebar will be hidden and
 * there will be a blank space on that side of the main content.
/* ------------------------------------------------------------------------- */
?>

        <!-- single-page-content -->
        <div class="small-12 large-6 columns" id="index-page-content" role="main">
            <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; // end have_posts() check ?>

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
        <!-- /single-page-content -->