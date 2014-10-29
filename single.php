<?php get_header(); ?>
	<div class="row clearfix">
		<div class="col-md-8 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
                    <div class="post-category-header"><h4><?php the_category(' '); ?></h4></div><hr>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php
          setPostViews(get_the_ID());
?>
                    
                    <div class="post-wrapper single-page">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					   <div class="post-header single-page"><h2><?php the_title(); ?></h2></div>
        <div class="if_container">
            <div class="if_share-wrapper">
                <div class="share clearfix">		
                   <ul>

                        <li class="sharetwitter"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink() ?>&via=<?php bloginfo( 'name' ); ?>" class="if_share-button tr" alt="Tweet This Post" title="Tweet This Post" target="_blank"><i class="fa fa-twitter"></i> Tweet</a></li>

                        <li class="sharefacebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="if_share-button br"  alt="Share on Facebook" title="Share on Facebook" target="_blank" ><i class="fa fa-facebook"></i> Share</a></li>

                        <li class="sharegoogle"><a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php the_permalink() ?>"class="if_share-button tl" alt="Share on Google+" title="Share on Google+" target="_blank" ><i class="fa fa-google-plus"></i> Google+</a></li>

</ul>
                </div>
            </div>
        </div>
                        <div class="post-image single-page"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?></div>
                    </div>
                 </div>
				</div>
			</div>
			<div class="row clearfix single-page">
				<div class="col-md-3 column">
                    <center>
                        <div class="author-image"><?php echo get_avatar( get_the_author_meta('email'), 'size here' ); ?></div>
                        <div class="author-name"><?php the_author_posts_link(); ?></div>
                        <div class="published">Published</div>
                        <div class="post-time"><?php the_date(); ?></div>
                        <div class="comments-count">Comments</div>
                        <div class="post-comment-count"><?php comments_number(); ?></div>
                        <div class="views-count">Views</div>
                        <div class="post-views-count"><?php echo getPostViews(get_the_ID()); ?></div>
                    </center>
				</div>
                <?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
				<div class="col-md-9 column">
					<div class="post-content single-page"><p><?php the_content(); ?></p></div>
                    <div class="post-tags single-page"><p><?php the_tags(); ?></p> </div><hr>
                    <div class="post-navigation btn btn-default">
                        <div id="next-post-navigation">Next Post >> <?php if(get_adjacent_post(false, '', false)) {  next_post_link('%link'); }
else { echo '<span style="color:#bbb;">"'.get_the_title().'" is the latest post </span>'; } ; ?></div>
                    </div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row clearfix margin">
        <div class="col-md-12">
            <hr>
               <div class="comment-section comment"><?php 
$withcomments = "1";
comments_template(); // Get wp-comments.php template ?></div>
                <div class="comment-feed"><?php post_comments_feed_link('Comment Feed'); ?></div>
            </div>
	</div>
                <?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
				</div>
			</div>
        </div>
        
		<div class="col-md-4 column recent">
			<div id="recent-posts">
                <h4>Recent Posts</h4><hr>
<?php $postslist = get_posts('numberposts=3&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>

<div class="post-wrap single-page">
    <div id="post-category">#<?php the_category(' '); ?></div>
    <div class="recentpost-thumbnail single-page"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else { ?>
<img src="<?php get_template_directory_uri() ; ?>/bootstrap/img/default-image.png" alt="<?php the_title(); ?>" />
<?php } ?></a></div>
    <div class="recentpost-header single-page"><p><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
    <div class="author-and-time"><div id="author-post"><?php the_author_posts_link(); ?></div><div id="time"><?php the_time(); ?></div></div>
</div>

<?php endforeach; ?>
</div><!-- End Recent Posts -->
		</div>
        </div>

    
<?php get_footer(); ?>
