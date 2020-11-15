<?php

/**
 * Add support to Theme Customizer
 */
function fastfood_customize_register($wp_customize)
{
    // Add new section to Customizer
    $wp_customize->add_section('theme_options', array(
        'title'    => __('Itali Options', 'itali'),
        'priority' => 130, // Before Additional CSS.
    ));

    // Display the form for change the logo on header
    $wp_customize->add_setting('logo_header', array(
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_header',
            array(
                'label'      => __('Upload a logo for header', 'itali'),
                'section'    => 'theme_options'
            )
        )
    );
    $wp_customize->add_setting('logo_footer', array(
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_footer',
            array(
                'label'      => __('Upload a logo for footer', 'itali'),
                'section'    => 'theme_options'
            )
        )
    );
}

add_action('customize_register', 'fastfood_customize_register');
