
<?php get_header(); ?>

                <br>
                <h1 class="text-center page-header-dialogue">Archives</h1>
                <hr>

                <!-- row -->
                <?php /* Start the Loop */ $ink_count = 0; $ink_row_count=0 ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				    if ($ink_count == 0 ) {echo "<div class='row-".$ink_row_count." row'>";}
			     ?>
                    
                    <!-- column -->
                    <div class="col-md-4 column post-wrap">

                        <!-- post-wrapper -->
                        <div class="post-wrapper">

                            <!-- post-container -->
                            <div class="post-container">
                                
                                <!-- post-container-category -->
                                <?php
                                    $category = get_the_category();
                                ?>
                                <div class="post-container-category" id="<?php echo $category[0]->cat_name; ?>">
                                    <?php the_category( ', ' ); ?>
                                </div>
                                <!-- post-container-category -->
                                
                                <!-- post-container-heading -->
                                <div class="post-container-heading">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                </div>
                                <!-- /.post-container-heading -->
                                
                                <!-- post-container-excerpt -->
                                <div class="post-container-excerpt">
                                    <p><?php the_excerpt(); ?></p>
                                </div>    
                                <!-- /.post-container-excerpt -->
                                
                                <!-- post-container-tabbed-content -->
                                <div class="post-container-tabbed-content">
                                    <div class="tabbable-panel">
                                        <div class="tabbable-line tabs-below">
                                            <ul class="nav nav-pills home">
                                                <li>By <?php the_author_posts_link(); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                                <!-- /.post-container-tabbed-content -->                  
                                
                            </div>
                            <!-- /.post-container -->

                        </div>
                        <!-- /.post-wrapper -->

                    </div>
                    <!-- /.column -->
                    
                <?php 
                    if ($ink_count == 2 )
                        {
                            echo "</div>";
                            $ink_count=0;
                            $ink_row_count++;
                        }
                    else {	
                        $ink_count++;
                    }
                    endwhile; else : ?> 
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                <!-- /.row -->
                    
                </div>
                <!-- /the loop -->
                    
                <!-- page-pagination -->
                <div class="page-pagination">
                    <nav>
                        <ul class="pager">
                            <li class="previous"> <?php next_posts_link( 'Older posts' ); ?></li>
                            <li class="next"> <?php previous_posts_link( 'Newer posts' ); ?></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.page-pagination -->
                
            </div>
            <!-- /.block-wrapper -->
    
        </div>
        <!-- /.container -->
        
    </div>
    <!-- /.canvas -->

<?php get_footer(); ?>