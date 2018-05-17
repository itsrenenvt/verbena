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
    session_start();
    include_once 'modelo/verifica_sesion.php';
     ?>
    <div class="fondo_agrega_evento">
      <div class="contenedor_form_evento">
        <!-- <h3>AGREA UN EVENTO</h3> -->
        <div class="formulario">
        <form class="" name="evento" action="" method="post">

          <div class="input_box">
            <label class="label_uno" for="nombre_evento"><i class="fas fa-bell"></i></label>
            <input type="text" name="nombre_evento" value="" placeholder="Nombre del evento">
          </div>

          <div class="input_box">
            <label class="label_dos" for="direccion"><i class="fas fa-map-marker"></i></label>
            <input type="text" name="direccion" value="" placeholder="Dirección">

            <label class="label_tres" for="orgaizador"><i class="fas fa-coffee"></i></label>
            <input type="text" name="organizador" value="" placeholder="Organizador">
          </div>

          <div class="input_box">
            <label class="label_cuatro" for="fecha_evento"><i class="fas fa-calendar"></i></label>
            <input type="date" name="fecha_evento" value="">

            <label class="label_cinco" for="hora_inicio_evento"><i class="fas fa-hourglass-start"></i></label>
            <input type="time" name="hora_inicio_evento" value="" max="23:59:59" min="00:00:00" step="1">

            <label class="label_seis" for="hora_fin_evento"><i class="fas fa-hourglass-end"></i></label>
            <input type="time" name="hora_fin_evento" value="" max="23:59:59" min="00:00:00" step="1">
          </div>

          <div class="input_box">
            <!-- <label class="label_seis" for="orgaizador"><i class="fas fa-calendar"></i></label>
            <input type="text" name="organizador" value="" placeholder="Inserte nombre del organizador"> -->

            <label class="label_siete" for="categoria"><i class="fas fa-folder-open"></i></i></label>
            <select class="categoria" name="categoria">
              <option value="categoria">Categoría</option>
              <option value="Cultural">Cultural</option>
              <option value="Literatura">Literatura</option>
              <option value="Artistico">Artistico</option>
              <option value="Feria">Feria</option>
              <option value="Perfofance">Performance</option>
            </select>

            <label class="label_ocho" for="clasificación"><i class="fas fa-eye"></i></i></label>
            <select class="clasificación" name="clasificación">
              <option value="clasificacion">Clasificación</option>
              <option value="Niños">Niños</option>
              <option value="Adolecentes">Adolecentes</option>
              <option value="Jovenes">Jovenes</option>
              <option value="Adultos">Adultos</option>
              <option value="Público en general">Público en general</option>
            </select>
          </div>

          <div class="input_box">
            <label class="label_nueve" for="descripcion_evento"><i class="fas fa-edit"></i></label>
            <input type="text" name="descripcion_evento" value="" placeholder="Descripción del evento">
          </div>

            <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
            <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar" onclick="evento.action='tabla_evento.php';">
          </form>
          </div>
      </div>
    </div>
  </body>
</html>
