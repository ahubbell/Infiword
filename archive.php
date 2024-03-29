
<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying the archives page.
/* ------------------------------------------------------------------------- */
?>

<?php get_header(); ?>

    <!-- page-content -->
	<div class="small-12 large-8 columns" id="page-content" role="main">
	
		<?php if ( have_posts() ) : ?>
		
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			
		<?php endif; // end have_posts() check ?>
		
	    <!-- pagination -->
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('infiword_pagination') ) { infiword_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'infiword' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'infiword' ) ); ?></div>
			</nav>
		<?php } ?>
	    <!-- /pagination -->

	</div>
    <!-- /page-content -->

    <!-- sidebar -->
	<aside id="sidebar" class="small-12 large-4 columns">
        <?php get_sidebar(); ?>
    </aside>
	<!-- /sidebar -->

<?php get_footer(); ?>