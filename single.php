<!-- single.php -->
<?php get_header(); ?>

               <!-- row -->
                <div class="row clearfix single-page-row">
                    
                    <!-- the loop -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <!-- column -->
                    <div class="col-md-8">
                    
                        <!-- single-post-wrapper -->
                        <div class="single-post-wrapper">

                            <br>

                            <!-- single-post-heading -->
                            <div class="single-post-heading">
                                <h1 class="text-center"><?php the_title(); ?></h1>
                            </div>
                            <!-- /.single-post-heading -->

                            <br>

                            <!-- single-post-meta -->
                            <div class="single-post-meta-above">
                                <ul class="nav nav-pills home">

                                    <!-- single-post-author -->
                                    <li class="single-post-author">
                                        By <?php the_author_posts_link(); ?>
                                    </li>
                                    <!-- /.single-post-author -->

                                    <!-- single-post-category -->
                                    <li class="single-post-category">
                                        in <?php the_category( ', ' ); ?>
                                    </li>
                                    <!-- /.single-post-category-->

                                    <!-- single-post-date -->
                                    <li class="single-post-date">
                                        on <?php the_time( get_option( 'date_format' ) ); ?>
                                    </li>
                                    <!-- /.single-post-date-->

                                </ul>
                            </div>
                            <!-- /.single-post-meta -->
                            
                            <br>

                            <!-- single-post-body -->
                            <div class="single-post-body">
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <p><?php the_content('Read more...'); ?></p>
                                    <?php wp_link_pages(); ?>
                                </div>
                            </div>
                            <!-- /.single-post-body -->

                            <br><hr>

                            <!-- single-post-meta -->
                            <div class="single-post-meta">
                                <ul class="nav navbar-nav">

                                    <!-- single-post-tag -->
                                    <li class="single-post-tag">
                                        <?php the_tags(); ?>
                                    </li>
                                    <!-- /.single-post-tag-->

                                </ul>
                            </div>
                            <!-- /.single-post-meta -->
                            
                            <br><hr>
                            
                            <!-- single-post-author-details -->
                            <div class="single-post-author-details">
                                <div class="row clearfix">
                                    <div class="col-md-2 img-responsive">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="single-post-author-details-author-name"><?php the_author_meta('display_name'); ?></h4>
                                        <p class="single-post-author-details-author-bio"><?php the_author_meta('description'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.single-post-author-details -->

                        </div>
                        <!-- /.single-post-wrapper -->
                        
                        <!-- single-post-comments -->
                        <div class="single-posts-comments">
                            
                            <!-- comments template -->
                            <?php comments_template(); ?>
                            
                        </div>
                        <!-- /.single-posts-comments -->
                        
                        <?php if ('open' == $post->comment_status) : ?>
                        <!-- comment-text-box -->
                        <div class="comment-text-box">
                        
                            <!-- comment-text-box-container -->
                            <div class="comment-text-box-container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-container">
                                            <?php comment_form(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- comment-text-box-container -->
                            
                        </div>
                        <!-- /.comment-text-box -->
                        
                        <?php endif;?>

                    </div>
                    <!-- /.column -->
                    
                    <!-- column -->
                    <div class="col-md-4">
                        
                        <!-- single-page-sidebar -->
                        <div class="single-page-sidebar">

                            <!-- sidebar -->
                            <?php get_sidebar(); ?>
                            
                        </div>
                        <!-- /.single-page-sidebar -->
                    
                    </div>
                    <!-- /.column -->
                    
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    <!-- /the loop -->
                    
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.block-wrapper -->
    
        </div>
        <!-- /.container -->
        
    </div>
    <!-- /.canvas -->
    <script>

</script>

<?php get_footer(); ?>
