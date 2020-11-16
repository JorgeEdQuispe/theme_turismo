<?php
get_header();

?>

<body id="page-top">
  <br>
  <section class="slider">
    <div id="carouselExampleControls" class="slider_container carousel slide" data-ride="carousel">
      <div class="carousel-inner slider_container_items">
        <div class="carousel-item slider_container_items_img active">
          <img src="img/peru2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item slider_container_items_img">
          <img src="img/mpc12.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item slider_container_items_img">
          <img src="img/mcp1.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  
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

  <section class="intro">
    <div class="container intro_contain">
      <div class="row intro_contain_items">
        <div class="col-sm-7 intro_contain_items_text">
          <h1>
            <strong>
              Alegria's Travel Agency
            </strong>
          </h1>
          <p class="p"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis a necessitatibus vel ut atque? Aperiam quas voluptates voluptate impedit iusto ducimus eaque, necessitatibus magnam tempore. Et quia sapiente quidem tempore. <span><strong>Alegrias Travel </strong></span>
          </p>

        </div>
        <div class="col-sm-3 intro_contain_items_img">
          <img width="150" height="150" src="https://i0.wp.com/peruadventuretrek.com/wp-content/uploads/2020/02/tripadvisor2020-150x150.jpg?ssl=1">
        </div>


      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <br>
      <br>
    </div>
  </div>

  <div>
    <br>
    <h2>Tours</h2>
    <br>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <img src="img/mpc12.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="img/peru2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="img/v3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <br>
      <br>
    </div>
  </div>

  <div>
    <br>
    <h2>Adventure</h2>
    <br>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <section>
    <div>
      <div class="carousel-item slider_container_items_img active">
        <img src="" class="d-block w-100" alt="...">
      </div>
  </section>

  <div>
    <br>
    <br>
    <h2>Datos para el viajero</h2>
    <br>
  </div>

  <section>
    <div class="container datos">
      <div class="row datos_cont">
        <div class="col-sm-9 datos_cont_img">
          <img width="500 " height="250" src="img/v3.jpg">
          <div class=" datos_cont_img_text">
            <a href="menu.html">Viajando a la Maravilla del mundo Machupicchu</a>
          </div>
        </div>
      </div>


    </div>
  </section>



  <br>
  <br>
  <br>

  <section class="secundintro">
    <div class="container secundintro_contain">
      <div class="row secundintro_contain_items">
        <div class="col-sm-3 secundintro_contain_items_img">
          <img width="200" height="300" src="img/Montaña1.jpg">
        </div>
        <div class="col-sm-7 secundintro_contain_items_text">
          <h1>
            <strong>
              Un buen viajero no tiene planes fijos ni la intención de llegar
            </strong>
          </h1>
          <p class="p"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis a necessitatibus vel ut atque? Aperiam quas voluptates voluptate impedit iusto ducimus eaque, necessitatibus magnam tempore. Et quia sapiente quidem tempore.
          </p>

        </div>



      </div>
    </div>
  </section>


  <div class="row justify-content-md-center mt-3 permisos">
    <div class="col-md-auto p-3">
      <a rel="noopener" aria-label="DIRCETUR License" href="/img/logodircetur.jpg" target="_blank"></a>
    </div>
    <div class="col-md-auto p-3">
      <a rel="noopener" aria-label="Operating License" href="/" target="_blank"></a>
    </div>
    <div class="col-md-auto p-3">
      <a rel="noopener" aria-label="Legal Data" href="/images/PDFs/ficharuc.pdf" target="_blank"></a>
    </div>
    <div class="col-md-auto p-3">
      <a rel="noopener" aria-label="Tripadvisor reviews" href="" target="_blank"></a>
    </div>
  </div>










  </section>
  <!-- Footer-->


  <?php
  get_footer();
