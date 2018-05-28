<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Inicio Sesión - Verbena de la buena</title>
  </head>
  <body>

    <?php
    include_once("includes/header.php");
    ?>

    <div class="fondo_iniciosesion">
      <div class="div_login">
        <div class="div_cristal">
          <img src="img/verbena.svg" class="img_usuario_login" alt="">
          <!-- <h3>Inicia Sesi&oacute;n</h3> -->
          <p class="plogin">Inicia Sesi&oacute;n</p>
          <form id="formulario_login" method="post" action="modelo\ingreso.php">
            <!-- Poner requieres despues -->
            <div class="input_box">
              <input class="placeholder" type="text" name="txtuser" placeholder="Usuario" value="" id="usuario" required>
              <span><i class="fas fa-user"></i></span>
            </div>
            <div class="input_box">
              <input class="placeholder" type="password" name="txtpass" placeholder="Contraseña" value="" id="contraseña" required>
              <span><i class="fas fa-lock"></i></span>
            </div>
            <input type="submit" name="" value="Iniciar Sesión" id="iniciar">
          </form>
          <a href="#">¿Olvid&oacute; su contraseña?</a>
          <a href="registro_cliente.php">Registrarse</a>
        </div>
      </div>
    </div>

    <?php
    include("includes/footer.php");
    ?>

  </body>
</html>
