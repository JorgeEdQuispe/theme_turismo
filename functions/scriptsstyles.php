<?php
// Load scripts
function load_turism_scripts()
{
    // CSS
    wp_enqueue_style('turism-styles', get_stylesheet_uri());
    wp_enqueue_style('turism-styles_theme', get_template_directory_uri() . '/assets/css/banner.css', array(), '1.0.0' );
    wp_enqueue_style('turism-styles_theme_uno', get_template_directory_uri() . '/assets/css/keyframes.css', array(), '1.0.0' );
    wp_enqueue_style('turism-styles_theme_dos', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0' );
    wp_enqueue_style('turism-styles_theme_tres', get_template_directory_uri() . '/assets/css/styles_as.css', array(), '1.0.0' );
    wp_enqueue_style('stylecss', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.6' );
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array('turism-styles_theme'), '1.0.0');

    // JAVASCRIPT
    //wp_deregister_script('jquery');
    //wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1');
    wp_enqueue_script('jsdelivr', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '1.16.1');
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/025d1f53df.js', array(), null);
    // wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), '1.12.3', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true );    
    wp_enqueue_script( 'bootstrapbundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '4.0.0', true );    
    // wp_enqueue_script( 'fastfood-scripts', get_template_directory_uri() . '/js/general.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('itali_scripts_theme', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('itali_scripts_theme_uno', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'load_turism_scripts');
