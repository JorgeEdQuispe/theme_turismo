<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href=<?php echo get_home_url(); ?>>

                    <?php
                    $logo_header = get_theme_mod('logo_header');

                    if ($logo_header) {
                        echo '<img src="' . $logo_header . '" alt="' . get_bloginfo('name') . '">';
                    } else {
                        bloginfo('name');
                    }

                    ?>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top',
                        'container' => 'ul',
                        'container_class' => 'navbar-nav text-uppercase ml-auto',
                        'menu_class' => 'navbar-nav text-uppercase ml-auto'
                    ));
                    ?>
                    <script>
                        var elemento = document.getElementsByClassName("menu-item");
                        for (var i = 0; i < elemento.length; i++)
                            elemento[i].className += " nav-item";
                    </script>
                </div>
            </div>
        </nav>
    </div>