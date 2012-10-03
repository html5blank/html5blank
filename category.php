<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
		<h1><?php _e( 'Categories for', 'html5blank' ); the_category(); ?></h1>
	
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