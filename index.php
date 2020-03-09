<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/pulse/bootstrap.min.css" crossorigin="anonymous">

  <title>Tema Sam</title>
  <?php wp_head(  );?>
</head>

<body>
  <!--Menu-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri() ?> /img/padonde ehh.png"   width="230" height="23"alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">blog</a>
          <a class="nav-item nav-link" href="#">Contacto</a>
          <!-- este es el buscador de la pagina -->
          <nav class="navbar navbar-light bg-primary">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
        </div>

      </div>
    </div>

  </nav>
  <!-- menu-->

  <!-- blog-->
  <div class="container">
    <!-- aqui vemos que el h2 se le pone una clase centrada y con texto mas lindo -->
    <h2 class="my-5 text-center text-primary">Estamos trabajando para que este jevi</h2>
    <hr>
    <!-- entradas -->
    <div class="row">
      <!-- entradas -->
      <div class="col-lg-9">
<!--entrada aqui van todas las entradas que se pone desde wordpress-->

<div class="card-body">
  <a href="single.html">
  <h2> BIG MAC</h2>
</a>
<p class="small mb-0">Fecha: 23-01-2020</p>
<p class="small">Autor: pedro frias</p>
<img src="<?php echo get_stylesheet_directory_uri() ?> /img/m24.png" alt="" class="img-fluid mb-4">
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat suscipit tenetur sequi, earum ad esse illo quidem, expedita voluptatum quis explicabo. Ex debitis ut eos hic nobis eius quos. Adipisci.</p>
<a href="" class="btn btn-primary">Continuel</a>
</div>




<div class="card-body">
  <a href="single.html">
  <h2> Titulo de la entrada</h2>
</a>
<p class="small mb-0">Fecha: 17-01-2020</p>
<p class="small">Autor: pedro frias</p>
<img src="<?php echo get_stylesheet_directory_uri() ?> /img/images.png" alt="" class="img-fluid mb-4">
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat suscipit tenetur sequi, earum ad esse illo quidem, expedita voluptatum quis explicabo. Ex debitis ut eos hic nobis eius quos. Adipisci.</p>
<a href="" class="btn btn-primary">Continuel</a>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

<!--entrada-->
      </div>
      <!-- entradas -->

      <!-- Aside-->
      <div class="col-lg-3">
        <div class="card-body">
        <h4> Publicidad </h4>
        <img src="<?php echo get_stylesheet_directory_uri() ?> /img/barquito-bon-azul.png"   width="300" height="400"alt="">
</div>
      </div>
      <!-- Aside-->
    </div>
  </div>

  <!-- blog-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>