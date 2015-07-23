<?php $meta = get_post_custom($post->ID); ?>

<!-- audio post format -->
<?php if ( has_post_format( 'audio' ) ): // Audio ?>
	
<?php endif; ?>
<!-- /audio post format -->

<!-- gallery post format -->
<?php if ( has_post_format( 'gallery' ) ):  // Gallery ?>

    <style>
        dl.gallery-item img {
            display: none;
        }
    </style>

    <!-- show the lightbox for other images if any gallery is created but not using the gallery post format -->
    <?php if ( get_post_gallery() ) : $gallery = get_post_gallery( get_the_ID(), false ); ?>
                
        <!-- slider -->   
        <div class="small-12 large-12 columns flexslider" id="slider">        
            <ul class="slides">
            
                <?php foreach( $gallery['src'] AS $src ) {
                    $img_id = foundationbuddy_get_attachment_id_from_src($src);
                    $img_info = foundationbuddy_get_attachment( $img_id );
                    $img_caption = $img_info['caption'];
                ?>
                
                <li>
                    <img src="<?php echo $src; ?>" class="my-custom-class" alt="<?php _e('Gallery image','foundationbuddy'); ?>" />
                    
                    <?php if ($img_caption): ?><p class="flex-caption"><?php echo $img_caption; ?></p><?php endif; ?>
                
                </li>
                <?php } ?>
            </ul>
        </div>    
        <!-- slider -->

        <!-- lightbox -->    
        <div class="small-12 large-12 columns lightbox" id="lightbox-content">
            <div id="lightbox-container">
                <ul class="clearing-thumbs small-block-grid-4">
                
                <?php
                    foreach( $gallery['src'] AS $src ) {
                    $img_id = foundationbuddy_get_attachment_id_from_src($src);
                    $img_info =  foundationbuddy_get_attachment( $img_id );
                    $img_caption = $img_info['caption'];
                ?>
                    
                    <li id="image-gallery-items">
                        <a href="<?php echo $src; ?>" class="swipebox" title="<?php if ($img_caption){ echo $img_caption; } ?>">
                            <img src="<?php echo $src; ?>">
                        </a>
                    </li>   

                    <?php } ?>
                
                </ul>
            </div>
        </div>
        <!-- /lightbox -->

        <!-- lightbox gallery items masonry -->
        <script type="text/javascript">
            jQuery(function($) {

                imagesLoaded( document.querySelector('#lightbox-container'), function( instance ) {

                    $('#lightbox-container').masonry({
                      itemSelector: '#image-gallery-items',
                    });

                });

            });
        </script> 
        <!-- /lightbox gallery items masonry -->

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




















<?php

/* Filter the content of chat posts. */
add_filter( 'the_content', 'my_format_chat_content' );

/* Auto-add paragraphs to the chat text. */
add_filter( 'my_post_format_chat_text', 'wpautop' );

/**
 * This function filters the post content when viewing a post with the "chat" post format.  It formats the 
 * content with structured HTML markup to make it easy for theme developers to style chat posts.  The 
 * advantage of this solution is that it allows for more than two speakers (like most solutions).  You can 
 * have 100s of speakers in your chat post, each with their own, unique classes for styling.
 *
 * @author David Chandra
 * @link http://www.turtlepod.org
 * @author Justin Tadlock
 * @link http://justintadlock.com
 * @copyright Copyright (c) 2012
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link http://justintadlock.com/archives/2012/08/21/post-formats-chat
 *
 * @global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
 * @param string $content The content of the post.
 * @return string $chat_output The formatted content of the post.
 */
function my_format_chat_content( $content ) {
    global $_post_format_chat_ids;

    /* If this is not a 'chat' post, return the content. */
    if ( !has_post_format( 'chat' ) )
        return $content;

    /* Set the global variable of speaker IDs to a new, empty array for this chat. */
    $_post_format_chat_ids = array();

    /* Allow the separator (separator for speaker/text) to be filtered. */
    $separator = apply_filters( 'my_post_format_chat_separator', ':' );

    /* Open the chat transcript div and give it a unique ID based on the post ID. */
    $chat_output = "\n\t\t\t" . '<div id="chat-transcript-' . esc_attr( get_the_ID() ) . '" class="chat-transcript">';

    /* Split the content to get individual chat rows. */
    $chat_rows = preg_split( "/(\r?\n)+|(<br\s*\/?>\s*)+/", $content );

    /* Loop through each row and format the output. */
    foreach ( $chat_rows as $chat_row ) {

        /* If a speaker is found, create a new chat row with speaker and text. */
        if ( strpos( $chat_row, $separator ) ) {

            /* Split the chat row into author/text. */
            $chat_row_split = explode( $separator, trim( $chat_row ), 2 );

            /* Get the chat author and strip tags. */
            $chat_author = strip_tags( trim( $chat_row_split[0] ) );

            /* Get the chat text. */
            $chat_text = trim( $chat_row_split[1] );

            /* Get the chat row ID (based on chat author) to give a specific class to each row for styling. */
            $speaker_id = my_format_chat_row_id( $chat_author );

            /* Open the chat row. */
            $chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';

            /* Add the chat row author. */
            $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-author ' . sanitize_html_class( strtolower( "chat-author-{$chat_author}" ) ) . ' vcard"><i class="fa fa-user gap"></i>' . apply_filters( 'my_post_format_chat_author', $chat_author, $speaker_id ) . '' . $separator . '</div>';

            /* Add the chat row text. */
            $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_text, $chat_author, $speaker_id ) ) . '</div>';

            /* Close the chat row. */
            $chat_output .= "\n\t\t\t\t" . '</div><!-- .chat-row -->';
        }

        /**
         * If no author is found, assume this is a separate paragraph of text that belongs to the
         * previous speaker and label it as such, but let's still create a new row.
         */
        else {

            /* Make sure we have text. */
            if ( !empty( $chat_row ) ) {

                /* Open the chat row. */
                $chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';

                /* Don't add a chat row author.  The label for the previous row should suffice. */

                /* Add the chat row text. */
                $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_row, $chat_author, $speaker_id ) ) . '</div>';

                /* Close the chat row. */
                $chat_output .= "\n\t\t\t</div><!-- .chat-row -->";
            }
        }
    }

    /* Close the chat transcript div. */
    $chat_output .= "\n\t\t\t</div><!-- .chat-transcript -->\n";

    /* Return the chat content and apply filters for developers. */
    return apply_filters( 'my_post_format_chat_content', $chat_output );
}

/**
 * This function returns an ID based on the provided chat author name.  It keeps these IDs in a global 
 * array and makes sure we have a unique set of IDs.  The purpose of this function is to provide an "ID"
 * that will be used in an HTML class for individual chat rows so they can be styled.  So, speaker "John" 
 * will always have the same class each time he speaks.  And, speaker "Mary" will have a different class 
 * from "John" but will have the same class each time she speaks.
 *
 * @author David Chandra
 * @link http://www.turtlepod.org
 * @author Justin Tadlock
 * @link http://justintadlock.com
 * @copyright Copyright (c) 2012
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link http://justintadlock.com/archives/2012/08/21/post-formats-chat
 *
 * @global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
 * @param string $chat_author Author of the current chat row.
 * @return int The ID for the chat row based on the author.
 */
function my_format_chat_row_id( $chat_author ) {
    global $_post_format_chat_ids;

    /* Let's sanitize the chat author to avoid craziness and differences like "John" and "john". */
    $chat_author = strtolower( strip_tags( $chat_author ) );

    /* Add the chat author to the array. */
    $_post_format_chat_ids[] = $chat_author;

    /* Make sure the array only holds unique values. */
    $_post_format_chat_ids = array_unique( $_post_format_chat_ids );

    /* Return the array key for the chat author and add "1" to avoid an ID of "0". */
    return absint( array_search( $chat_author, $_post_format_chat_ids ) ) + 1;
}
?>

<?php



?>