<?php get_header(); ?>
	
	<!-- Section -->
	<section>
		
		<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
		
		<!-- Blog -->	
		<div id="blog">
	
			<?php get_template_part('loop'); ?>
			
			<!-- Pagination -->
			<div id="pagination">
				<?php html5wp_pagination(); ?>
			</div>
			<!-- /Pagination -->
		
		</div>
		<!-- /Blog -->
		
		<?php get_sidebar(); ?>
	
	</section>
	<!-- /Section -->

<?php get_footer(); ?>