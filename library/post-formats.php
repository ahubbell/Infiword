<?php $meta = get_post_custom($post->ID); ?>

<!-- audio post format -->
<?php if ( has_post_format( 'audio' ) ): // Audio ?>
	
<?php endif; ?>
<!-- /audio post format -->

<!-- gallery post format -->
<?php if ( has_post_format( 'gallery' ) ):  // Gallery ?>

    <!-- show the lightbox for other images if any gallery is created but not using the gallery post format -->
    <?php if ( get_post_gallery() ) : $gallery = get_post_gallery( get_the_ID(), false ); ?>
                
        <!-- slider -->   
        <div class="small-12 large-12 columns flexslider" id="slider">        
            <ul class="slides">
            
                <?php foreach( $gallery['src'] AS $src ) {
                    $img_id = foundationbuddy_get_attachment_id_from_src($src);
                    $img_info =  foundationbuddy_get_attachment( $img_id );
                ?>
                
                <li>
                    <img src="<?php echo $src; ?>" class="my-custom-class" alt="<?php _e('Gallery image','foundationbuddy'); ?>" />
                    
                    <?php if ($img_info['caption']): ?><p class="flex-caption"><?php echo $img_info['caption']; ?></p><?php endif; ?>
                
                </li>
                <?php } ?>
            </ul>
        </div>    
        <!-- slider -->

        <!-- carousel -->   
        <!-- <div class="small-12 large-12 columns flexslider" id="carousel">        
            <ul class="slides">
            
                <?php foreach( $gallery['src'] AS $src ) {
                    $img_id = foundationbuddy_get_attachment_id_from_src($src);
                    $img_info =  foundationbuddy_get_attachment( $img_id );
                ?>
                
                <li>
                    <img src="<?php echo $src; ?>" class="my-custom-class" alt="<?php _e('Gallery image','foundationbuddy'); ?>" />
                </li>
                <?php } ?>
            </ul>
        </div> -->  
        <!-- carousel -->

        <!-- lightbox -->    
        <!-- <div class="small-12 large-12 columns lightbox" id="lightbox-content">
            <div id="lightbox-container">
                <ul class="clearing-thumbs small-block-grid-4">
                
                <?php
                    foreach( $gallery['src'] AS $src ) {
                    $img_id = foundationbuddy_get_attachment_id_from_src($src);
                    $img_info =  foundationbuddy_get_attachment( $img_id );
                ?>
                    
                    <li id="image-gallery-items">
                        <a href="<?php echo $src; ?>" class="swipebox" title="<?php if ($img_info['caption']){ echo $img_info['caption']; } ?>">
                            <img src="<?php echo $src; ?>">
                        </a>
                    </li>   

                    <?php } ?>
                
                </ul>
            </div>
        </div> -->
        <!-- lightbox -->

    <?php endif;  ?>
    
<?php endif; ?>
<!-- /gallery post format -->

<!-- image post format -->
<?php if ( has_post_format( 'image' ) ):// Image ?>

	<div class="post-format-image">
		<figure class="figure">
			
            <?php if ( has_post_thumbnail() ) {	
				the_post_thumbnail('thumb-large'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<figcaption>'.$caption.'</figcaption>';
			} ?>
            
		</figure>
	</div>
	
<?php endif; ?>
<!-- /images post format -->

<!-- video post format -->
<?php if ( has_post_format( 'video' ) ): // Video ?>
	
<?php endif; ?>
<!-- /video post format -->

<!-- quote post format -->
<?php if ( has_post_format( 'quote' ) ): // Quote ?>

<?php endif; ?>
<!-- /quote post format -->

<!-- chat post format -->
<?php if ( has_post_format( 'chat' ) ): // Chat ?>
	
<?php endif; ?>
<!-- /chat post format -->

<!-- link post format -->
<?php if ( has_post_format( 'link' ) ): // Link ?>
	
<?php endif; ?>
<!-- /link post format -->

<!-- status post format -->
<?php if ( has_post_format( 'status' ) ): // Link ?>
	
<?php endif; ?>
<!-- /status post format -->