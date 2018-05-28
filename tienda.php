<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tienda.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Tienda</title>
  </head>
  <body>

      <?php
       include_once 'includes/header.php';

      ?>

      <div class="seccion_1">

        <div class="headObra">
          <p>TIENDA</p>
        </div>

        <div class="contenedor_obras">
          <div class="cajaObra">
            <?php
            include 'modelo/sget_obras.php';
            $insertObras = new obras();
            $insertObras->insertaObra();
            ?>
          </div>

        </div>
      </div>

      <div class="seccion_2">

      </div>

      <?php
      include 'includes/footer.php';
      ?>


  </body>
</html>
