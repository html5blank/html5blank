<?php get_header(); ?>

<!-- Section -->
<section>

	<!-- Article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
		<h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a></h2>
		
	</article>
	<!-- /Article -->
	
</section>
<!-- /Section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>