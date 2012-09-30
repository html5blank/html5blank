<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			<!-- Post Title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /Post Title -->
			
			<!-- Post Details -->
			<span class="date"><?php the_date(); ?></span>
			<span class="time"><?php the_time(); ?></span>
			<span class="author">Published by <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link('Leave your thoughts', '1 Comment', '% Comments'); ?></span>
			<!-- /Post Details -->
			
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
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h1>Sorry, nothing to display.</h1>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>