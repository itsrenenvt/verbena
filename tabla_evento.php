<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Tabla Eventos</title>
  </head>
  <body>

    <?php
    session_start();
    include_once 'modelo/verifica_sesion.php';
    include_once 'modelo/sget_evento.php';
    include 'basedatos/conexion.php';
    ?>

    <div class="fondo_tabla">
      <div class="contenedor_tabla">
        <form name="form_evento" class="" action="" method="post">

          <input type="hidden" name="txtope">
          <input type="hidden" name="txtid">

          <table class="tabla_clientes">
            <thead>
              <tr>
                <th>ID</th>
                <th>Organizador</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th colspan="2">Operaciones</th>
              </tr>
            </thead>

            <?php
            $result=pg_query($conexion, 'select * from evento order by id_evento desc');
            while ($dato = pg_fetch_array($result)){

              $objEvento = new evento();

              $objEvento->setid($dato['id_evento']);
              $objEvento->setnombre($dato['nombre']);
              $objEvento->setdireccion($dato['direccion']);
              $objEvento->setfecha($dato['fecha']);
              $objEvento->sethrinicio($dato['hora_inicio']);
              $objEvento->sethrfin($dato['hora_fin']);
              $objEvento->setorganizador($dato['organizador']);
              $objEvento->setclasificacion($dato['clasificacion']);
              $objEvento->setcategoria($dato['categoria']);
              $objEvento->setdescripcion($dato['descripcion']);

              ?>
              <tr>
                <td><?php echo $objEvento->getid() ?></td>
                <td><?php echo $objEvento->getorganizador() ?></td>
                <td><?php echo $objEvento->getnombre() ?></td>
                <td><?php echo $objEvento->getdireccion() ?></td>
                <td><?php echo $objEvento->getfecha() ?></td>
                <td><?php echo $objEvento->gettiempo() ?></td>
                <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Modificar" onClick="form_evento.action='form_evento.php';txtope.value='m';txtid.value='<?php echo $objEvento->getid() ?>'"></td>
                <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar" onClick="form_evento.action='form_evento.php';txtope.value='e';txtid.value='<?php echo $objEvento->getid() ?>'"></td>
              </tr>
              <?php
            }
            if (!empty(pg_fetch_array($result))) {
              echo "<tr><td colspan='8' >NO HAY DATOS</td></tr>";
            }
            pg_close($conexion);
            ?>
          </table>
        </div>

          <input type="submit" name="" class="btn-agregar" id="btn-agregar" value="Agregar" onClick="form_evento.action='form_evento.php';txtope.value='g'">
        </form>
    </div>
  </body>
  </html>
