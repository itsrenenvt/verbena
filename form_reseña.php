<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Reseñas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/editor.js" charset="utf-8"></script>
    <script src="js/resena.js" charset="utf-8"></script>

    <link rel="icon" href="img/verbena.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/editor.css">
    <link rel="stylesheet" type="text/css" href="css/agrega_reseña.css">


    </script>
  </head>
  <body>

    <?php
    session_start();
    include_once 'modelo/verifica_sesion.php';
    ?>

    <div class="fondo_reseña">

      <div class="editor_texto_reseña">

        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <form name="reseña" class="" action="" method="post" id="frm-test">

                <div class="form-group">
                  <textarea class="texto_del_area" id="txt-content" name="txt-content"></textarea>
                </div>
                <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
                <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar" onclick="reseña.action='tabla_resena.php';">

              </form>

            </div>

          </div>

        </div>
      </div>


    </div>

  </body>
</html>
