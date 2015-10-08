<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package theme
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php get_template_part( 'icons/icon-include'); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'inc/browsermessage'); ?>

<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">

    	<?php get_template_part( 'partials/sitebranding'); ?>

        <?php get_template_part( 'partials/navigation'); ?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
