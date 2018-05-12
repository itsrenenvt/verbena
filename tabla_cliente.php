<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/tabla_cliente.css">
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
        <table class="tabla_clientes">
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th colspan="2">Operaciones</th>
          </tr>

          <?php
          $result=pg_query($conexion, 'select * from usuario order by id_usuario');
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

            echo '<tr>
            <td>' .$objPersona->getid().'</td>
            <td>' .$objPersona->getusuario().'</td>
            <td>' .$objPersona->getNombreCompleto().'</td>
            <td>' .$objPersona->getemail().'</td>
            <td>' .$objPersona->gettelefono().'</td>
            <td>' .$objPersona->getdireccion().'</td>
            <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Modificar" onclick=""></td>
            <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar" onclick=""></td>
            </tr>';
          }
          if (!empty(pg_fetch_array($result))) {
            echo "<tr><td colspan='8' >NO HAY DATOS</td></tr>";
          }
          pg_close($conexion);
          ?>
        </table>
      </div>
      <input type="submit" name="" class="btn-agregar" id="btn-agregar" value="Agregar" onclick="">
    </div>
  </body>
  </html>
