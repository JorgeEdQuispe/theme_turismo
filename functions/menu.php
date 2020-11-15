<?php
/*
 * Add classes to main menu
 */
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'fastfood' ),
	'footer' => __( 'Footer Menu', 'fastfood' ),
) );

function itali_menu_classes($classes, $item, $args)
{
  if ($args->theme_location == 'top' || $args->theme_location == 'footer') {
    $classes[] = 'list-inline-item';
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'itali_menu_classes', 1, 3);
