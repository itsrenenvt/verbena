<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/aside.css">
    <link rel="icon" href="img/verbena.ico">
    <title></title>
  </head>
  <body>

    <?php
    include_once 'modelo/sget_estadisticas.php';
    $objEst = new estadisticas();
    $objEst->capcliente();
    $objEst->capcolaborador();
    ?>

      <div class="marco_portada">
      </div>

    <aside class="caja_izq">
      <div class="caja_fondo">
        <div class="izquierdo">
          <div class="img_perfil"></div>
          <label class="label_img">ADMINISTRADOR</label>
          <div class="estadistica">

            <div class="estadistica_cliente">
              <p><?php echo $objEst->getcliente();?></p>
              <label for="estadistica_cliente">Clientes</label>
            </div>

            <div class="estadistica_colaboradores">
              <p><?php echo $objEst->getcolaborador();?></p>
              <label for="estadistica_colaboradores">Colaboradores</label>
            </div>

          </div>

          <nav>
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="tabla_cliente.php">Clientes</a></li>
              <li><a href="tabla_colaborador.php">Colaboradores</a></li>
              <li><a href="tabla_evento.php">Eventos</a></li>
              <li><a href="tabla_resena.php">Reseña</a></li>
              <li><a href="tabla_rutas.php">Rutas</a></li>
              <li><a href="tabla_obras.php">Tienda</a></li>
            </ul>
          </nav>
          <a class="cerrar" href="logout.php">Cerrar Sesi&oacute;n</a>
        </div>
      </div>
    </aside>

  </body>
</html>
