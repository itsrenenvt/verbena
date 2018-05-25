<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/reseña.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Reseñas</title>
    <title></title>
  </head>
  <body>
    <?php
    include 'includes/header.php';
    ?>


    <div class="seccion_1">
      <img src="img/reseña.svg" alt="">
    </div>

    <div class="seccion_2">

      <div class="headReseña">
        <img src="img/reseña.svg" alt="">
      </div>

      <div class="contenedor">

        <div class="cajaReseña">
          <?php
          include 'modelo/sget_reseña.php';
          $resena = new resena();
          $resena->insertaReseña();
          ?>
        </div>
      </div>
    </div>




    <?php
     include 'includes/footer.php';
    ?>
  </body>
</html>
