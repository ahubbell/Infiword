<?php
/* ------------------------------------------------------------------------- *
 * Page to show the author posts. This page is called from 'author.php'
/* ------------------------------------------------------------------------- */
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
                <div class="search-query">
                    <?php
                        $mySearch = new WP_Query("s=$s & showposts=-1");
                    ?>
                    <h2> <?php echo $mySearch->post_count; ?> Search results for "<?php echo esc_html( get_search_query( false ) ); ?>"</h2>
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
            <?php if ( function_exists('infiword_pagination') ) { infiword_pagination(); } else if ( is_paged() ) { ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'infiword' ) ); ?></div>
                    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'infiword' ) ); ?></div>
                </nav>
            <?php } ?>