<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/evento.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Cartelera</title>
  </head>
  <body>
    <?php
    include_once 'includes/aside_admin.html';
     ?>
    <div class="fondo_agrega_evento">
      <div class="contenedor_form_evento">
        <!-- <h3>AGREA UN EVENTO</h3> -->
        <div class="formulario">
        <form class="" action="" method="post">
          <div class="input_box">
            <label for="nombre_evento">Nombre</label>
            <input type="text" name="nombre_evento" value="" placeholder="Inserte nombre del evento">
          </div>
          <div class="input_box">
            <label for="fecha_evento">Fecha</label>
            <input type="date" name="fecha_evento" value="">
          </div>
          <div class="input_box">
            <label for="hora_inicio_evento">Hora Inicio</label>
            <input type="time" name="hora_inicio_evento" value="" max="23:59:59" min="00:00:00" step="1">
          </div>
          <div class="input_box">
            <label for="hora_fin_evento">Hora Fin</label>
            <input type="time" name="hora_fin_evento" value="" max="23:59:59" min="00:00:00" step="1">
          </div>
            <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
            <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar">
          </form>
          </div>
      </div>
    </div>
  </body>
</html>
