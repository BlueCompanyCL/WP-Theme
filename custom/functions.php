<?php

//
// TEAM: custom post type here...


// TEAM: post formats?
// add_theme_support( 'post-formats', array(
// 	'aside', 'image', 'video', 'quote', 'link',
// ) );

// TEAM: more menus here...
register_nav_menus(array(
    'primary' => __('Primary Menu', 'theme'),
));

// TEAM: sidebars here...
register_sidebar( array(
    'name'          => __( 'Sidebar', 'theme' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
) );

// TEAM: image size here:
add_image_size('slider', 1440, 400, true );
add_image_size('slider_page', 1440, 200, true );
