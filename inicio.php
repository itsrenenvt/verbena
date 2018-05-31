<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Inicio</title>
  </head>
  <body>
    <?php


    ?>

    <?php
    // $nomuser=isset($_REQUEST["Usuario"]) ? $_REQUEST["Usuario"]: "NO USER";
    session_start();
    include 'modelo/verifica_sesion.php';
    ?>

      <div class="fondo_inicio">
        <div class="contendedor">
          <!-- <h2>Bienvenido</h2> -->
          <h1 class="nombreuser"> <?php echo $username ?></h1>
          <!-- <h2>VERBENA DE LA BUENA</h2> -->
        </div>
      </div>


  </body>
</html>
