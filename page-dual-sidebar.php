<?php
/**
Template Name: Dual Sidebar
 **/
?>

<?php get_header(); ?>

        <aside id="left-sidebar" class="small-12 large-3 columns">
            <?php get_sidebar(); ?>
        </aside><!-- /#sidebar -->

        <!-- single-page-content -->
        <div class="small-12 large-6 columns" id="single-page-content" role="main">
            
            <?php /* Start loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <!-- /article -->
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
                <!-- /article -->
            
            <?php endwhile; // End the loop ?>

        </div>
        <!-- /single-page-content -->

        <aside id="sidebar" class="small-12 large-3 columns">
            <?php get_sidebar( 'second' ); ?>
        </aside><!-- /#sidebar -->
		
<?php get_footer(); ?>