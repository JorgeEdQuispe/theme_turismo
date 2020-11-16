<nav class=" menutop navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="menutop_cont container">
                <a class="navbar-brand menutop_cont_img js-scroll-trigger" href=<?php echo get_home_url(); ?>>

                    <?php
                    $logo_header = get_theme_mod('logo_header');

                    if ($logo_header) {
                        echo '<img src="' . $logo_header . '" alt="' . get_bloginfo('name') . '">';
                    } else {
                        bloginfo('name');
                    }

                    ?>
                </a>
                <button class="menutop_cont_button navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="menutop_cont_button_collapse collapse navbar-collapse" id="navbarResponsive">
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