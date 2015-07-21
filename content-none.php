<?php
/**
 * The template for displaying a "No posts found" message.
 **/
?>

<article id="post-0" class="post no-results not-found">
	<header>
		<h2 class="entry-title single-post-header-title"><?php _e( 'Nothing Found', 'foundationbuddy' ); ?></h2>
	</header>
	<div class="entry-content">
		<p class="text-center"><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'foundationbuddy' ); ?></p>
		<div class="small-4-centered  large-4-centered  columns">
			<?php get_search_form(); ?>
		</div>
	</div>
	<hr />
</article>