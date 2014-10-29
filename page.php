<?php get_header(); ?>
<div class="row clearfix">
		<div class="col-md-12 column">
					   <center><div class="page-header"><h1 class="text-center"></h1><?php the_title(); ?></h2></div></center>
        </div>
</div>
    <div class="row clearfix">
		<div class="col-md-8 column">
			<div class="row clearfix">
                    <div class="post-category-header"><h4><?php the_category(' '); ?></h4></div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post-wrapper single-page">
                        <div class="post-image single-page"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?></div>
                        <div class=""><?php the_content(); ?></div>
                    </div>
                <?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
			</div>
        </div>
		<div class="col-md-4 column">
            <div class="row clearfix">
                    <?php if ( ! dynamic_sidebar() ) : ?>
                    <?php endif; ?>
            </div>
        </div>
        </div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>



<?php get_footer(); ?>

