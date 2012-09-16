<?php get_header(); ?>
	
	<?php if (have_posts()): ?>
	
	<!-- Section -->
	<section>
	
	<?php while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article>
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
					<?php the_post_thumbnail(); ?>
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
			
			<?php the_content(); // Dynamic Content ?>
			
			<br class="clear">
			
			<?php the_tags('Tags:', ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p>Categorised in: <?php the_category(', '); // Separated by commas ?></p>
			
			<p>This post was written by <?php the_author(); ?></p>
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php comments_template(); ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	</section>
	<!-- /Section -->
	
	<?php else: ?>
	
	<h2>Sorry, nothing to display!</h2>
	
	<?php endif; ?>
	
<?php get_sidebar(); // Get Sidebar (sidebar.php) ?>

<?php get_footer(); ?>