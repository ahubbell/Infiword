<?php
/* ------------------------------------------------------------------------- *
 * Page to show the author posts. This page is called from 'author.php'
/* ------------------------------------------------------------------------- */
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
                <?php
                    $author = get_the_author();
                 ?>
                 <div class="author-query">
                    <div class="author-page-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                    </div>
                    <h2 class="author-page-name"><?php echo $author; ?></h2>
                    <h3 class="author-page-description"><?php echo the_author_meta('user_description'); ?></h3>
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