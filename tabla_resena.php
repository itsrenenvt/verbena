<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <link rel="icon" href="img/verbena.ico">
    <script src="js/editor.js" charset="utf-8"></script>
    <script src="js/resena.js" charset="utf-8"></script>
    <title>Tabla Reseñas</title>
  </head>
  <body>

    <?php
    session_start();
    include_once 'modelo/verifica_sesion.php';
    include_once 'modelo/sget_reseña.php';
    include 'basedatos/conexion.php';
    if ($sesion_user=="cliente" ) {
      header('Location: inicio.php');
    }
    ?>

    <div class="fondo_tabla">
      <h2>RESEÑAS</h2>
      <div class="contenedor_tabla">
        <form name="form_reseña" class="" action="" method="post">

          <input type="hidden" name="txtope">
          <input type="hidden" name="txtid">

          <table class="tabla_clientes">
            <thead>
              <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th colspan="2">Operaciones</th>
              </tr>
            </thead>

            <?php
            $result=pg_query($conexion, 'select * from reseña order by id_reseña desc');
            while ($dato = pg_fetch_array($result)){

              $objReseña = new resena();

              $objReseña->setid($dato['id_reseña']);
              $objReseña->settitulo($dato['titulo']);
              $objReseña->setautor($dato['autor']);
              $objReseña->setfechapub($dato['fecha_pub']);
              $objReseña->sethorapub($dato['hora']);
              $objReseña->setcontenido($dato['descripcion']);

              ?>
              <tr>
                <td><?php echo $objReseña->getid() ?></td>
                <td><?php echo $objReseña->getautor() ?></td>
                <td><?php echo $objReseña->gettitulo() ?></td>
                <td><?php echo $objReseña->getcontenido() ?></td>
                <td><?php echo $objReseña->getfechapub() ?></td>
                <td><?php echo $objReseña->gethorapub() ?></td>
                <td><input type="submit" name="" class="btn-enviar" id="btn-modificar" value="Modificar" onClick="form_reseña.action='form_reseña.php';txtope.value='m';txtid.value='<?php echo $objReseña->getid() ?>'"></td>
                <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar" onClick="form_reseña.action='form_reseña.php';txtope.value='e';txtid.value='<?php echo $objReseña->getid() ?>'"></td>
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
          <input type="submit" name="" class="btn-agregar" id="btn-agregar" value="Agregar" onClick="form_reseña.action='form_reseña.php';txtope.value='g'">
        </form>
    </div>
  </body>
  </html>
