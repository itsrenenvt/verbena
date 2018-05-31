<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Tabla Obras</title>
  </head>
  <body>

    <?php
    session_start();
    include_once 'modelo/verifica_sesion.php';
    include_once 'modelo/sget_obras.php';
    include_once 'modelo/sget_persona.php';
    include 'basedatos/conexion.php';
    if ($sesion_user=="cliente" ) {
      header('Location: inicio.php');
    }
    ?>

    <div class="fondo_tabla">
      <h2>OBRAS</h2>
      <div class="contenedor_tabla">
        <form name="form_obras" class="" action="" method="post">

          <input type="hidden" name="txtope">
          <input type="hidden" name="txtid">

          <table class="tabla_clientes">
            <thead>
              <tr>
                <th>ID</th>
                <th>Artista</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th colspan="2">Operaciones</th>
              </tr>
            </thead>

            <?php
            $result=pg_query($conexion, 'select * from obra order by id_obra desc');
            while ($dato = pg_fetch_array($result)){

              $objObra = new obras();

              $auxid=$dato['id_obra'];
              $objObra->setid($dato['id_obra']);
              $objObra->setnombre($dato['nombre']);
              $objObra->setartista($dato['artista']);
              $objObra->setcategoria($dato['categoria']);
              $objObra->setdescripcion($dato['descripcion']);
              $objObra->setprecio($dato['precio']);

              ?>
              <tr>
                <td><?php echo $objObra->getid() ?></td>
                <td><?php echo $objObra->getartista() ?></td>
                <td><?php echo $objObra->getnombre() ?></td>
                <td><?php echo $objObra->getdescripcion() ?></td>
                <td><?php echo "$ ".$objObra->getprecio() ?></td>
                <td><?php echo $objObra->getcategoria() ?></td>
                <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Modificar" onClick="form_obras.action='form_obras.php';txtope.value='m';txtid.value='<?php echo $objObra->getid() ?>'"></td>
                <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar" onClick="form_obras.action='form_obras.php';txtope.value='e';txtid.value='<?php echo $objObra->getid() ?>'"></td>
              </tr>
              <?php
            }

            if (empty($auxid)) {
              ?>
              <tr><td colspan="8">NO HAY DATOS</td></tr>
              <?php
            }
            // pg_close($conexion);
            ?>
          </table>
        </div>

          <input type="submit" name="" class="btn-agregar" id="btn-agregar" value="Agregar" onClick="form_obras.action='form_obras.php';txtope.value='g'">
        </form>
    </div>


    <div class="fondo_tabla_ordenes" id="ordenes">
      <h2>ORDENES</h2>
      <div class="contenedor_tabla">

        <form class="" action="" name="form_ordenes" method="post">
          <input type="hidden" name="txtope_crud">
          <input type="hidden" name="txtid_crud">
          <table class="tabla_ordenes">

            <thead>
              <tr>
                <th>ID OBRA</th>
                <th>ID COMP</th>
                <th>OBRA</th>
                <th>PRECIO</th>
                <th>E-MAIL</th>
                <th>DIRECCIÓN</th>
                <th colspan="2">STATUS</th>
                <!-- <th>Operaciones</th> -->
              </tr>
            </thead>

            <?php
            $tipo = isset($_SESSION['usuario'])?$_SESSION['usuario']:"";
            if ($tipo == "cliente") {
              $tipo = "usuario";
            }
            $result=pg_query($conexion, 'select ordenes.id_obra , ordenes.id_usuario, ordenes.status, obra.nombre, obra.precio, '.$tipo.'.email, '.$tipo.'.direccion
from '.$tipo.' inner join ordenes on '.$tipo.'.id_'.$tipo.' = ordenes.id_usuario
              inner join obra on ordenes.id_obra = obra.id_obra order by ordenes.id_orden');
            while ($dato = pg_fetch_array($result)){

              $objObra = new obras();
              $objCliente = new persona();

              $auxid=$dato['id_obra'];

              $objObra->setid($dato['id_obra']);
              $objCliente->setid($dato['id_usuario']);
              $objObra->setnombre($dato['nombre']);
              $objObra->setprecio($dato['precio']);
              $objCliente->setemail($dato['email']);
              $objCliente->setdireccion($dato['direccion']);
              $objObra->setdescripcion($dato['status']);
              $status = $objObra->getdescripcion();

              if($status == "Entregada"){

                $editable = "disabled";
              }else {
                $editable="";
              }
              ?>
              <tr>
                <td><?php echo $objObra->getid() ?></td>
                <td><?php echo $objCliente->getid() ?></td>
                <td><?php echo $objObra->getnombre() ?></td>
                <td><?php echo "$ ".$objObra->getprecio() ?></td>
                <td><?php echo $objCliente->getemail() ?></td>
                <td><?php echo $objCliente->getdireccion() ?></td>
                <td>

                  <select class="select_status" name="txtstatus">
                    <option value="<?php echo $objObra->getdescripcion(); ?>"><?php echo $objObra->getdescripcion(); ?></option>
                    <option value="Pendiente" <?php echo $editable ?>>Pendiente</option>
                    <option value="Confirmada" <?php echo $editable ?>>Confirmada</option>
                    <option value="Entregada" <?php echo $editable ?>>Entregada</option>
                  </select>

                </td>
                <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Confirmar" onClick="form_ordenes.action='modelo/addcarrito.php';txtope_crud.value='a';txtid_crud.value='<?php echo $objObra->getid() ?>'"></td>

              </tr>
              <?php
            }

            if (empty($auxid)) {
              ?>
              <tr><td colspan="8">NO HAY DATOS</td></tr>
              <?php
            }
            pg_close($conexion);
            ?>

          </table>


      </div>
    </form>

    </div>
  </body>
  </html>
