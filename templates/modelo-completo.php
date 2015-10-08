<?php
/**
 * Template Name: Modelo Completo
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package theme
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php get_template_part( 'icons/icon-include'); ?>

<?php get_header("clean"); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'inc/browsermessage'); ?>

<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">

    	<?php get_template_part( 'partials/sitebranding'); ?>

        <?php get_template_part( 'partials/navigation'); ?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
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
    	    	
    	    	<div id="secondary" class="widget-area" role="complementary">
    	    		<?php get_sidebar("clean"); ?>
    	    	</div><!-- #secondary -->
    	    
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">

            <?php get_template_part( 'partials/footer'); ?>

        </div><!-- .site-info -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php get_footer("clean"); ?>
</body>
</html>
