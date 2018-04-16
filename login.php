<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/verbena.ico">
    <script src="js/main.js" charset="utf-8"></script>
    <title>Inicio Sesión - Verbena de la buena</title>
  </head>
  <body>

    <?php
    include("header_uno.html");
    ?>

    <div class="background-login">
      <div class="div_login">
        <div class="div_cristal">
          <img src="img/user.svg" class="img_usuario_login" alt="">
          <h3>Inicia Sesi&oacute;n</h3>
          <form>
            <div class="input_box">
              <input class="placeholder" type="text" name="" placeholder="Usuario" value="">
              <span><i class="fas fa-user"></i></span>
            </div>
            <div class="input_box">
              <input class="placeholder" type="password" name="" placeholder="Contraseña" value="">
              <span><i class="fas fa-lock"></i></span>
            </div>
            <input type="submit" name="" value="Iniciar Sesión">
          </form>
          <a href="#">¿Olvid&oacute; su contraseña?</a>
        </div>
      </div>
    </div>

    <?php
    include("footer.html");
    ?>

  </body>
</html>
