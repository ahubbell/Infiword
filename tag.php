<?php get_header(); ?>
    
<?php if ( get_theme_mod('infiword_tag_page_layout') == 'full-width' ) {  ?>

	<!-- full-width layout -->
	<style type="text/css">
        #tag-page-content {
            max-width: 62.5rem !important;
            margin: 0 auto;
            float: inherit;
        }
    </style>

	<div class="small-12 large-12 columns" id="tag-page-content" role="main">
		<?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
	</div>
	<!-- /full-width layout -->

<?php } ?>

<?php if ( get_theme_mod('infiword_tag_page_layout') == 'left-sidebar' ) {  ?>

	<!-- left-sidebar layout -->           
	<aside id="left-sidebar" class="small-12 large-4 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<div class="small-12 large-8 columns" id="tag-page-content" role="main">
		<?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
    </div>
    <!-- /left-sidebar layout -->   

<?php } ?>

<?php if ( get_theme_mod('infiword_tag_page_layout') == 'dual-sidebar' ) {  ?>

	<!-- dual-sidebar layout -->        
	<aside id="left-sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<div class="small-12 large-6 columns" id="tag-page-content" role="main">
		<?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
	</div>
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar( 'second' ); ?>
	</aside><!-- /#sidebar -->
	<!-- /dual-sidebar layout -->   

<?php } ?>

<?php if ( get_theme_mod('infiword_tag_page_layout') == 'left-dual-sidebar' ) { ?>

	<!-- left-dual-sidebar layout -->             
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<aside id="left-dual-sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar( 'second' ); ?>
	</aside><!-- /#sidebar -->
	<div class="small-12 large-6 columns" id="tag-page-content" role="main">
		<?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
	</div>
	<!-- /left-dual-sidebar layout -->   
    
<?php } ?>

<?php if ( get_theme_mod('infiword_tag_page_layout') == 'right-dual-sidebar' ) {  ?>

	<!-- right-dual-sidebar layout -->   
	<div class="small-12 large-6 columns" id="tag-page-content" role="main">
		<?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
	</div>
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->    
	<aside id="sidebar" class="small-12 large-3 columns">
	    <?php get_sidebar( 'second' ); ?>
	</aside><!-- /#sidebar -->
	<!-- /right-dual-sidebar layout -->

<?php } ?>

<?php if ( get_theme_mod('infiword_tag_page_layout') == 'right-sidebar' || get_theme_mod('infiword_tag_page_layout') == '' ) {  ?>

	<!-- right-sidebar layout -->
	<div class="small-12 large-8 columns" id="tag-page-content" role="main">
		<?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
	</div>
	<aside id="sidebar" class="small-12 large-4 columns">    
	    <?php get_sidebar(); ?>
	</aside><!-- /#sidebar -->
	<!-- /right-sidebar layout -->

<?php } ?>

<?php get_footer(); ?>