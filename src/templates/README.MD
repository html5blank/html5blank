# Templates

Create a file caleld template-{template_name}.php. Make sure you include template
name, e.g.:

```
<?php

    /**
     * Template Name: Contact Page
     */

    get_header();

?>
<main class="main" role="main">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="row flex">
                <div class="col col--xs-12 col--sm-12 col--md-8 col--lg-8">
                    <div class="content <?php the_field('colour'); ?>">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col col--xs-12 col--sm-12 col--md-4 col--lg-4">
                    <?php get_sidebar('university'); ?>
                </div>
            </div>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
```
