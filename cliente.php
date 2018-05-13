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
       ?>
      <div class="fondo_agrega_colaborador">
        <div class="contenedor_form_colaborador">
          <!-- <h3>AGREA UN EVENTO</h3> -->
          <div class="formulario">
          <form name="mod_c" class="" action="" method="post">
            <div class="input_box">
              <label class="label_uno" for="txtnombre"><i class="fas fa-user"></i></label>
              <input class="input_ancho" type="text" name="txtnombre" value="" placeholder="Nombre(s)">
            </div>
            <div class="input_box">
              <label class="label_dos" for="txtapp"><i class="fas fa-id-card"></i></label>
              <input class="input_ancho" type="text" name="txtapp" value="" placeholder="Apellido Materno">
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_tres" for="txtapm"><i class="fas fa-id-card"></i></label>
              <input class="input_ancho" type="text" name="txtapm" value="" placeholder="Apellido Paterno">
            </div>
            <div class="input_box">
              <label class="label_cuatro" for="txtusername"><i class="fas fa-user-circle"></i></label>
              <input class="input_ancho" type="text" name="txtusername" value="" placeholder="Nombre de usuario">
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_cinco" for="txtpass"><i class="fas fa-lock"></i></label>
              <input class="input_ancho" type="text" name="txtpass" value="" placeholder="Contraseña">
            </div>
            <div class="input_box">
              <label class="label_seis" for="txtemail"><i class="fas fa-envelope"></i></label>
              <input class="input_ancho" type="email" name="txtemail" value="" placeholder="Correo Electronico">
            <!-- </div>
            <div class="input_box"> -->
              <label class="label_siete" for="txttelefono"><i class="fas fa-phone"></i></label>
              <input class="input_ancho" type="text" name="txttelefono" value="" placeholder="Telefono">
            </div>
            <div class="input_box">
              <label class="label_ocho" for="txtdireccion"><i class="fas fa-map-marker"></i></label>
              <input class="input_ancho" type="text" name="txtdireccion" value="" placeholder="Dirección">
            </div>
            <!-- <input type="hidden" name="txtclave"> -->
            <input type="hidden" name="txtope">
              <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar" onClick="mod_c.action='accesodatos/crud_cliente.php';txtope.value='g'">
              <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar" onClick="mod_c.action='tabla_cliente.php';">

            </form>
            </div>
        </div>
      </div>
  </body>
</html>
