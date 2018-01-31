<?php

// Custom Post Type Query
function add_events_query( $query ) {
    if( !is_admin() && $query->is_main_query() ) {
        if( $query->is_home() ) {
            $query->set( 'post_type', ['post', 'events'] );
        }
    }
}

add_action( 'pre_get_posts', 'add_events_query' );

function flexy_filter_wp_title($currenttitle, $sep, $seplocal) {
    $site_name = get_bloginfo('name');
    $full_title = $site_name . $currenttitle;

    if(is_front_page() || is_home()) {
        $site_desc = get_bloginfo('description');
        $full_title .= ' ' . $sep . ' ' . $site_desc;
    }

    return $full_title;
}

add_filter('wp_title', 'flexy_filter_wp_title', 10, 3);


// Custom Logo

$defaults = [
    'height'      => 75,
    'width'       => 75,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => ['site-title', 'site-description']
];

add_theme_support( 'custom-logo', $defaults );
add_theme_support( 'post-thumbnails');

set_post_thumbnail_size( 327, 198, true );

add_image_size( 'icon', 75, 75, true);
add_image_size( 'feat-post-tmb', 1280, 720, true );
add_image_size( 'post-tmb', 654, 396, true );
add_image_size( 'post-tmb-sm', 281, 133, true);
add_image_size( 'full-width', 1280, 720, true );
add_image_size( 'full-width-tablet', 1181, 576, true );
add_image_size( 'full-width-mobile', 654, 396, true );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');



register_nav_menus(
    [
        'nav-upper-header' => 'Header: Main Nav',
        'nav-lower-header' => 'Header: Sub Nav',
        'nav-sns' => 'SNS Nav',
        'nav-footer-left' => 'Footer: Left Nav',
        'nav-footer-center' => 'Footer: Center Nav',
        'nav-footer-right' => 'Footer: Right Nav',

        ]
);

// Sidebars

$flexy_home_left_sidebar = [
    'name' => 'Home: Left',
    'id' => 'home-left',
    'description' => 'Widgets placed here will display at the center area of the HOME page on the left-hand side.',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_home_left_sidebar);

$flexy_home_center_sidebar = [
    'name' => 'Home: Center',
    'id' => 'home-center',
    'description' => 'Widgets placed here will display at the center area of the HOME page at the center.',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_home_center_sidebar);

$flexy_home_right_sidebar = [
    'name' => 'Home: Right',
    'id' => 'home-right',
    'description' => 'Widgets placed here will display at the center area of the HOME page on the right-hand side.',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_home_right_sidebar);

$flexy_prefooter_sidebar = [
    'name' => 'Pre-Footer',
    'id' => 'prefooter',
    'description' => 'Widgets placed here will display before the footer of the every PAGE and SINGLE POST',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="text-center">',
    'after_title' => '</h3>'
];

register_sidebar($flexy_prefooter_sidebar);

$flexy_single_block_sidebar = [
    'name' => 'Single: Block Sidebar',
    'id' => 'single-block-sidebar',
    'description' => 'Widgets placed here will display to the right of the main content with a background on SINGLE POSTS',
    'before_widget' => '<div class="sidemenu">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_single_block_sidebar);

$flexy_single_sidebar = [
    'name' => 'Single: Sidebar',
    'id' => 'single-sidebar',
    'description' => 'Widgets placed here will display to the right of the main content without a background on SINGLE POSTS',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_single_sidebar);

$flexy_page_block_sidebar = [
    'name' => 'Page: Block Sidebar',
    'id' => 'page-block-sidebar',
    'description' => 'Widgets placed here will display to the right of the main content with a background on PAGES',
    'before_widget' => '<div class="sidemenu">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_page_block_sidebar);

$flexy_page_sidebar = [
    'name' => 'Page: Sidebar',
    'id' => 'page-sidebar',
    'description' => 'Widgets placed here will display to the right of the main content without a background on PAGES',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_page_sidebar);

$flexy_404_sidebar = [
    'name' => '404: Sidebar',
    'id' => '404-sidebar',
    'description' => 'Widgets placed here will display to the right of the main content on the 404 Page.',
    'before_widget' => '<div class="sidemenu">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
];

register_sidebar($flexy_404_sidebar);
