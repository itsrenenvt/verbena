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
    $objEst->capnewsletters();
    ?>

      <div class="marco_portada">

      </div>


    <aside class="caja_izq">
      <div class="caja_fondo">
        <div class="izquierdo">
          <div class="img_perfil"></div>
          <div class="usuario">
            <!-- <label class="label_img">COLABORADOR</label> -->
            <p class="label_img">COLABORADOR</p>
          </div>
          <div class="estadistica">

            <div class="estadistica_cliente">
              <p class="pestadistica"><?php echo $objEst->getcliente();?></p>
              <!-- <label for="estadistica_cliente">Clientes</label> -->
              <p class="petiqueta">Clientes</p>
            </div>

            <div class="estadistica_colaboradores">
              <p class="pestadistica"><?php echo $objEst->getnews();?></p>
              <!-- <label for="estadistica_colaboradores">Newsletters</label> -->
              <p class="petiqueta">Newsletters</p>
            </div>

          </div>

          <nav>
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="tabla_cliente.php">Clientes</a></li>
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
<!--
    <aside class="caja_der_uno">
      <div class="caja_fondo_der">
        <div class="derecho">

        </div>

      </div>
    </aside>

    <aside class="caja_der_dos">
      <div class="caja_fondo_der_dos">
        <div class="derecho_dos">

        </div>

      </div>
    </aside> -->

  </body>
</html>
