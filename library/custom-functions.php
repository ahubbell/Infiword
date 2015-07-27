<?php
/* ------------------------------------------------------------------------- *
 *  Contains the custom functions used in this theme. This file is imported
 *  from the functions.php file
/* ------------------------------------------------------------------------- */
?>

<?php

/* ------------------------------------------------------------------------- *
 *  Prevent YouTube videos from overlapping content
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_add_video_wmode_transparent' ) ) {
    
    function infiword_add_video_wmode_transparent($html, $url, $attr) {
        if ( strpos( $html, "<embed src=" ) !== false )
           { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
        elseif ( strpos ( $html, 'feature=oembed' ) !== false )
           { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
        else
           { return $html; }
    }
    
}

add_filter( 'embed_oembed_html', 'infiword_add_video_wmode_transparent', 10, 3);


/* ------------------------------------------------------------------------- *
 *  Custoom excerpt more
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_excerpt_more' ) ) {
    
    function infiword_excerpt_more( $more ) {
        //return '...';
        return '... <br><br> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More ', 'infiword') . '</a>';
    }
    
}

add_filter('excerpt_more', 'infiword_excerpt_more');


/* ------------------------------------------------------------------------- *
 *  Add custom reply link
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_add_comment_author_to_reply_link' ) ) {
    
    function infiword_add_comment_author_to_reply_link($link, $args, $comment){
        $comment = get_comment( $comment );

        // If no comment author is blank, use 'Anonymous'
        if ( empty($comment->comment_author) ) {
            if (!empty($comment->user_id)){
                $user=get_userdata($comment->user_id);
                $author=$user->user_login;
            } else {
                $author = __('Anonymous', 'infiword');
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

add_filter('comment_reply_link', 'infiword_add_comment_author_to_reply_link', 10, 3);


/* ------------------------------------------------------------------------- *
 *  Custom attachment post
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_get_attachment' ) ) {
    
    function infiword_get_attachment( $attachment_id ) {
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

if ( ! function_exists( 'infiword_post_images' ) ) {
    
	function infiword_post_images( $args=array() ) {
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
if ( ! function_exists( 'infiword_get_attachment_id_from_src' ) ) {
    
    function infiword_get_attachment_id_from_src ($image_src) {
        global $wpdb;
        $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
        $id = $wpdb->get_var($query);
        return $id;
    }

}

/* ------------------------------------------------------------------------- *
 *  Get total published post count
/* ------------------------------------------------------------------------- */
if ( ! function_exists( 'infiword_get_total_published_post_count' ) ) {
    
    function infiword_get_total_published_post_count () {
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

if ( ! function_exists( 'infiword_woocommerce_wrapper_start' ) ) {

    function infiword_woocommerce_wrapper_start() {
        echo '<div class="small-12 large-8 columns woocommerce-card" id="single-page-content" role="main">';
        echo '<div class="row-woocommerce"><article id="woocommerce">';
    }
    
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'infiword_woocommerce_wrapper_start', 10);


/* ------------------------------------------------------------------------- *
/*  Inner wrapper (Default Fallback if woocommerce.php is not found)
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_woocoomerce_wrapper_end' ) ) {

    function infiword_woocoomerce_wrapper_end() {
        echo '</article></div>';
        echo '</div>';
    }
    
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'infiword_woocoomerce_wrapper_end', 10);


/* ------------------------------------------------------------------------- *
/*  Sidebar
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_woocoomerce_sidebar' ) ) {

    function infiword_woocoomerce_sidebar() {
        //echo '<div class="sidebar">';
        //get_template_part( 'layouts/blog-page/left', 'sidebar' );
        //echo '</div>';
        
        echo '<aside id="sidebar" class="small-12 large-4 columns">';
        get_sidebar();
        echo '</aside>';
    }
    
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_sidebar', 'infiword_woocoomerce_sidebar', 10 );


/* ------------------------------------------------------------------------- *
/*  Related products count
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_related_products_limit' ) ) {

    function infiword_related_products_limit() {
      global $product;

        $args['posts_per_page'] = 6;
        return $args;
    }
    
}

if ( ! function_exists( 'infiword_related_products_args' ) ) {
    
    function infiword_related_products_args( $args ) {

        $args['posts_per_page'] = 4; // 4 related products
        $args['columns'] = 2; // arranged in 2 columns
        return $args;
    }
}

add_filter( 'woocommerce_output_related_products_args', 'infiword_related_products_args' );


/* ------------------------------------------------------------------------- *
/*  Thumbnail upscale
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_thumbnail_upscale' ) ) {

    function infiword_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
        
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

add_filter( 'image_resize_dimensions', 'infiword_thumbnail_upscale', 10, 6 );


/* ------------------------------------------------------------------------- *
/*  Filter the content of chat posts
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_chat_content' ) ) {

    function infiword_chat_content( $content ) {
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
                $speaker_id = infiword_format_chat_row_id( $chat_author );
                $chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';
                $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-author ' . sanitize_html_class( strtolower( "chat-author-{$chat_author}" ) ) . ' vcard"><i class="fa fa-user gap"></i>' . apply_filters( 'my_post_format_chat_author', $chat_author, $speaker_id ) . '' . $separator . '</div>';
                $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'infiword_post_format_chat_text', $chat_text, $chat_author, $speaker_id ) ) . '</div>';
                $chat_output .= "\n\t\t\t\t" . '</div><!-- .chat-row -->';
            }
            else {
                if ( !empty( $chat_row ) ) {
                    $chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';
                    $chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'infiword_post_format_chat_text', $chat_row, $chat_author, $speaker_id ) ) . '</div>';
                    $chat_output .= "\n\t\t\t</div><!-- .chat-row -->";
                }
            }
        }
        $chat_output .= "\n\t\t\t</div><!-- .chat-transcript -->\n";
        return apply_filters( 'my_post_format_chat_content', $chat_output );
    }
}

add_filter( 'the_content', 'infiword_chat_content' );

if ( ! function_exists( 'infiword_format_chat_row_id' ) ) {

    function infiword_format_chat_row_id( $chat_author ) {
        global $_post_format_chat_ids;
        $chat_author = strtolower( strip_tags( $chat_author ) );
        $_post_format_chat_ids[] = $chat_author;
        $_post_format_chat_ids = array_unique( $_post_format_chat_ids );
        return absint( array_search( $chat_author, $_post_format_chat_ids ) ) + 1;
    }

}

add_filter( 'infiword_post_format_chat_text', 'wpautop' );


/* ------------------------------------------------------------------------- *
 *  Pagination
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_pagination' ) ) :

function infiword_pagination() {
    global $wp_query;

    $big = 999999999; // This needs to be an unlikely integer

    // For more options and info view the docs for paginate_links()
    // http://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var( 'paged' ) ),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5,
        'prev_next' => true,
        'prev_text' => __( '&laquo;', 'infiword' ),
        'next_text' => __( '&raquo;', 'infiword' ),
        'type' => 'list',
    ) );

    $paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
    $paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
    $paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><a href='#'>", $paginate_links );
    $paginate_links = str_replace( '</span>', '</a>', $paginate_links );
    $paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
    $paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );

    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        echo '<div class="pagination-centered">';
        echo $paginate_links;
        echo '</div><!--// end .pagination -->';
    }

}
endif;

/* ------------------------------------------------------------------------- *
 * A fallback when no navigation is selected by default.
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_menu_fallback' ) ) :

    function infiword_menu_fallback() {
        if( current_user_can( 'manage_options' ) ){
            echo '<div class="alert-box secondary">';
            // Translators 1: Link to Menus, 2: Link to Customize
                printf( __( 'Please assign a menu to the primary menu location under %1$s or %2$s the design.', 'infiword' ),
                    sprintf(  __( '<a href="%s">Menus</a>', 'infiword' ),
                        get_admin_url( get_current_blog_id(), 'nav-menus.php' )
                    ),
                    sprintf(  __( '<a href="%s">Customize</a>', 'infiword' ),
                        get_admin_url( get_current_blog_id(), 'customize.php' )
                    )
                );
                echo '</div>';
        }
    }

endif;

// Add Foundation 'active' class for the current menu item
if ( ! function_exists( 'infiword_active_nav_class' ) ) :

    function infiword_active_nav_class( $classes, $item ) {
        if ( 1 == $item->current || true == $item->current_item_ancestor ) {
            $classes[] = 'active';
        }
        return $classes;
    }

    add_filter( 'nav_menu_css_class', 'infiword_active_nav_class', 10, 2 );

endif;

/* ------------------------------------------------------------------------- *
 * Use the active class of ZURB Foundation on wp_list_pages output.
 * From required+ Foundation http://themes.required.ch
 /* ------------------------------------------------------------------------- */
if ( ! function_exists( 'infiword_active_list_pages_class' ) ) :

    function infiword_active_list_pages_class( $input ) {

        $pattern = '/current_page_item/';
        $replace = 'current_page_item active';

        $output = preg_replace( $pattern, $replace, $input );

        return $output;
    }

    add_filter( 'wp_list_pages', 'infiword_active_list_pages_class', 10, 2 );

endif;

if ( ! class_exists( 'infiword_comments' ) ) :

    class infiword_comments extends Walker_Comment{

        // init classwide variables
        var $tree_type = 'comment';
        var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

        /** CONSTRUCTOR
         * You'll have to use this if you plan to get to the top of the comments list, as
         * start_lvl() only goes as high as 1 deep nested comments */
        function __construct() { ?>
             
            <h3><?php comments_number( __( 'No Responses to', 'infiword' ), __( 'One Response to', 'infiword' ), __( '% Responses to', 'infiword' ) ); ?> &#8220;<?php the_title(); ?>&#8221;</h3>
            <ol class="comment-list">
             
        <?php }

        /** START_LVL
         * Starts the list before the CHILD elements are added. */
        function start_lvl( &$output, $depth = 0, $args = array() ) {
            $GLOBALS['comment_depth'] = $depth + 1; ?>
     
                    <ul class="children">
        <?php }

        /** END_LVL
         * Ends the children list of after the elements are added. */
        function end_lvl( &$output, $depth = 0, $args = array() ) {
            $GLOBALS['comment_depth'] = $depth + 1; ?>
     
            </ul><!-- /.children -->
             
        <?php }

        /** START_EL */
        function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
            $depth++;
            $GLOBALS['comment_depth'] = $depth;
            $GLOBALS['comment'] = $comment;
            $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>
             
            <li <?php comment_class( $parent_class ); ?> id="comment-<?php comment_ID() ?>">
                <article id="comment-body-<?php comment_ID() ?>" class="comment-body">
            
                
            
            <header class="comment-author"> 
            
                <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
                
                <div class="author-meta vcard author">  
                
                <?php printf( __( '<cite class="fn">%s</cite>', 'infiword' ), get_comment_author_link() ) ?>
                <time datetime="<?php echo comment_date( 'c' ) ?>"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf( __( '%1$s', 'infiword' ), get_comment_date(),  get_comment_time() ) ?></a></time>
                
                </div><!-- /.comment-author -->
                
            </header>
     
                    <section id="comment-content-<?php comment_ID(); ?>" class="comment">
                        <?php if ( ! $comment->comment_approved ) : ?>
                                <div class="notice">
                        <p class="bottom"><?php $args['moderation']; ?></p>
                    </div>                     
                        <?php else : comment_text(); ?>
                        <?php endif; ?>
                    </section><!-- /.comment-content -->
     
                    <div class="comment-meta comment-meta-data hide">
                        <a href="<?php echo htmlspecialchars( get_comment_link( get_comment_ID() ) ) ?>"><?php comment_date(); ?> at <?php comment_time(); ?></a> <?php edit_comment_link( '(Edit)' ); ?>
                    </div><!-- /.comment-meta -->
     
                    <div class="reply">
                        <?php $reply_args = array(
                            'depth' => $depth,
                            'max_depth' => $args['max_depth'],
                            );

                        comment_reply_link( array_merge( $args, $reply_args ) );  ?>
                    </div><!-- /.reply -->
                </article><!-- /.comment-body -->
     
        <?php }

        function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
             
            </li><!-- /#comment-' . get_comment_ID() . ' -->
             
        <?php }

        /** DESTRUCTOR */
        function __destruct() { ?>
         
        </ol><!-- /#comment-list -->
     
        <?php }
    }
    
endif;


/* ------------------------------------------------------------------------- *
 * Custom password protect form
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'infiword_password_form' ) ) :

    function infiword_password_form() {
        global $post;
        $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
        $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
        ' . __( "To view this protected post, enter the password below:" ) . '
        <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" class="small radius button" value="' . esc_attr__( "Submit" ) . '" />
        </form>
        ';
        return $o;
    }

endif;

add_filter( 'the_password_form', 'infiword_password_form' );

?>