<?php $cat_argtos = array(
    'orderby' => 'name',
    'order' => 'ASC'
);

$categorias = get_categories($cat_argtos);
foreach ($categorias as $categoria) {
    $args = array(
        'showposts' => -1,
        'category__in' => array($categoria->term_id),
        'ignore_sticky_posts' => 1
    );
    $entradas = get_posts($args);
    if ($entradas) {

?>
        <div class="container">
            <br>
            <?php echo '<h2> <a href="' . get_category_link($categoria->term_id) . '" title="' . sprintf(__(" Mostrar todas entradas en %s"), $categoria->name) . '" ' . '>' . $categoria->name . '</a> </h2> ';
            echo $categoria->description; ?>
            <br>

            <div class="row">
                <?php
                foreach ($entradas as $post) {
                    setup_postdata($post); ?>


                    <article class="col-md-4">
                        <div class="card">
                            <?php the_post_thumbnail() ?>
                            <img src="img/mpc12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                <p class="card-text"> <?php the_excerpt() ?> </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </article>
                <?php
                } ?>
            </div>
        <?php } ?>

        </div>
    <?php } ?>