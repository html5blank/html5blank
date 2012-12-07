<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
		<?php if (is_category('WordPress')) { ?>
		<h1>WordPress</h1>
		<? } elseif (is_category('Web Development')) { ?>
		<h1>Web Development</h1>
		<? } elseif (is_category('plugins-downloads')) { ?>
		<h1>Plugins/Downloads</h1>
		<?php } ?>
		
		
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