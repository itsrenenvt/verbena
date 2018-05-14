<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Usuarios Cliente</title>
  </head>
  <body>

    <?php
    session_start();
    include_once 'accesodatos/verifica_sesion.php';
    include_once 'basedatos/conexion.php';
    include_once 'accesodatos/persona.php';
    ?>

    <div class="fondo_tabla">
      <div class="contenedor_tabla">
        <form name="form_cliente" class="" action="" method="post">

          <input type="hidden" name="txtope">
          <input type="hidden" name="txtid">

          <table class="tabla_clientes">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th colspan="2">Operaciones</th>
              </tr>
            </thead>

            <?php
            $result=pg_query($conexion, 'select * from usuario order by id_usuario desc');
            while ($dato = pg_fetch_array($result)){

              $objPersona = new persona();

              $objPersona->setid($dato['id_usuario']);
              $objPersona->setusuario($dato['usuario']);
              $objPersona->setcontrasena($dato['contraseña']);
              $objPersona->setnombre($dato['nombre']);
              $objPersona->setpaterno($dato['ap_paterno']);
              $objPersona->setmaterno($dato['ap_materno']);
              $objPersona->setemail($dato['email']);
              $objPersona->settelefono($dato['telefono']);
              $objPersona->setdireccion($dato['direccion']);

              ?>
              <tr>
                <td><?php echo $objPersona->getid() ?></td>
                <td><?php echo $objPersona->getusuario() ?></td>
                <td><?php echo $objPersona->getNombreCompleto() ?></td>
                <td><?php echo $objPersona->getemail() ?></td>
                <td><?php echo $objPersona->gettelefono() ?></td>
                <td><?php echo $objPersona->getdireccion() ?></td>
                <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Modificar" onClick="form_cliente.action='cliente.php';txtope.value='m';txtid.value='<?php echo $objPersona->getid() ?>'"></td>
                <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar" onClick="form_cliente.action='cliente.php';txtope.value='e';txtid.value='<?php echo $objPersona->getid() ?>'"></td>
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

          <input type="submit" name="" class="btn-agregar" id="btn-agregar" value="Agregar" onClick="form_cliente.action='cliente.php';txtope.value='g'">
        </form>
    </div>
  </body>
  </html>
