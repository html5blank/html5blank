<?php
/*
Template Name: Archive Smakk Posts
*/
get_header(); ?>




<div id="primary" class="site-content">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">

<?php the_content(); ?>

<?php

    $args = array(
        'post_type' => 'smakk',
        'orderby' => 'ID',
        'order' => 'ASC'
    );

$loop = new WP_Query($args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="post__list">
<h1>
<li>
<a href="<?php the_permalink() ?>"
  title="Permanent Link to <?php the_title_attribute(); ?>">
  <?php the_title(); ?>
     </a>
     </li>
     </h1>

</div>



<?php endwhile;
wp_reset_postdata();
?>



</div><!-- .entry-content -->

<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
