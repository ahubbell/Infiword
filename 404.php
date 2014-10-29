<?php get_header(); ?>
	<div class="row clearfix">
		<div class="col-md-12 column">
            <center><div class="author-page-header"><h1 class="text-center"><?php _e( 'Not Found', 'infi' ); ?></h1></div></center>
        </div>
        <div class="col-md-12 column text-center">
			<div class="row clearfix">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'infi' ); ?></p>
				<?php get_search_form(); ?>
				</div>
			</div>
	</div>
<?php get_footer(); ?>