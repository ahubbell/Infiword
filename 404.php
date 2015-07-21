<?php
/**
 * The template for displaying a "Page not found" message.
 **/
?>

<!-- head -->
<?php get_header(); ?>
<!-- /head -->

    <!-- page-content -->
	<div class="small-12 large-8 columns" id="single-page-content" role="main">
        
        <!-- article -->
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
            <!-- header -->
			<header>
				<h2 class="entry-title"><?php _e('File Not Found', 'foundationbuddy'); ?></h2>
			</header>
            <!-- /header -->
            
            <!-- entry-content -->
			<div class="entry-content">
                
                <!-- error -->
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'foundationbuddy'); ?></p>
				</div>
                <!-- /error -->
                
                <!-- options -->
				<p><?php _e('Please try the following:', 'foundationbuddy'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'foundationbuddy'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'foundationbuddy'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'foundationbuddy'); ?></li>
				</ul>
                <!-- /options -->
                
			</div>
            <!-- /entry-content -->
            
		</article>
        <!-- /article -->
        
	</div>
    <!-- /page-content -->

    <aside id="sidebar" class="small-12 large-4 columns">
        <?php get_sidebar(); ?>
    </aside><!-- /#sidebar -->

<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->