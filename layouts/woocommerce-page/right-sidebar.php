<?php

/* ------------------------------------------------------------------------- *

 * The template for displaying the woocommerce page having the 'right-sidebar' layout. This

 * page is called from the 'woocommerce.php' file. The right-sidebar layout will

 * provide only one sidebar on the right side of the main content. However, for the

 * sidebar to show, there must be some widgets activated on it. If there

 * are no widgets activated on it, then the sidebar will be hidden and

 * there will be a blank space on that side of the main content.

/* ------------------------------------------------------------------------- */

?>



        <!-- single-page-content -->

        <div class="small-12 large-8 columns" id="single-page-content" role="main">

            <div class="row-woocommerce">

                <article id="woocommerce">

                    

                    <?php /* Start loop */ ?>



                    <?php while ( woocommerce_content() ) : the_post(); ?>

                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                            <header>

                                <h2 class="entry-title single-post-header-title"><?php the_title(); ?></h2>

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