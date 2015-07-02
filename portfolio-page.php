<?php
/**
Template Name: Custom Portfolio
 **/
?>

<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="page-content" role="main">
	
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
		</article>
        
        <?php /* Start loop */ ?>
        <?php if ( get_theme_mod('foundationbuddy_portfolio_category_slug') ) { ?>
            <?php
                $foundationbuddy_portfolio_category_slug = get_theme_mod('foundationbuddy_portfolio_category_slug');
            ?>
            <?php query_posts( array ( 'category_name' => $foundationbuddy_portfolio_category_slug, 'posts_per_page' => -1 ) ); ?>
            <?php get_template_part( 'templates/portfolio', 'page' ); ?> 
            <?php wp_reset_query(); ?>
        <?php } else { ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php } ?>
            
	</div>
		
<?php get_footer(); ?>