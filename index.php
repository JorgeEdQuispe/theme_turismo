<?php
get_header();
?>
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
    echo '<h2> <a href="' . get_category_link($categoria->term_id) . '" title="' . sprintf(__("Mostrar todas entradas en %s"), $categoria->name) . '" ' . '>' . $categoria->name . '</a> </h2>  ';
    echo $categoria->description;
    
    foreach ($entradas as $post) {
      setup_postdata($post); ?>
      <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
<?php
    }
  }
} ?>

<?php
get_footer();
