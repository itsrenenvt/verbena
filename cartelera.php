<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/cartelera.css">
    <link rel="icon" href="img/verbena.ico">
    <script src="js/main.js" charset="utf-8"></script>
    <title>Cartelera - Verbena de la buena</title>
  </head>
  <body>

    <?php
    include_once("includes/header.html");
    ?>


    <div class="slide_carrusel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 100vh">
            <img class="d-block w-100" src="img/img_verbena4.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Lorem ipsum dolor sit amet.</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="img/img_verbena12.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Lorem ipsum dolor sit amet.</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="img/img_verbena13.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Lorem ipsum dolor sit amet.</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

    <div class="seccion_5">

    </div>

    <div class="panel_lateral">
      <input type="checkbox" class="checkbox" id="check" name="" value="">
      <label class="menu" for="check"><img src="img/menu.svg" alt=""></label>
      <!-- <label class="menu" for="check">|||</label> -->
      <div class="left-panel">
        <ul>
          <h4>CARTELERA</h4>
          <a href=""><li>EVENTOS</li></a>
          <a href=""><li>GALERIAS</li></a>
          <a href="verbuenos.php"><li>VERBUENOS</li></a>
        </ul>
      </div>
    </div>

    <?php
    include_once("includes/footer.html");
    ?>

  </body>
</html>
