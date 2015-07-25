<?php

/* ------------------------------------------------------------------------- *
 *  Prevent YouTube videos from overlapping content
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_add_video_wmode_transparent' ) ) {
    
    function foundationbuddy_add_video_wmode_transparent($html, $url, $attr) {
        if ( strpos( $html, "<embed src=" ) !== false )
           { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
        elseif ( strpos ( $html, 'feature=oembed' ) !== false )
           { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
        else
           { return $html; }
    }
    
}

add_filter( 'embed_oembed_html', 'foundationbuddy_add_video_wmode_transparent', 10, 3);


/* ------------------------------------------------------------------------- *
 *  Custoom excerpt more
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_excerpt_more' ) ) {
    
    function foundationbuddy_excerpt_more( $more ) {
        //return '...';
        return '... <br><br> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More ', 'foundationbuddy') . '</a>';
    }
    
}

add_filter('excerpt_more', 'foundationbuddy_excerpt_more');


/* ------------------------------------------------------------------------- *
 *  Add custom reply link
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_add_comment_author_to_reply_link' ) ) {
    
    function foundationbuddy_add_comment_author_to_reply_link($link, $args, $comment){
        $comment = get_comment( $comment );

        // If no comment author is blank, use 'Anonymous'
        if ( empty($comment->comment_author) ) {
            if (!empty($comment->user_id)){
                $user=get_userdata($comment->user_id);
                $author=$user->user_login;
            } else {
                $author = __('Anonymous', 'foundationbuddy');
            }
        } else {
            $author = $comment->comment_author;
        }

        // Replace Reply Link with "Reply to &lt;Author First Name>"
        $reply_link_text = $args['reply_text'];
        $link = str_replace($reply_link_text, '<i class="fa fa-reply"></i> Reply to ' . $author, $link);

        return $link;
    }
    
}

add_filter('comment_reply_link', 'foundationbuddy_add_comment_author_to_reply_link', 10, 3);


/* ------------------------------------------------------------------------- *
 *  Custom attachment post
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_get_attachment' ) ) {
    
    function foundationbuddy_get_attachment( $attachment_id ) {
        $attachment = get_post( $attachment_id );
        return array(
            'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink( $attachment->ID ),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
        );
    }
    
}


/* ------------------------------------------------------------------------- *
 *  Get images attached to post
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_post_images' ) ) {
    
	function foundationbuddy_post_images( $args=array() ) {
		global $post;
		$defaults = array(
			'numberposts'		=> -1,
			'order'				=> 'ASC',
			'orderby'			=> 'menu_order',
			'post_mime_type'	=> 'image',
			'post_parent'		=>  $post->ID,
			'post_type'			=> 'attachment',
		);
		$args = wp_parse_args( $args, $defaults );
		return get_posts( $args );
	}
    
}


/* ------------------------------------------------------------------------- *
 *  Get image id from image src
/* ------------------------------------------------------------------------- */
if ( ! function_exists( 'foundationbuddy_get_attachment_id_from_src' ) ) {
    
    function foundationbuddy_get_attachment_id_from_src ($image_src) {
        global $wpdb;
        $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
        $id = $wpdb->get_var($query);
        return $id;
    }

}

/* ------------------------------------------------------------------------- *
 *  Get total published post count
/* ------------------------------------------------------------------------- */
if ( ! function_exists( 'foundationbuddy_get_total_published_post_count' ) ) {
    
    function foundationbuddy_get_total_published_post_count () {
        $published_posts_count = wp_count_posts()->publish;
        return $published_posts_count;
    }

}


/* ------------------------------------------------------------------------- *
/*  WooCommerce
/* ------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------- *
/*  Outer wrapper (Default Fallback if woocommerce.php is not found)
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_woocommerce_wrapper_start' ) ) {

    function foundationbuddy_woocommerce_wrapper_start() {
        echo '<div class="small-12 large-8 columns woocommerce-card" id="single-page-content" role="main">';
        echo '<div class="row-woocommerce"><article id="woocommerce">';
    }
    
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'foundationbuddy_woocommerce_wrapper_start', 10);


/* ------------------------------------------------------------------------- *
/*  Inner wrapper (Default Fallback if woocommerce.php is not found)
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_woocoomerce_wrapper_end' ) ) {

    function foundationbuddy_woocoomerce_wrapper_end() {
        echo '</article></div>';
        echo '</div>';
    }
    
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'foundationbuddy_woocoomerce_wrapper_end', 10);


/* ------------------------------------------------------------------------- *
/*  Sidebar
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_woocoomerce_sidebar' ) ) {

    function foundationbuddy_woocoomerce_sidebar() {
        //echo '<div class="sidebar">';
        //get_template_part( 'layouts/blog-page/left', 'sidebar' );
        //echo '</div>';
        
        echo '<aside id="sidebar" class="small-12 large-4 columns">';
        get_sidebar();
        echo '</aside>';
    }
    
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_sidebar', 'foundationbuddy_woocoomerce_sidebar', 10 );


/* ------------------------------------------------------------------------- *
/*  Related products count
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_related_products_limit' ) ) {

    function foundationbuddy_related_products_limit() {
      global $product;

        $args['posts_per_page'] = 6;
        return $args;
    }
    
}

if ( ! function_exists( 'foundationbuddy_related_products_args' ) ) {
    
    function foundationbuddy_related_products_args( $args ) {

        $args['posts_per_page'] = 4; // 4 related products
        $args['columns'] = 2; // arranged in 2 columns
        return $args;
    }
}

add_filter( 'woocommerce_output_related_products_args', 'foundationbuddy_related_products_args' );


/* ------------------------------------------------------------------------- *
/*  Thumbnail upscale
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_thumbnail_upscale' ) ) {

    function foundationbuddy_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
        
        if ( !$crop ) return null; // let the wordpress default function handle this
     
        $aspect_ratio = $orig_w / $orig_h;
        $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
     
        $crop_w = round($new_w / $size_ratio);
        $crop_h = round($new_h / $size_ratio);
     
        $s_x = floor( ($orig_w - $crop_w) / 2 );
        $s_y = floor( ($orig_h - $crop_h) / 2 );
     
        return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );

    }
}

add_filter( 'image_resize_dimensions', 'foundationbuddy_thumbnail_upscale', 10, 6 );


/* ------------------------------------------------------------------------- *
/*  Filter the content of chat posts
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'foundationbuddy_chat_content' ) ) {

    function foundationbuddy_chat_content( $content ) {
        global $_post_format_chat_ids;
        if ( !has_post_format( 'chat' ) )
            return $content;

        $_post_format_chat_ids = array();
        $separator = apply_filters( 'my_post_format_chat_separator', ':' );
        $chat_output = "\n\t\t\t" . '<div id="chat-transcript-' . esc_attr( get_the_ID() ) . '" class="chat-transcript">';
        $chat_rows = preg_split( "/(\r?\n)+|(<br\s*\/?>\s*)+/", $content );

        foreach ( $chat_rows as $chat_row ) {
            if ( strpos( $chat_row, $separator ) ) {
                $chat_row_split = explode( $separator, trim( $chat_row ), 2 );
                $chat_author = strip_tags( trim( $chat_row_split[0] ) );
                $chat_text = trim( $chat_row_split[1] );
                $speaker_id = foundationbuddy_format_chat_row_id( $chat_author );
                $chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';
                $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-author ' . sanitize_html_class( strtolower( "chat-author-{$chat_author}" ) ) . ' vcard"><i class="fa fa-user gap"></i>' . apply_filters( 'my_post_format_chat_author', $chat_author, $speaker_id ) . '' . $separator . '</div>';
                $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'foundationbuddy_post_format_chat_text', $chat_text, $chat_author, $speaker_id ) ) . '</div>';
                $chat_output .= "\n\t\t\t\t" . '</div><!-- .chat-row -->';
            }
            else {
                if ( !empty( $chat_row ) ) {
                    $chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';
                    $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'foundationbuddy_post_format_chat_text', $chat_row, $chat_author, $speaker_id ) ) . '</div>';
                    $chat_output .= "\n\t\t\t</div><!-- .chat-row -->";
                }
            }
        }
        $chat_output .= "\n\t\t\t</div><!-- .chat-transcript -->\n";
        return apply_filters( 'my_post_format_chat_content', $chat_output );
    }
}

add_filter( 'the_content', 'foundationbuddy_chat_content' );

if ( ! function_exists( 'foundationbuddy_format_chat_row_id' ) ) {

    function foundationbuddy_format_chat_row_id( $chat_author ) {
        global $_post_format_chat_ids;
        $chat_author = strtolower( strip_tags( $chat_author ) );
        $_post_format_chat_ids[] = $chat_author;
        $_post_format_chat_ids = array_unique( $_post_format_chat_ids );
        return absint( array_search( $chat_author, $_post_format_chat_ids ) ) + 1;
    }

}

add_filter( 'foundationbuddy_post_format_chat_text', 'wpautop' );

?>