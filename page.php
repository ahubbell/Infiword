<!-- page.php -->
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

                            <hr>

                            <!-- single-post-body -->
                            <div class="single-post-body">
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <p><?php the_content('Read more...'); ?></p>
                                    <?php wp_link_pages(); ?>
                                </div>
                            </div>
                            <!-- /.single-post-body -->

                        </div>
                        <!-- /.single-post-wrapper -->

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
