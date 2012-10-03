<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
		<h1><?php _e( 'Search Results for', 'html5blank' ); echo get_search_query(); ?></h1>
		
		<?php get_template_part('loop'); ?>
		
		<!-- Pagination -->
		<div id="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>