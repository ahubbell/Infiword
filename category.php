<?php get_header(); ?>
    
<!-- full-width layout -->
<?php if ( get_theme_mod('foundationbuddy_category_page_layout') == 'full-width' ) {  ?>

	<style type="text/css">
        #category-page-content {
            max-width: 62.5rem !important;
            margin: 0 auto;
            float: inherit;
        }
    </style>

	<div class="small-12 large-12 columns" id="category-page-content" role="main">
		<?php get_template_part( 'layouts/category-page/page', 'template' ); ?>
	</div>

<?php } ?>
<!-- /full-width layout -->

<!-- left-sidebar layout -->   
<?php if ( get_theme_mod('foundationbuddy_category_page_layout') == 'left-sidebar' ) {  ?>
        
	<aside id="left-sidebar" class="small-12 large-4 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<div class="small-12 large-8 columns" id="category-page-content" role="main">
		<?php get_template_part( 'layouts/category-page/page', 'template' ); ?>
    </div>

<?php } ?>
<!-- /left-sidebar layout -->   

 <!-- dual-sidebar layout -->      
<?php if ( get_theme_mod('foundationbuddy_category_page_layout') == 'dual-sidebar' ) {  ?>
        
	<aside id="left-sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<div class="small-12 large-6 columns" id="category-page-content" role="main">
		<?php get_template_part( 'layouts/category-page/page', 'template' ); ?>
	</div>
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar( 'second' ); ?>
	</aside><!-- /#sidebar -->
    
<?php } ?>
<!-- /dual-sidebar layout -->   

<!-- left-dual-sidebar layout -->     
<?php if ( get_theme_mod('foundationbuddy_category_page_layout') == 'left-dual-sidebar' ) { ?>
        
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<aside id="left-dual-sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar( 'second' ); ?>
	</aside><!-- /#sidebar -->
	<div class="small-12 large-6 columns" id="category-page-content" role="main">
		<?php get_template_part( 'layouts/category-page/page', 'template' ); ?>
	</div>
    
<?php  } ?>
<!-- /left-dual-sidebar layout -->   

<!-- right-dual-sidebar layout -->   
<?php if ( get_theme_mod('foundationbuddy_category_page_layout') == 'right-dual-sidebar' ) {  ?>

	<div class="small-12 large-6 columns" id="category-page-content" role="main">
		<?php get_template_part( 'layouts/category-page/page', 'template' ); ?>
	</div>
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->    
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar( 'second' ); ?>
	</aside><!-- /#sidebar -->

<?php } ?>
<!-- /right-dual-sidebar layout -->

<!-- right-sidebar layout -->
<?php if ( get_theme_mod('foundationbuddy_category_page_layout') == 'right-sidebar' || get_theme_mod('foundationbuddy_category_page_layout') == '' ) {  ?>

	<div class="small-12 large-8 columns" id="category-page-content" role="main">
		<?php get_template_part( 'layouts/category-page/page', 'template' ); ?>
	</div>
	<aside id="sidebar" class="small-12 large-4 columns">    
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->

<?php  } ?>
<!-- /right-sidebar layout -->

<?php get_footer(); ?>