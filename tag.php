<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
	<h1>Tag Archive: <?php echo single_tag_title('', false); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			<!-- Post Title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /Post Title -->
			
			<!-- Post Date + Time -->
			<span class="date"><?php the_date(); ?></span>
			<span class="time"><?php the_time(); ?></span>
			<!-- /Post Date + Time -->
			
			<?php comments_popup_link('Leave your thoughts', '1 Comment', '% Comments'); ?>
			
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h2>Sorry, nothing to display.</h2>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
		
		<!-- Pagination -->
		<div id="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>