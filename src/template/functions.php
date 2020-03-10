<?php

/*********************************************
 *               Post Thumbnail               *
 **********************************************/
add_theme_support('post-thumbnails');
/*********************************************
 *               Adding Blocks                *
 **********************************************/
add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {
        // register card block
        acf_register_block(array(
            'name'                => 'card',
            'title'                => __('card'),
            'description'        => __('A custom card block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('contact'),
        ));
        // register cta block
        acf_register_block(array(
            'name'                => 'cta',
            'title'                => __('cta'),
            'description'        => __('A custom cta block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('cta'),
        ));
        // register ctav2 block
        acf_register_block(array(
            'name'                => 'ctav2',
            'title'                => __('ctav2'),
            'description'        => __('A custom ctav2 block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('ctav2'),
        ));

        // register cardgrid block
        acf_register_block(array(
            'name'                => 'cardgrid',
            'title'                => __('cardgrid'),
            'description'        => __('A custom cardgrid block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('cardgrid'),
        ));
        // register contact block
        acf_register_block(array(
            'name'                => 'contact',
            'title'                => __('contact'),
            'description'        => __('A custom contact block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('contact'),
        ));
        // register services block
        acf_register_block(array(
            'name'                => 'services',
            'title'                => __('services'),
            'description'        => __('A custom services block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('services'),
        ));
        // register map block
        acf_register_block(array(
            'name'                => 'map',
            'title'                => __('map'),
            'description'        => __('A custom map block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('map'),
        ));
        // register Hero block
        acf_register_block(array(
            'name'                => 'Hero',
            'title'                => __('Hero'),
            'description'        => __('A custom Hero block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('hero'),
        ));
        // register testimonials block
        acf_register_block(array(
            'name'                => 'testimonials',
            'title'                => __('testimonials'),
            'description'        => __('A custom testimonials block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('testimonials'),
        ));
        // register reviews block
        acf_register_block(array(
            'name'                => 'reviews',
            'title'                => __('reviews'),
            'description'        => __('A custom reviews block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('reviews'),
        ));
        // register gallery block
        acf_register_block(array(
            'name'                => 'gallery',
            'title'                => __('gallery'),
            'description'        => __('A custom gallery block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('gallery'),
        ));
        // register clients block
        acf_register_block(array(
            'name'                => 'clients',
            'title'                => __('clients'),
            'description'        => __('A custom clients block.'),
            'render_callback'    => 'section_block_callback',
            'category'            => 'formatting',
            'icon'                => 'admin-comments',
            'keywords'            => array('clients'),
        ));
    }
}
/*********************************************
 *               Blocks Callback              *
 **********************************************/
function section_block_callback($block)
{
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("/template-parts/block/{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block/{$slug}.php"));
    }
}
/*********************************************
 *               Blocks Styling               *
 **********************************************/
function am_enqueue_admin_styles()
{
    wp_register_style('am_admin_uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css');
    wp_enqueue_style('am_admin_uikit');
}
add_action('admin_enqueue_scripts', 'am_enqueue_admin_styles');
function am_enqueue_admin_styles_js()
{
    wp_register_style('am_admin_uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js');
    wp_enqueue_style('am_admin_uikit_js');
}
add_action('admin_enqueue_scripts', 'am_enqueue_admin_styles_js');
function am_enqueue_admin_styles_jsx()
{
    wp_register_style('am_admin_uikit_jsx', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('am_admin_uikit_jsx');
}
add_action('admin_enqueue_scripts', 'am_enqueue_admin_styles_jsx');
/*********************************************
 *               ACF Theme Settings           *
 **********************************************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}

?>