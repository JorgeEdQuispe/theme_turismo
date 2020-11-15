<?php
/*
 * Define custom post type
 * Register post types: https://codex.wordpress.org/Function_Reference/register_post_type
 * Icons: https://developer.wordpress.org/resource/dashicons/
 */
function itali_post_type()
{
  register_post_type(
    'sucursal',
    array(
      'labels' => array(
        'name' => __('Sucursal'),
        'singular_name' => __('Item'),
        'add_new' => __('Nuevo item'),
        'add_new_item' => __('Añadir nuevo item'),
        'edit_item' => __('Editar Sucursal'),
        'featured_image' => __('Imagen del Sucursal')
      ),
      'public' => true,
      'exclude_from_search' => true,
      'has_archive' => false,
      'show_in_nav_menus' => false,
      'menu_icon' => 'dashicons-admin-site',
      //'rewrite' => array('slug' => 'carousel'),
      'supports' => array('title', 'editor', 'thumbnail')

    )
  );
  register_post_type(
    'testimonios',
    array(
      'labels' => array(
        'name' => __('Testimonio'),
        'singular_name' => __('Testimonio'),
        'add_new' => __('Nuevo Testimonio'),
        'add_new_item' => __('Añadir nuevo Testimonio'),
        'edit_item' => __('Editar Testimonio'),
        'featured_image' => __('Imagen del Testimonio')
      ),
      'public' => true,
      'exclude_from_search' => false,
      'has_archive' => false,
      'show_in_nav_menus' => false,
      'menu_icon' => 'dashicons-groups',
      //'rewrite' => array('slug' => 'carousel'),
      'supports' => array('title', 'editor', 'thumbnail')

    )
  );
  register_post_type(
    'Sliders',
    array(
      'labels' => array(
        'name' => __('Slider'),
        'singular_name' => __('Slider'),
        'add_new' => __('Nuevo imagen'),
        'add_new_item' => __('Añadir nuevo Item'),
        'edit_item' => __('Editar Item'),
        'featured_image' => __('Imagen del Item')
      ),
      'public' => true,
      'exclude_from_search' => false,
      'has_archive' => false,
      'show_in_nav_menus' => false,
      'menu_icon' => 'dashicons-cover-image',
      //'rewrite' => array('slug' => 'carousel'),
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );

  register_post_type(
    'programas',
    array(
      'labels' => array(
        'name' => __('Programa'),
        'singular_name' => __('Programa'),
        'add_new' => __('Nuevo Programa'),
        'add_new_item' => __('Añadir nuevo Programa'),
        'edit_item' => __('Editar Programa'),
        'featured_image' => __('Imagen del Programa')
      ),
      'public' => true,
      'exclude_from_search' => true,
      'has_archive' => false,
      'show_in_nav_menus' => false,
      'menu_icon' => 'dashicons-align-full-width',
      //'rewrite' => array('slug' => 'carousel'),
      'supports' => array('title', 'editor', 'thumbnail')

    )
  );
}
add_action('init', 'itali_post_type');
