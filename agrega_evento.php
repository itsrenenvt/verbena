<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
            <label class="label_uno" for="nombre_evento"><i class="fas fa-bell"></i></label>
            <input type="text" name="nombre_evento" value="" placeholder="Inserte nombre del evento">
          </div>
          <div class="input_box">
            <label class="label_dos" for="fecha_evento"><i class="fas fa-calendar"></i></label>
            <input type="date" name="fecha_evento" value="">
          <!-- </div>
          <div class="input_box"> -->
            <label class="label_tres" for="hora_inicio_evento"><i class="fas fa-hourglass-start"></i></label>
            <input type="time" name="hora_inicio_evento" value="" max="23:59:59" min="00:00:00" step="1">
          <!-- </div>
          <div class="input_box"> -->
            <label class="label_cuatro" for="hora_fin_evento"><i class="fas fa-hourglass-end"></i></label>
            <input type="time" name="hora_fin_evento" value="" max="23:59:59" min="00:00:00" step="1">
          </div>
          <div class="input_box">
            <label class="label_cinco" for="descripcion_evento"><i class="fas fa-edit"></i></label>
            <input type="text" name="descripcion_evento" value="" placeholder="Descripción del evento">
          </div>
            <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
            <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar">
          </form>
          </div>
      </div>
    </div>
  </body>
</html>
