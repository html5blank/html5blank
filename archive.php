<?php get_header(); ?>
	
	<!-- Section -->
	<section role="main">
	
		<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<!-- Pagination -->
		<div class="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>