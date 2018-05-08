<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/agrega_rutas.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Reseñas</title>
  </head>
  <body>

      <?php
      include_once 'includes/aside_admin.html';
       ?>
      <div class="fondo_agrega_ruta">
        <div class="contenedor_form_ruta">
          <!-- <h3>AGREA UN EVENTO</h3> -->
          <div class="formulario">
          <form class="" action="" method="post">
            <div class="input_box">
              <label class="label_uno" for="nombre_evento"><i class="fas fa-map"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Nombre de la ruta">
            </div>
            <div class="input_box">
              <label class="label_dos" for="nombre_evento"><i class="fas fa-map-pin"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Código Postal">
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_uno" for="nombre_evento"><i class="fas fa-map-signs"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Calle o Avenida">
            </div>
            <div class="input_box">
              <label class="label_uno" for="nombre_evento"><i class="fas fa-map-signs"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Colonia">
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_tres" for="nombre_evento"><i class="fas fa-building"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Ciudad">
            </div>
            <div class="input_box">
              <label class="label_uno" for="nombre_evento"><i class="fal fa-hashtag"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Número Exterior">
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_uno" for="nombre_evento"><i class="fal fa-hashtag"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Número Interior">
            </div>
            <div class="input_box">
              <label class="label_uno" for="url_maps"><i class="fas fa-street-view"></i></label>
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
