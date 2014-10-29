<?php get_header(); ?>
	<div class="row clearfix">
		<div class="col-md-12 column">
            <div class="category-page-header"><h1 class="text-center"><?php the_category(' '); ?></h1></div>
        </div>
        <div class="col-md-12 column">
			<div class="row clearfix">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 column">
                    <div class="post-header front-page">
                        <div id="post-category">#<?php the_category(' '); ?></div>
                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?><h1><?php the_title(); ?></h1></a>
                        <div class="author-and-time"><div id="author"><?php the_author_posts_link(); ?></div><div id="time"><?php the_time(); ?></div></div>
                    </div>
                </div>
                    <?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
            </div>
        </div>
	</div>
<?php get_footer(); ?>