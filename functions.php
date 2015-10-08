<?php
/**
 * functions and definitions
 *
 * // READ-ONLY
 * @package theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( '_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _theme_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
}
endif; // _theme_setup
add_action( 'after_setup_theme', '_theme_setup' );

function _theme_enqueue_style_scripts() {
    wp_enqueue_style( '_theme-login', get_template_directory_uri() . '/login.css', false );
}
add_action( 'login_enqueue_scripts', '_theme_enqueue_style_scripts', 10 );

function _theme_custom_wp_admin_style() {
    wp_enqueue_style( '_theme-admin', get_template_directory_uri() . '/admin.css', false );
}
add_action( 'admin_enqueue_scripts', '_theme_custom_wp_admin_style' );


/**
 * Enqueue scripts and styles.
 */
function _theme_scripts() {

    wp_deregister_script('jquery');
    wp_deregister_script('jquery-form');

    // JS
    wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );
    wp_register_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", array("modernizr"), '2.1.3', true);
    wp_register_script( 'jquery-form', '//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js', array( 'jquery' ), '3.51.0-2014.06.20', true );
    wp_register_script( 'mousewheel', "//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.min.js", array("jquery"), '1', true);

    wp_register_script( 'fancybox', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js", array("mousewheel", "jquery"), '2.1.5', true);
    wp_register_script( 'fancybox-buttons', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.js", array("fancybox"), '2.1.5', true);
    wp_register_script( 'fancybox-media', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js", array("fancybox"), '2.1.5', true);
    wp_register_script( 'fancybox-thumbs', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-thumbs.js", array("fancybox"), '2.1.5', true);

    wp_register_script( 'hoverintent', "//cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.8.1/jquery.hoverIntent.min.js", array("jquery"), '1.8.1', true);
    wp_register_script( 'superfish', "//cdnjs.cloudflare.com/ajax/libs/superfish/1.7.4/superfish.min.js", array("hoverintent"), '1.8.1', true);

    wp_register_script( 'cycle2', "//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.min.js", array("jquery"), '20140415', true);
    wp_register_script( 'cycle2-carousel', "//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.carousel.min.js", array("cycle2"), '20140415', true);
    wp_register_script( 'cycle2-center', "//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.center.min.js", array("cycle2"), '20140415', true);
    wp_register_script( 'cycle2-video', "//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.video.min.js", array("cycle2"), '20140415', true);


    // CSS
    wp_register_style( 'normalize', "//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css", array(), '3.0.2' );
    wp_register_style( 'fancybox', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css", array("normalize"));
    wp_register_style( 'fancybox-buttons', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.css", array("fancybox"));
    wp_register_style( 'fancybox-thumbs', "//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-thumbs.css", array("fancybox"));


    wp_enqueue_script('modernizr');
    wp_enqueue_script('jquery');
    wp_enqueue_script('fancybox-buttons');
    wp_enqueue_script('fancybox-media');
    wp_enqueue_script('fancybox-thumbs');
    wp_enqueue_script('superfish');
    wp_enqueue_script('cycle2');
    wp_enqueue_script('cycle2-carousel');
    wp_enqueue_script('cycle2-center');
    wp_enqueue_script('cycle2-video');

    wp_enqueue_style('normalize');
    wp_enqueue_style('fancybox');
    wp_enqueue_style('fancybox-buttons');
    wp_enqueue_style('fancybox-thumbs');

    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array("normalize") );
    wp_enqueue_style( 'theme-custom', get_template_directory_uri() . "/custom/styles.css", array("theme-style"), '1');

	require get_template_directory() . '/custom/include_css.php';

    wp_enqueue_script( 'theme-script', get_template_directory_uri() . "/custom/script.js", array("jquery"), '1', true);
    
    require get_template_directory() . '/custom/include_js.php';

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_theme_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

// remove feed, rss, wlw, generator, shortlink, etc...
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

require get_template_directory() . '/custom/functions.php';

// READ-ONLY
