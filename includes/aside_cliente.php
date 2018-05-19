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

    <!-- <div class="fondo_ventana"> -->
      <div class="marco_portada">
        <!-- <div class="portada"> -->
          <!-- <img src="img/img_verbena8.jpg" alt=""> -->
        <!-- </div> -->
      </div>
    <!-- </div> -->

    <aside class="caja_izq">
      <div class="caja_fondo">
        <div class="izquierdo">
          <div class="img_perfil"></div>
          <label class="label_img">CLIENTE</label>
          <div class="estadistica">
            <div class="estadistica_cliente">
              <?php
              include_once 'basedatos/conexion.php';
              $result=pg_query($conexion, 'select count (id_usuario) from usuario');
              while ($dato = pg_fetch_array($result)) {
                $total_user = $dato["count"];
              }
               ?>
              <p><?php echo $total_user ?></p>
              <label for="estadistica_cliente">Clientes</label>
            </div>
            <div class="estadistica_colaboradores">
              <?php
              $result=pg_query($conexion, 'select count (id_colaborador) from colaborador');
              while ($dato = pg_fetch_array($result)) {
                $total_colaboradores = $dato["count"];
              }
               ?>
              <p><?php echo $total_colaboradores ?></p>
              <label for="estadistica_colaboradores">Colaboradores</label>
            </div>
          </div>
          <nav>

            <ul>
              <li><a href="form_cliente.php">Perfil</a></li>
              <li><a href="index.php">Inicio</a></li>
              <!-- <li><a href="tabla_cliente.php">Clientes</a></li> -->
              <!-- <li><a href="agrega_colaborador.php">Colaboradores</a></li> -->
              <li><a href="cartelera.php">Cartelera</a></li>
              <!-- <li><a href="agrega_reseña.php">Reseña</a></li> -->
              <li><a href="rutas.php">Rutas</a></li>
              <li><a href="tienda.php">Tienda</a></li>
              <li><a href="carrito.php">Carrito</a></li>
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
