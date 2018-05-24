<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/reseña.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Reseñas</title>
  </head>
  <body>

      <?php
       include_once 'includes/header.php';
       include 'modelo/sget_reseña.php';
       $leeReseña = new resena();
      ?>


      <div class="fondo_reseña">
        <div class="espacio">

        </div>
        <section class="seccion_reseña">
          <div class="contenido_reseña">
            <?php
            $id = $_GET['id'];
            echo $leeReseña->leer($id); ?>
          </div>
        </section>


      </div>

      <?php
      include 'includes/footer.php';
      ?>


  </body>
</html>
