<?php
/**
Template Name: Full Width
 **/
?>

<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="single-page-content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h2 class="entry-title single-post-header-title"><?php the_title(); ?></h2>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'foundationbuddy'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	   <!-- /article -->
        
            <?php endwhile; // End the loop ?>
        </div>
	</div>

	<style type="text/css">
		#single-page-content {
	        max-width: 62.5rem !important;
	        margin: 0 auto;
	        float: inherit;
	    }
	</style>
		
<?php get_footer(); ?>