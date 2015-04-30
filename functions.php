<?php

    //Registering JavaScript
    function infi_scripts_scriptminjs(){
        wp_enqueue_script( 'scriptmin', get_template_directory_uri() . '/assets/js/script.min.js', array( 'jquery' ) );
    }

    add_action( 'wp_footer', 'infi_scripts_scriptminjs' );

    class infi_BootstrapNavMenuWalker extends Walker_Nav_Menu {


        function start_lvl( &$output, $depth = 0, $args = array() ) {

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

    add_action( 'after_setup_theme', 'infi_setup' );

    function infi_setup(){
            register_nav_menus( array(
                    'primary' => __( 'Primary Menu', 'infi'),
            ) );
    }


    function infi_theme_customizer( $wp_customize ) {

    // Logo upload
        $wp_customize->add_section( 'infi_logo_section' , array(
            'title'       => __( 'Logo', 'infi' ),
            'priority'    => 30,
            'description' => 'Upload a logo to replace the default site name and description in the header',
        ) );
        $wp_customize->add_setting( 'infi_logo',
        array(
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'infi_logo', array(
            'label'        => __( 'Logo', 'infi' ),
            'section'    => 'infi_logo_section',
            'settings'   => 'infi_logo',
        ) ) );

    }

    add_action('customize_register', 'infi_theme_customizer');

    // Add A Favicon
    function infi_blog_favicon( $wp_customize) {
         $wp_customize->add_section( 'infi_favicon_section' , array(
            'title'       => __( 'Favicon', 'infi' ),
            'priority'    => 30,
            'description' => 'Upload a favicon for your website',
        ) );
        $wp_customize->add_setting( 'infi_favicon',
        array(
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'infi_favicon', array(
            'label'        => __( 'Favicon', 'infi' ),
            'section'    => 'infi_favicon_section',
            'settings'   => 'infi_favicon',
        ) ) );
    }
    
    add_action('customize_register', 'infi_blog_favicon');


    // Register Theme Features
    function infi_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

    }

    // Hook into the 'after_setup_theme' action
    add_action( 'after_setup_theme', 'infi_features' );


    if ( ! isset( $content_width ) )
        $content_width = 600;


    //Custom Comment Form
    add_filter( 'comment_form_default_fields', 'infi_comment_form_fields' );
    
    function infi_comment_form_fields( $fields ) {
        $commenter = wp_get_current_commenter();

        $req      = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

        $fields   =  array(
            'author' => '<div class="col-md-12">' .
                        '<div class="row clearfix">' .
                        '<div class="col-md-6">' .
                        '<div class="form-group comment-form-author">' .
                        '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="Name (required)"/></div></div>',
            'email'  => '<div class="col-md-6">' .
                        '<div class="form-group comment-form-email">' .
                        '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="Email (required)"/></div></div></div>',
            'url'    => '<div class="col-md-12">' .
                        '<div class="row clearfix">' .
                        '<div class="form-group comment-form-url">' .
                        '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="Website"/></div></div></div>',
        );

        return $fields;
    }

    add_filter( 'comment_form_defaults', 'infi_comment_form' );

    function infi_comment_form( $args ) {
        $args['comment_field'] = '<div class="col-md-12">
                                    <div class="row clearfix">
                                     <div class="form-group comment-form-comment">
                                        <textarea class="form-control" id="comment" name="comment" cols="45" rows="4" aria-required="true" placeholder="Write something cool"></textarea>
                                     </div>
                                    </div>
                                  </div></div>';
        return $args;
    }

    add_action('comment_form', 'infi_comment_button' );

    function infi_comment_button() {
        echo '<div class="col-md-12">
                  <button class="btn btn-default" type="submit">' . __( 'Submit' ) . '</button></div>';
    }


    //Prevent YouTube Videos From Overlapping Content
    function add_video_wmode_transparent($html, $url, $attr) {
        if ( strpos( $html, "<embed src=" ) !== false )
           { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
        elseif ( strpos ( $html, 'feature=oembed' ) !== false )
           { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
        else
           { return $html; }
    }

    add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);

    //Adding Verela Round Font
    function infi_varela_font() {
        wp_register_style('infi-varela-font', 'http://fonts.googleapis.com/css?family=Varela+Round');
        wp_enqueue_style( 'infi-varela-font');
    }

    add_action('wp_print_styles', 'infi_varela_font');


    function infi_comments_callback( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;

?>

                                <!-- row -->
                                <div class="row clearfix" id="comment-<?php comment_ID(); ?>">
                                    
                                    <div <?php comment_class(); ?>>
                                    
                                        <!-- col-md-2 -->
                                        <div class="col-md-2">

                                            <!-- thumbnail -->
                                            <div class="commenter-avatar img-responsive">
                                                <?php echo get_avatar( $comment ); ?>
                                            </div>
                                            <!-- /.thumbnail -->

                                        </div>
                                        <!-- /.col-md-2 -->

                                        <div class="col-md-10">

                                            <!-- panel panel-default -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <strong><?php comment_author(); ?></strong> 
                                                    <span class="text-muted">commented on <?php comment_time('l, F jS, Y') ?></span>
                                                </div>

                                                <!-- panel-body -->
                                                <div class="panel-body comment-body-paragraph">
                                                    <?php comment_text(); ?>
                                                </div>
                                                <!-- /.panel-body -->

                                                <!-- panel-footer -->
                                                <div class="panel-footer">
                                                    <div class="reply">
                                                        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'infi' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                                                    </div>
                                                </div>
                                                <!-- /.panel-footer -->

                                            </div>
                                            <!-- /.panel panel-default -->

                                        </div>
                                        <!-- /col-md-10 -->
                                    
                                    </div>
                                    
                                </div>
                                <!-- /.row -->

<?php

    }


    //Custom Excerpt
    function infi_excerpt_length( $length ) {
        return 20;
    }

    add_filter( 'excerpt_length', 'infi_excerpt_length', 999 );

    function infi_excerpt_more( $more ) {
        //return '...';
        return '... <br><br> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More ', 'infi') . '</a>';
    }

    add_filter('excerpt_more', 'infi_excerpt_more');


    //Customizing The Footer Widgets
    function infi_footer_widgets_init() {
        register_sidebar( array(
            'name' => 'Footer Sidebar 1',
            'id' => 'footer-sidebar-1',
            'description' => 'Appears in the footer area',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer Sidebar 2',
            'id' => 'footer-sidebar-2',
            'description' => 'Appears in the footer area',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer Sidebar 3',
            'id' => 'footer-sidebar-3',
            'description' => 'Appears in the footer area',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer Sidebar 4',
            'id' => 'footer-sidebar-4',
            'description' => 'Appears in the footer area',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Main Sidebar',
            'id' => 'main-sidebar',
            'description' => 'Appears in the right sidebar area',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
    }

    add_action( 'widgets_init', 'infi_footer_widgets_init' );


    //Use SVG Images
    function infi_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }

    add_filter('upload_mimes', 'infi_mime_types');

    //WordPress Admin Area SVG Fix (https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/)
    function infi_custom_admin_head() {
      $css = '';

      $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

      echo '<style type="text/css">'.$css.'</style>';
    }

    add_action('admin_head', 'infi_custom_admin_head');

    add_theme_support( 'admin-bar', array( 'callback' => 'infi_adminbar_cb') );

    function infi_adminbar_cb(){
        echo '<style>#adminbar {  margin-top: -32px; top: -33px; }, .canvas { margin-top: 32px; }</style>';
    }

    //Remove string version from css and js
    function infi_remove_script_version( $src ){
        return remove_query_arg( 'ver', $src );
    }

    add_filter( 'script_loader_src', 'infi_remove_script_version' );
    add_filter( 'style_loader_src', 'infi_remove_script_version' );

    //Defer loading of javascript files
    function infi_defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        return "$url' defer ";
    }

    add_filter( 'clean_url', 'infi_defer_parsing_of_js', 11, 1 );

    /**
     * Load Enqueued Scripts in the Footer
     *
     * Automatically move JavaScript code to page footer, speeding up page loading time.
     */
    function footer_enqueue_scripts() {
       remove_action('wp_head', 'wp_print_scripts');
        remove_action('wp_head', 'wp_print_head_scripts', 9);
        remove_action('wp_head', 'wp_enqueue_scripts', 1);
        add_action('wp_footer', 'wp_print_scripts', 5);
        add_action('wp_footer', 'wp_enqueue_scripts', 5);
        add_action('wp_footer', 'wp_print_head_scripts', 5);
    }
    add_action('after_setup_theme', 'footer_enqueue_scripts');


    class infi_HTML_Compression
    {
        // Settings
        protected $compress_css = true;
        protected $compress_js = true;
        protected $info_comment = true;
        protected $remove_comments = true;

        // Variables
        protected $html;
        public function __construct($html)
        {
            if (!empty($html))
            {
                $this->parseHTML($html);
            }
        }
        public function __toString()
        {
            return $this->html;
        }
        protected function bottomComment($raw, $compressed)
        {
            $raw = strlen($raw);
            $compressed = strlen($compressed);

            $savings = ($raw-$compressed) / $raw * 100;

            $savings = round($savings, 2);

            return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
        }
        protected function minifyHTML($html)
        {
            $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
            preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
            $overriding = false;
            $raw_tag = false;
            // Variable reused for output
            $html = '';
            foreach ($matches as $token)
            {
                $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;

                $content = $token[0];

                if (is_null($tag))
                {
                    if ( !empty($token['script']) )
                    {
                        $strip = $this->compress_js;
                    }
                    else if ( !empty($token['style']) )
                    {
                        $strip = $this->compress_css;
                    }
                    else if ($content == '<!--wp-html-compression no compression-->')
                    {
                        $overriding = !$overriding;

                        // Don't print the comment
                        continue;
                    }
                    else if ($this->remove_comments)
                    {
                        if (!$overriding && $raw_tag != 'textarea')
                        {
                            // Remove any HTML comments, except MSIE conditional comments
                            $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
                        }
                    }
                }
                else
                {
                    if ($tag == 'pre' || $tag == 'textarea')
                    {
                        $raw_tag = $tag;
                    }
                    else if ($tag == '/pre' || $tag == '/textarea')
                    {
                        $raw_tag = false;
                    }
                    else
                    {
                        if ($raw_tag || $overriding)
                        {
                            $strip = false;
                        }
                        else
                        {
                            $strip = true;

                            // Remove any empty attributes, except:
                            // action, alt, content, src
                            $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);

                            // Remove any space before the end of self-closing XHTML tags
                            // JavaScript excluded
                            $content = str_replace(' />', '/>', $content);
                        }
                    }
                }

                if ($strip)
                {
                    $content = $this->removeWhiteSpace($content);
                }

                $html .= $content;
            }

            return $html;
        }

        public function parseHTML($html)
        {
            $this->html = $this->minifyHTML($html);

            if ($this->info_comment)
            {
                $this->html .= "\n" . $this->bottomComment($html, $this->html);
            }
        }

        protected function removeWhiteSpace($str)
        {
            $str = str_replace("\t", ' ', $str);
            $str = str_replace("\n",  '', $str);
            $str = str_replace("\r",  '', $str);

            while (stristr($str, '  '))
            {
                $str = str_replace('  ', ' ', $str);
            }

            return $str;
        }
    }

    function infi_html_compression_finish($html)
    {
        return new infi_HTML_Compression($html);
    }

    function infi_html_compression_start()
    {
        ob_start('infi_html_compression_finish');
    }
    add_action('get_header', 'infi_html_compression_start');



?>