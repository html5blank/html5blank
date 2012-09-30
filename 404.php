<?php get_header(); ?>

<!-- Section -->
<section>

	<!-- Article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<h1>Page not found</h1>
		<h2><a href="<?php bloginfo('url'); ?>">Return home?</a></h2>
		
	</article>
	<!-- /Article -->
	
</section>
<!-- /Section -->

<?php get_footer(); ?>