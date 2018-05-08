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
    include_once 'includes/aside_admin.html';
    include_once 'accesodatos/conexion.php';
    include_once 'accesodatos/persona.php';
    $objPersona = new persona();
    $result=pg_query($conexion, 'select * from "Usuario"');
    ?>

    <div class="fondo_tabla">
      <div class="contenedor_tabla">
        <table class="tabla_clientes">
          <tr>
            <th class="t">ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th colspan="2">Operaciones</th>
          </tr>

          <?php

          while ($dato = pg_fetch_array($result)){

            $objPersona = new persona();

            $objPersona->setid($dato['ID_Usuario']);
            $objPersona->setusuario($dato['Usuario']);
            $objPersona->setcontrasena($dato['Contraseña']);
            $objPersona->setnombre($dato['Nombre']);
            $objPersona->setpaterno($dato['Ap_Paterno']);
            $objPersona->setmaterno($dato['Ap_Materno']);
            $objPersona->setemail($dato['Email']);
            $objPersona->settelefono($dato['Teléfono']);
            $objPersona->setdireccion($dato['Dirección']);

            echo '<tr>
            <td>' .$objPersona->getid().'</td>
            <td>' .$objPersona->getusuario().'</td>
            <td>' .$objPersona->getcontrasena().'</td>
            <td>' .$objPersona->getNombreCompleto().'</td>
            <td>' .$objPersona->getemail().'</td>
            <td>' .$objPersona->gettelefono().'</td>
            <td>' .$objPersona->getdireccion().'</td>
            <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Modificar"></td>
            <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar"></td>
            </tr>';
}
pg_close($conexion);
           ?>

        </table>
      </div>
    </div>

  </body>
</html>
