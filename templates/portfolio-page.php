<?php
/**
 * The template for displaying the portfolio items.
 **/
?>
<div class="portfolio-page">
    <div id="portfolio-container">
        
        <?php while (have_posts()) : the_post(); ?>
        
        <div class="small-12 large-4 columns masonry-content-portfolio" id="portfolio-content" role="main">
            <a href="<?php the_permalink(); ?>">
                <div class="portfolio-item-link-container">
                    <div class="portfolio-item-screenshot">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="portfolio-item-details-tab">
                        <div id="portfolio-item-name">
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <div id="portfolio-item-meta">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <?php endwhile; // End the loop ?>
        
    </div>
</div>

    <script type="text/javascript">
        $( document ).ready(function() {
                                    
            imagesLoaded( document.querySelector('#portfolio-container'), function( instance ) {
                                              
                $('#portfolio-container').masonry({
                  itemSelector: '.masonry-content-portfolio',
                });
                
            });
            
        });
    </script>