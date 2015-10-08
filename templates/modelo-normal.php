<?php
/**
 * Template Name: Modelo Normal
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package theme
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'partials/slider'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        
            <?php get_template_part( 'partials/breadcrumbs'); ?>

            <?php get_template_part( 'content', 'page' ); ?>
            
            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php endwhile; // end of the loop. ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>