<?php

    if ( post_password_required() ) {
        return;
    }
?>

                            <?php if ( have_comments() ) : ?>
                            <!-- single-post-comments-container -->
                            <div class="single-post-comments-container">
                                
                                <!-- row -->
                                <div class="row">
                                    
                                    <!-- col-md-12 -->
                                    <div class="col-md-12">
                                        <h3>
                                            <?php
                                                printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'infi' ), number_format_i18n( get_comments_number() ), get_the_title() );
                                            ?>:
                                        </h3>
                                        
                                    </div>
                                    <!-- /.col-md-12 -->
                                    
                                    <br>
                                        
                                </div>
                                <!-- /.row -->

                                <?php wp_list_comments( array( 'callback' => 'infi_comments_callback' ) ); ?>
                                        
                                    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                                    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                                        <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'infi' ); ?></h1>
                                        <div class="nav-previous">
                                            <?php previous_comments_link( __( '&larr; Older Comments', 'infi' ) ); ?>
                                        </div>
                                        <div class="nav-next">
                                            <?php next_comments_link( __( 'Newer Comments &rarr;', 'infi' ) ); ?>
                                        </div>
                                    </nav>
                                    <?php endif; ?>
                                
                                </div>
                                <!-- /.single-post-comments-container -->
                                <?php endif; ?>

