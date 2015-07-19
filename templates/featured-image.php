                    <?php if ( has_post_thumbnail() ) { ?>

                        <div class="featured-image-post">
                            <figure class="figure">

                                <?php 
                                    the_post_thumbnail('thumb-large');
                                    $caption = get_post(get_post_thumbnail_id())->post_excerpt;
                                    if ( isset($caption) && $caption ) echo '<figcaption>'.$caption.'</figcaption>';
                                ?>
                                
                            </figure>
                        </div>

                    <?php } ?>    