<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/agrega_usuario.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Colaboradores</title>
  </head>
  <body>

      <?php
      session_start();
      include_once 'accesodatos/verifica_sesion.php';
      include 'accesodatos/sget_persona.php';
      $objduser = new persona();
       ?>
      <div class="fondo_agrega_colaborador">
        <div class="contenedor_form_colaborador">
          <!-- <h3>AGREA UN EVENTO</h3> -->
          <div class="formulario">
            <?php

            try {
              $clv_ope=$_POST["txtope"];
              if($clv_ope == "m" || $clv_ope == "e"){
                $id_ope=$_POST["txtid"];
                include 'basedatos/conexion.php';
                $result=pg_query($conexion, 'select * from colaborador where id_colaborador ='.$id_ope);
                while ($dato = pg_fetch_array($result)){

                  $objduser->setid($dato['id_colaborador']);
                  $objduser->setusuario($dato['usuario']);
                  $objduser->setcontrasena($dato['contraseña']);
                  $objduser->setnombre($dato['nombre']);
                  $objduser->setpaterno($dato['ap_paterno']);
                  $objduser->setmaterno($dato['ap_materno']);
                  $objduser->setemail($dato['email']);
                  $objduser->settelefono($dato['telefono']);
                  $objduser->setdireccion($dato['direccion']);
                }
                pg_close($conexion);
              }else{
              }

              if ($clv_ope == "e") {
                $editable="disabled";
              }else{
                $editable="";
              }
            } catch (Exception $e) {
            }

             ?>
          <form name="mod_c" class="" action="" method="post">
            <div class="input_box">
              <label class="label_uno" for="txtnombre"><i class="fas fa-user"></i></label>
              <input class="input_ancho" type="text" name="txtnombre" value="<?php echo $objduser->getnombre(); ?>" placeholder="Nombre(s)" <?php echo $editable ?>>
            </div>
            <div class="input_box">
              <label class="label_dos" for="txtapp"><i class="fas fa-id-card"></i></label>
              <input class="input_ancho" type="text" name="txtapp" value="<?php echo $objduser->getpaterno(); ?>" placeholder="Apellido Paterno" <?php echo $editable ?>>
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_tres" for="txtapm"><i class="fas fa-id-card"></i></label>
              <input class="input_ancho" type="text" name="txtapm" value="<?php echo $objduser->getmaterno(); ?>" placeholder="Apellido Materno" <?php echo $editable ?>>
            </div>
            <div class="input_box">
              <label class="label_cuatro" for="txtusername"><i class="fas fa-user-circle"></i></label>
              <input class="input_ancho" type="text" name="txtusername" value="<?php echo $objduser->getusuario(); ?>" placeholder="Nombre de usuario" <?php echo $editable ?>>
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_cinco" for="txtpass"><i class="fas fa-lock"></i></label>
              <input class="input_ancho" type="text" name="txtpass" value="<?php echo $objduser->getcontrasena(); ?>" placeholder="Contraseña" <?php echo $editable ?>>
            </div>
            <div class="input_box">
              <label class="label_seis" for="txtemail"><i class="fas fa-envelope"></i></label>
              <input class="input_ancho" type="email" name="txtemail" value="<?php echo $objduser->getemail(); ?>" placeholder="Correo Electronico" <?php echo $editable ?>>
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_siete" for="txttelefono"><i class="fas fa-phone"></i></label>
              <input class="input_ancho" type="text" name="txttelefono" value="<?php echo $objduser->gettelefono(); ?>" placeholder="Telefono" <?php echo $editable ?>>
            </div>
            <div class="input_box">
              <label class="label_ocho" for="txtdireccion"><i class="fas fa-map-marker"></i></label>
              <input class="input_ancho" type="text" name="txtdireccion" value="<?php echo $objduser->getdireccion(); ?>" placeholder="Dirección" <?php echo $editable ?>>
            </div>

            <input type="hidden" name="txtope_crud" value="<?php echo $clv_ope?>">
            <input type="hidden" name="txtid_crud" value="<?php echo $objduser->getid(); ?>">

              <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Listo" onClick="mod_c.action='accesodatos/crud_colaborador.php';">
              <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar" onClick="mod_c.action='tabla_colaborador.php';">

            </form>
            </div>
        </div>
      </div>
  </body>
</html>
