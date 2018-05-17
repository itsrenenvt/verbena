<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/agrega_producto.css">
    <link rel="icon" href="img/verbena.ico">
    <title>e-commerce</title>
  </head>
  <body>

       <?php
      session_start();
      include_once 'modelo/verifica_sesion.php';
       ?>
      <div class="fondo_agrega_producto">
        <div class="contenedor_form_producto">
          <!-- <h3>AGREA UN EVENTO</h3> -->
          <div class="formulario">
          <form class="" action="" method="post">

            <div class="input_box">
              <label class="label_uno" for="nombre_evento"><i class="fas fa-shopping-bag"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Nombre">
            </div>

            <div class="input_box">

              <label class="label_dos" for="nombre_evento"><i class="fas fa-coffee"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Artista">

              <label class="label_tres" for="txtcategoria"><i class="fas fa-folder-open"></i></label>
              <!-- <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Categoría"> -->
              <select class="categoria" name="txtcategoria" >
                <option value=""></option>
                <option value="Cultural">Decoración</option>
                <option value="Literatura">Ropa</option>
                <option value="Artistico">Bisuteria</option>
                <option value="Feria">Accesorios</option>
                <option value="Performance">Otro</option>
              </select>

              <label class="label_cuatro" for="nombre_evento"><i class="fas fa-fire"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Precio">

            </div>

            <div class="input_box">

              <label class="label_cinco" for="nombre_evento"><i class="fas fa-edit"></i></label>
              <input class="input_ancho" type="text" name="nombre_evento" value="" placeholder="Descripción">

            </div>

              <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
              <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar">

            </form>
            </div>
        </div>
      </div>
  </body>
</html>
