<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/agrega_colaborador.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Colaboradores</title>
  </head>
  <body>

      <?php
      include_once 'aside.html';
       ?>
      <div class="fondo_agrega_colaborador">
        <div class="contenedor_form_colaborador">
          <!-- <h3>AGREA UN EVENTO</h3> -->
          <div class="formulario">
          <form class="" action="" method="post">
            <div class="input_box">
              <label for="nombre_evento">Nombre</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Nombre(s)">
            </div>
            <div class="input_box">
              <label for="nombre_evento">Ap. Mat</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Apellido Materno">
            <!-- </div>
            <div class="input_box"> -->
              <label for="nombre_evento">Ap. Pat</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Apellido Paterno">
            </div>
            <div class="input_box">
              <label for="nombre_evento">Usuario</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Nombre de usuario">
            <!-- </div>
            <div class="input_box"> -->
              <label for="nombre_evento">Contraseña</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Contraseña">
            </div>
            <div class="input_box">
              <label for="nombre_evento">E-mail</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Correo Electronico">
            <!-- </div>
            <div class="input_box"> -->
              <label for="nombre_evento">Telefono</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Telefono">
            </div>
            <div class="input_box">
              <label for="url_maps">Dirección</label>
              <input class="input_ancho" type="text" name="url_maps" value="" placeholder="Dirección">
            </div>

              <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
              <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar">

            </form>
            </div>
        </div>
      </div>
  </body>
</html>
