<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying the woocommerce page having the 'full-width' layout. This
 * page is called from the 'woocommerce.php' file. The full-width layout will not
 * provide any sidebar on any side of the main content.
/* ------------------------------------------------------------------------- */
?>

        <!-- single-page-content -->
        <div class="small-12 large-12 columns woocommerce-card" id="single-page-content" role="main">
            <div class="row-woocommerce">
                <article id="woocommerce">
                    
                    <?php /* Start loop */ ?>

                    <?php while ( woocommerce_content() ) : the_post(); ?>
                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <header>
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <?php do_action( 'foundationPress_page_before_entry_content' ); ?>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                            <footer>
                                <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'FoundationPress' ), 'after' => '</p></nav>' ) ); ?>
                                <p><?php the_tags(); ?></p>
                            </footer>
                            <?php do_action( 'foundationPress_page_before_comments' ); ?>
                            <?php comments_template(); ?>
                            <?php do_action( 'foundationPress_page_after_comments' ); ?>
                        </article>
                    <?php endwhile;?>
            
                </article>
            </div>
        </div>
        <!-- /single-page-content -->