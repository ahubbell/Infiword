<?php
/**
 * The template for displaying posts in the index page.
 **/
?>

<?php get_header(); ?>

<!-- front-page slider -->
<?php if ( get_theme_mod('infiword_front_page_slider') ) { ?> 
<?php get_template_part( 'templates/front', 'page-slider' ); ?>
<?php } ?>
<!-- /front-page slider -->

<!-- Row for main content area -->
<?php if ( get_theme_mod('infiword_front_page_layout_pinterest') == 'off' ) { ?>
    <?php get_template_part( 'templates/blog', 'front-page' ); ?>
<?php } else { ?>
    <?php get_template_part( 'templates/masonry', 'front-page' ); ?>
<?php } ?>
		
<?php get_footer(); ?>