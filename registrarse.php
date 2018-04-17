<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/registrarse.css">
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

          <div class="derecho">
            <h3>Registrate</h3>
            <img src="img/img_registro.svg" alt="" class="img_derecha">
          </div>

          <div class="izquierdo">
            <h3>Rellena estos campos</h3>
            <form>
              <div class="input_box">
                <input class="placeholder" type="text" name="" placeholder="Nombre" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="text" name="" placeholder="Apellido Paterno" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="text" name="" placeholder="Apellido Materno" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="text" name="" placeholder="Usuario" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="password" name="" placeholder="Contraseña" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="password" name="" placeholder="Confirme Contraseña" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="email" name="" placeholder="Email" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" type="tel" name="" placeholder="Telef&oacute;no" value="">
              </div>

              <div class="input_box">
                <input class="placeholder" id="dir" type="text" name="" placeholder="Direcci&oacute;n" value="">
              </div>

              <input type="submit" name="" value="Registrarse">
            </form>
          </div>

        </div>
      </div>
    </div>

    <?php
    include("footer.html");
    ?>

  </body>
</html>