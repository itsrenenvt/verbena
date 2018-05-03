<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="img/verbena.ico">
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/login.js" charset="utf-8"></script>
    <title>Inicio Sesión - Verbena de la buena</title>
  </head>
  <body>

    <?php
    include_once("header.html");
    ?>

    <div class="fondo_iniciosesion">
      <div class="div_login">
        <div class="div_cristal">
          <img src="img/verbena.svg" class="img_usuario_login" alt="">
          <h3>Inicia Sesi&oacute;n</h3>
          <form>
            <!-- Poner requieres despues -->
            <div class="input_box">
              <input class="placeholder" type="text" name="" placeholder="Usuario" value="" id="usuario" >
              <span><i class="fas fa-user"></i></span>
            </div>
            <div class="input_box">
              <input class="placeholder" type="password" name="" placeholder="Contraseña" value="" id="contraseña">
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
    include("footer.html");
    ?>

  </body>
</html>
