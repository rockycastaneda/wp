<?php

function rox_setup()
{
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/jquery-3.4.1.slim.min.js', NULL, microtime(), true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/popper.min.js', NULL, microtime(), true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', NULL, microtime(), true);
    
    
}


add_action('wp_enqueue_scripts', 'rox_setup');

// Add theme support

function rox_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 'comment-form', 'search-form');
}

add_action('after_setup_theme', 'rox_init');

function rox_custom_post_type() {
    register_post_type('project', 
        array(
            'rewrite'   => array('slug' => 'projects'),
            'labels'     => array(
                'name'          => 'Projects',
                'singular_name' => 'Project',
                'add_new_item'  => 'Add New Project',
                'edit_item'     => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public'    => true,
            'has_archive' => true,
            'supports'  => array (
                'title',
                'thumbnail',
                'editor',
                'exceprt',
                'comments'
            )

        )
    );
    add_post_type_support( 'project', 'excerpt' );
}

add_action('init', 'rox_custom_post_type');