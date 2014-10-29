<?php 

add_action('after_setup_theme', 'infi_setup');
function infi_setup(){
    load_theme_textdomain('infiword', get_template_directory() . '/languages');
}

//registering jqueryminjs
function infi_scripts_jqueryminjs()
{
    wp_register_script( 'jqueryminjs', get_template_directory_uri() . '/bootstrap/js/jquery.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'jqueryminjs' );
}
add_action( 'wp_enqueue_scripts', 'infi_scripts_jqueryminjs' );

//registering jqueryminjs
function infi_scripts_masonryjs()
{
    wp_register_script( 'masonryjs', get_template_directory_uri() . '/bootstrap/js/masonry.pkgd.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'masonryjs' );
}
add_action( 'wp_enqueue_scripts', 'infi_scripts_masonryjs' );

//registering bootstrap scripts
function infi_scripts_bootstrapjs()
{
    //Bootstrap Js//
	wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrapjs' );
}
add_action( 'wp_enqueue_scripts', 'infi_scripts_bootstrapjs' );

//registering custom scripts
function infi_scripts_customjs()
{
    //custom script//
    wp_register_script( 'customjs', get_template_directory_uri() . '/bootstrap/js/custom.js', array( 'jquery' ) );
	wp_enqueue_script( 'customjs' );
}
add_action( 'wp_enqueue_scripts', 'infi_scripts_customjs' );

//registering bootstrap css
function wp_register_css() {
    wp_register_style(
        'bootstrap.min', 
        get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css'
    );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wp_register_css' );

//registering fontawesome css
function wp_register_fa_css() {
    wp_register_style(
        'font-awesome.min', 
        get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css'
    );
    wp_enqueue_style( 'font-awesome.min' );
}
add_action( 'wp_enqueue_scripts', 'wp_register_fa_css' );

//registering sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

//enable featured posts thumbnails//
add_theme_support( 'post-thumbnails' );

/**
 * Extended Walker class for use with the
 * Twitter Bootstrap toolkit Dropdown menus in Wordpress.
 * Edited to support n-levels submenu.
 * @author johnmegahan https://gist.github.com/1597994, Emanuele 'Tex' Tessore https://gist.github.com/3765640
 * @license CC BY 4.0 https://creativecommons.org/licenses/by/4.0/
 */
class BootstrapNavMenuWalker extends Walker_Nav_Menu {
 
 
	function start_lvl( &$output, $depth ) {
 
		$indent = str_repeat( "\t", $depth );
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output	   .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
 
	}
 
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
 
 
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$li_attributes = '';
		$class_names = $value = '';
 
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		// managing divider: add divider class to an element to get a divider before it.
		$divider_class_position = array_search('divider', $classes);
		if($divider_class_position !== false){
			$output .= "<li class=\"divider\"></li>\n";
			unset($classes[$divider_class_position]);
		}
		
		$classes[] = ($args->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if($depth && $args->has_children){
			$classes[] = 'dropdown-submenu';
		}
 
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
 
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($depth == 0 && $args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;
 
 
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	
 
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		//v($element);
		if ( !$element )
			return;
 
		$id_field = $this->db_fields['id'];
 
		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);
 
		$id = $element->$id_field;
 
		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
 
			foreach( $children_elements[ $id ] as $child ){
 
				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
			unset( $children_elements[ $id ] );
		}
 
		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}
 
		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);
 
	}
 
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'infi'),
    'secondary' => __( 'Secondary Menu', 'infi' ),
 ) );

//time ago
add_filter('the_time', 'dynamictime');
 function dynamictime() {
   global $post;
   $date = $post->post_date;
   $time = get_post_time('G', true, $post);
   $mytime = time() - $time;
   if($mytime < 60){
     $mytimestamp = __('Just now');
   }else{
     $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));
   }
   return $mytimestamp;
 }

/*hideshow comments*/
function hideshowComments () {

   $linkText1 = __("Comments", "hideshowcomments");
   $linkText2 = __("", "hideshowcomments");
   $relinkText = __("Hide Comments", "hideshowcomments");

   $show = $_GET['show'];
echo "
<script type=\"text/javascript\"> ";

   if($show == 'true'){ // show comments when coming from index.php
	echo "var currLayerId = \"hide\";\n";
	$showLink = 'display:none';
	$hideLink = 'display:block';
   }
   else if($show == NULL) {
      // if there is no query string, hide comments like normal
	echo "var currLayerId = \"show\";\n";
	$showLink = 'display:block';
	$hideLink = 'display:none';
   }

echo "       // create javascript functions
function togLayer(id) {
   if(currLayerId) setDisplay(currLayerId, \"none\");
   if(id)setDisplay(id, \"block\");
   currLayerId = id;
}

function setDisplay(id,value) {
   var elm = document.getElementById(id);
   elm.style.display = value;
}
</script>

<div id=\"show\" style=\"".$showLink.";\" class=\"feedback2\">
<a href=\"#\" style=\"text-decoration:none;\" onclick=\"togLayer('hide');return false;\" title=\"\">",
$linkText1, " (", comments_number('0','1','%'), ") ", $linkText2,
"</a>
</div>

<div id=\"hide\" style=\"".$hideLink.";padding:0;\">
<div class=\"hideCommentsLink\"><a href=\"#\" style=\"text-decoration:none;\" onclick=\"togLayer('show');return false;\" title=\"\">",
$relinkText,
"</a></div>
", comments_template(), "</div>";
}


/*get featured posts*/
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//Add featured image to RSS feed
//http://wpsnipp.com/index.php/functions-php/add-featured-image-rss-feed/
add_filter( 'the_content', 'featured_image_in_feed' );
function featured_image_in_feed( $content ) {
    global $post;
    if( is_feed() ) {
        if ( has_post_thumbnail( $post->ID ) ){
            $output = get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'float:right; margin:0 0 10px 10px;' ) );
            $content = $output . $content;
        }
    }
    return $content;
}

/**
 * Theme customizer with real-time update
 * Very helpful: http://ottopress.com/2012/theme-customizer-part-deux-getting-rid-of-options-pages/
 *
 * @since 1.5
 */
function infi_theme_customizer( $wp_customize ) {

// Logo upload
    $wp_customize->add_section( 'infi_logo_section' , array(
	    'title'       => __( 'Logo', 'infi' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'infi_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'infi_logo', array(
		'label'        => __( 'Logo', 'infi' ),
		'section'    => 'infi_logo_section',
		'settings'   => 'infi_logo',
	) ) );

}
add_action('customize_register', 'infi_theme_customizer');

// add a favicon to your
function blog_favicon( $wp_customize) {
     $wp_customize->add_section( 'infi_favicon_section' , array(
	    'title'       => __( 'Favicon', 'infi' ),
	    'priority'    => 30,
	    'description' => 'Upload a favicon for your website',
	) );
	$wp_customize->add_setting( 'infi_favicon' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'infi_favicon', array(
		'label'        => __( 'Favicon', 'infi' ),
		'section'    => 'infi_favicon_section',
		'settings'   => 'infi_favicon',
	) ) );
}
add_action('customize_register', 'blog_favicon');

// Create Slider Post Type
require( get_template_directory() . '/inc/slider/slider_post_type.php' );
// Create Slider
require( get_template_directory() . '/inc/slider/slider.php' );


add_theme_support('html5', array('search-form'));

//postnav
function infi_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination"><ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );


	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}



	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

if ( ! isset( $content_width ) )
	$content_width = 600;

$defaults = array(
	'default-color'          => '#83AAEE',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


?>