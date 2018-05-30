<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/carrito.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Carrito</title>
  </head>
  <body>
    <?php

    session_start();
    if (!empty($_SESSION["usuario"])) {
      include_once 'modelo/verifica_sesion.php';
      include 'modelo/sget_obras.php';
      $dCarrito = new obras();
      $dCarrito->consultacarrito();



    }else{
      ?>
      <script type="text/javascript">
      alert("¡LO SENTIMOS!, PARA VER TU CARRITO DEBES INICIAR SESIÓN.");
      window.location = 'login.php'
      </script>
      <?php
    }



     ?>
  </body>
</html>
