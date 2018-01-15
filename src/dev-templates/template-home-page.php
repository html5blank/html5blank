<?php /* Template Name: Template Home Page */ get_header(); ?>

  <main role="main" aria-label="Content">
    <!-- section -->
    <section class="fc___container">

      <h1><?php the_title(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="fc___content">

        <!-- ACF fields begin  -->
      <?php
        if ( have_rows('page_content') ):
          while (have_rows('page_content') ) : the_row();

          // text area field begins
          if ( get_row_layout() == 'text_area' ): ?>

          <section class="text___area">
            <h1> <?php the_sub_field('text_area'); ?> </h1>
          </section>

     <?php elseif (get_row_layout() =='hero_image' ) : ?>
           <!-- gets hero_image fields   -->
             <section class="hero___first">
             <?php $fullWidthImg =  get_sub_field('full_width_image'); ?>
              <img class="hero__first--img " src="<?php echo $fullWidthImg; ?>">
                <h1><?php the_sub_field('caption'); ?></h1>
             </section>

            <?php if( have_rows('gallery') ) : ?>
            <section class="hero___gallery">
              <!-- gallery repeater field begins  -->
              <h1> GALLERY IMAGES  </h1>
            <?php while( have_rows('gallery') ): the_row(); ?>
              <?php $image = get_sub_field('image'); ?>

              <div>
              <img class="gallery___img" src ="<?php echo $image; ?>">
              <h1><?php the_sub_field('caption'); ?></h1>
               </div>
               </section>
                       <!-- gallery repeater field ends  -->
             <?php endwhile; ?>
             <?php endif; ?>



          <!-- CTA field begins  -->
          <?php elseif (get_row_layout() =='cta' ) : ?>
              <section class="cta___link">
            <h1> CTA Link: <?php the_sub_field('cta_link'); ?> </h1>
          </section>

          </section>
          <?php endif; ?>
           <?php endwhile; ?>
            <?php endif; ?>
     <!-- ACF fields end  -->

        <?php the_content(); ?>

        <?php comments_template( '', true ); // Remove if you don't want comments. ?>

        <br class="clear">

        <?php edit_post_link(); ?>
        </div>
      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else : ?>

      <!-- article -->
      <article>

        <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

      </article>
      <!-- /article -->

    <?php endif; ?>

    </section>
    <!-- /section -->
  </main>



<?php get_footer(); ?>
