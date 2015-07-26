<?php
/* ------------------------------------------------------------------------- *
 *  Enqueue all the custom fonts here
/* ------------------------------------------------------------------------- */
?>

<?php 

if( ! function_exists( 'infiword_fonts' ) ) {
    
    function infiword_fonts() {
        wp_register_style('infiword-open-sans-font', 'http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,700');
        wp_register_style( 'infiword-font-awesome-stylesheet', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), '' );
        
        wp_enqueue_style( 'infiword-open-sans-font');
        wp_enqueue_style( 'infiword-font-awesome-stylesheet');
    }
    
}

add_action('wp_print_styles', 'infiword_fonts');

?>