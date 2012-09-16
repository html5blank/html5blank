<?php /* Template Name: Demo Page Template */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h2><?php the_title(); ?></h2>

<?php the_content(); ?>

<br class="clear">

<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

<?php comments_template( '', true ); // Remove if you don't want comments ?>

<?php endwhile; ?>

<?php get_footer(); ?>