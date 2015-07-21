<?php
/**
 * The default tempalte for pages.
 **/
?>

<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="page-content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('page-card') ?> id="post-<?php the_ID(); ?>">
			<header>
				<h2 class="entry-title single-post-header-title"><?php the_title(); ?></h2>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'foundationbuddy'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	   <div class="separator"></div>
	<?php endwhile; // End the loop ?>

	</div>
	<aside id="sidebar" class="small-12 large-4 columns">
        <?php get_sidebar(); ?>
    </aside><!-- /#sidebar -->
		
<?php get_footer(); ?>