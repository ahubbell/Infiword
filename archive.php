<?php get_header(); ?>
	<div class="row clearfix">
		<div class="col-md-12 column">
                        <center><div class="author-page-header"><h1 class="text-center"><?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

						else :
							_e( 'Archives', 'twentyfourteen' );

						endif;
					?></h1></div></center>
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
                        <div class="author-and-time">
                            <div id="author"><?php the_author_posts_link(); ?></div>
                            <div id="time"><?php the_time(); ?></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
				</div>
			</div>
	</div>
<?php get_footer(); ?>

