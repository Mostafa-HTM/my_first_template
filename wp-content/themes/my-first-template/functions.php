<?php



function register_mft_menus (){
    register_nav_menus(array(
    'mft_menus' => 'منوی اصلی'
));
}



add_action( 'init', 'register_mft_menus');

function my_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



function mft_download_post_type() {
    $labels = array (
        'name' => 'دانلودها',
        'singular_name' => 'دانلود',
        'add_new_item' => 'افزودن دانلود جدید',
        'add_item' => 'افزودن جدید',
    );
    $args = [
        'labels' => $labels,
        'public' => true,
        'rewrite' => array ('slug' => 'download'),
        'has_archive' => true,
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
        'taxonomies' => array ('downloads'),
    ];
    register_post_type( 'download', $args );
}
add_action( 'init', 'mft_download_post_type');



function mft_downloads_taxonomies() {
    $labels = [
        'name' => 'دسته‌های دانلود',
        'singular_name' => 'دسته دانلود',
        'parent_item' => 'دسته مادر',
        'add_new' => 'افزودن جدید',
        'add_new_item' => 'افزودن دسته جدید',
    ];
    $args = [
        'labels' => $labels,
        'hierarchical' => true,
        'rewrite' => array ('slug' => 'download'),
    ];
    register_taxonomy( 'downloads', array('download'), $args );
}
add_action('init','mft_downloads_taxonomies');




?>