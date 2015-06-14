<!-- full-width layout -->
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == 'full-width' ) {  ?>

<?php get_template_part( 'layouts/index-page/full', 'width' ); ?>

<?php } ?>
<!-- /full-width layout -->

<!-- right-sidebar layout -->
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == 'right-sidebar' ) {  ?>

<?php get_template_part( 'layouts/index-page/right', 'sidebar' ); ?>
<aside id="sidebar" class="small-12 large-4 columns">    
    <?php get_sidebar(); ?>
</aside><!-- /#sidebar -->

<?php  } ?>
<!-- /right-sidebar layout -->

<!-- left-sidebar layout -->   
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == 'left-sidebar' ) {  ?>
        
<aside id="left-sidebar" class="small-12 large-4 columns">
    <?php get_sidebar(); ?>
</aside><!-- /#sidebar -->
<?php get_template_part( 'layouts/index-page/left', 'sidebar' ); ?>
    
<?php } ?>
<!-- /left-sidebar layout -->   

 <!-- dual-sidebar layout -->      
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == 'dual-sidebar' ) {  ?>
        
<aside id="left-sidebar" class="small-12 large-3 columns">
    <?php get_sidebar(); ?>
</aside><!-- /#sidebar -->
<?php get_template_part( 'layouts/index-page/dual', 'sidebar' ); ?>
<aside id="sidebar" class="small-12 large-3 columns">
    <?php get_sidebar( 'second' ); ?>
</aside><!-- /#sidebar -->
    
<?php } ?>
<!-- /dual-sidebar layout -->   

<!-- left-dual-sidebar layout -->     
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == 'left-dual-sidebar' ) { ?>
        
<aside id="sidebar" class="small-12 large-3 columns">
    <?php get_sidebar(); ?>
</aside><!-- /#sidebar -->
<aside id="left-dual-sidebar" class="small-12 large-3 columns">
    <?php get_sidebar( 'second' ); ?>
</aside><!-- /#sidebar -->
<?php get_template_part( 'layouts/index-page/left', 'dual-sidebar' ); ?>
    
<?php  } ?>
<!-- /left-dual-sidebar layout -->   

<!-- right-dual-sidebar layout -->   
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == 'right-dual-sidebar' ) {  ?>

<?php get_template_part( 'layouts/index-page/right', 'dual-sidebar' ); ?>
<aside id="sidebar" class="small-12 large-3 columns">
    <?php get_sidebar(); ?>
</aside><!-- /#sidebar -->    
<aside id="sidebar" class="small-12 large-3 columns">
    <?php get_sidebar( 'second' ); ?>
</aside><!-- /#sidebar -->

<?php } ?>
<!-- /right-dual-sidebar layout -->

<!-- default right-sidebar layout -->
<?php if ( get_theme_mod('foundationbuddy_front_page_layout') == '' ) {  ?>

<?php get_template_part( 'layouts/index-page/right', 'sidebar' ); ?>
<aside id="sidebar" class="small-12 large-4 columns">    
    <?php get_sidebar(); ?>
</aside><!-- /#sidebar -->

<?php  } ?>
<!-- /default right-sidebar layout -->