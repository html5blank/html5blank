<?php get_header(); ?>
	
	<?php if (have_posts()): ?>
	
	<h2>Archives</h2>
	
	<!-- Section -->
	<section>
	
	<?php while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article>
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
					<?php the_post_thumbnail(array(120,120)); // Show Thumbnail at 120px by 120px, change to whatever size you need ?>
				</a>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			<!-- Post Title -->
			<h2>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /Post Title -->
			
			<!-- Post Date + Time -->
			<span class="date"><?php the_date(); ?></span>
			<span class="time"><?php the_time(); ?></span>
			<!-- /Post Date + Time -->
			
			<?php comments_popup_link('Leave your thoughts', '1 Comment', '% Comments'); // Comments ?>
			
			<?php html5wp_excerpt('html5wp_index'); // Callback length customisable in functions.php ?>
			
			<br class="clear">
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	</section>
	<!-- /Section -->
	
	<?php else: ?>
	
	<h2>Sorry, no posts to display!</h2>
	
	<?php endif; ?>
	
	<div id="pagination">
		<?php html5wp_pagination(); // Pagination links (inside Functions.php) ?>
	</div>
	
<?php get_sidebar(); // Get Sidebar (sidebar.php) ?>

<?php get_footer(); ?>