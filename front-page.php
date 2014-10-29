<?php get_header(); ?>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="trending col-md-6 column">
                    <h4>Editor's Pick</h4>
                    <?php echo infi_slider_template(); ?>
                    <h4>Trending</h4>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post-header front-page">
                        <div id="post-category">#<?php the_category(' '); ?></div>
                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?><h1><?php the_title(); ?></h1></a>
                        <div class="author-and-time">
                            <div id="author-post"><?php the_author_posts_link(); ?></div>
                            <div id="time"><?php the_time(); ?></div>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
                    <?php infi_numeric_posts_nav(); ?>

				</div>
				<div class="featured col-md-3 column">
                    <h4>Featured</h4>
                    <?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <div class="featured-post front-page">
                        <div id="post-category">#<?php the_category(' '); ?></div>
                        <div class="heading front-page"><a href="<?php the_permalink() ?>" target="_parent"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?><h1><?php the_title(); ?></a></h1></div>
                        <div class="author-and-time"><div id="author-post"><?php the_author_posts_link(); ?></div><div id="time"><?php the_time(); ?></div></div>
                    </div>
                    <?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
				</div>
				<div class="recent col-md-3 column">
                     <h4>Recent Posts</h4>
<?php $postslist = get_posts('numberposts=10&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>
<div class="post-wrap front-page">
    <div class="recentpost-thumbnail front-page"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?></a></div>
    <div class="recentpost-header front-page"><p><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
</div>
<?php endforeach; ?>
<!-- End Recent Posts -->
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>