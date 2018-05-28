<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/carrito.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Carrito</title>
  </head>
  <body>


      <?php
       include_once 'includes/header.php';
      ?>

  <div class="seccion_tabs">
    <section class="tabs">
      <div class="contenido">


       <div id="contenedor">
        <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
        <label for="tab-1" class="tab-label-1">Pestaña1</label>

        <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
        <label for="tab-2" class="tab-label-2">Pestaña2</label>

        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
        <label for="tab-3" class="tab-label-3">Pestaña3</label>

        <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
        <label for="tab-4" class="tab-label-4">Pestaña4</label>


        <div class="content">

          <div class="content-1"> Contenido1 </div>

          <div class="content-2"> Contenido2 </div>

          <div class="content-3"> Contenido3 </div>

          <div class="content-4"> Contenido4 </div>

        </div>
      </div>
      </div>
      </section>
 </div>
      <?php
      include_once("includes/footer.php");
      ?>


  </body>
</html>
