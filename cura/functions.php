<?php

function removeinline_adminbar_css_frontend() {
    if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) ){
        remove_filter( 'wp_head', '_admin_bar_bump_cb' );
    }
}
add_filter( 'wp_head', 'removeinline_adminbar_css_frontend', 1 );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 387, 151 );

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="thumbnail"><div class="caption">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

