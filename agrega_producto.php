<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/agrega_producto.css">
    <link rel="icon" href="img/verbena.ico">
    <title>e-commerce</title>
  </head>
  <body>

      <?php
      include_once 'aside.html';
       ?>
      <div class="fondo_agrega_producto">
        <div class="contenedor_form_producto">
          <!-- <h3>AGREA UN EVENTO</h3> -->
          <div class="formulario">
          <form class="" action="" method="post">
            <div class="input_box">
              <label for="nombre_evento">Nombre</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Nombre de la ruta">
            </div>
            <div class="input_box">
              <label for="nombre_evento">Apellido Mat</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Código Postal">
            <!-- </div>
            <div class="input_box"> -->
              <label for="nombre_evento">Apellido Pat</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Calle o Avenida">
            </div>
            <div class="input_box">
              <label for="nombre_evento">Usuario</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Colonia">
            <!-- </div>
            <div class="input_box"> -->
              <label for="nombre_evento">Contraseña</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Ciudad">
            </div>
            <div class="input_box">
              <label for="nombre_evento">E-mail</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Número Exterior">
            <!-- </div>
            <div class="input_box"> -->
              <label for="nombre_evento">Telefono</label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Número Interior">
            </div>
            <div class="input_box">
              <label for="url_maps">Dirección</label>
              <input class="input_ancho" type="text" name="url_maps" value="" placeholder="URL de Google Maps">
            </div>

              <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
              <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar">

            </form>
            </div>
        </div>
      </div>
  </body>
</html>
