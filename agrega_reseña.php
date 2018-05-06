<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Reseñas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/editor.js" charset="utf-8"></script>
    <script src="js/resena.js" charset="utf-8"></script>

    <link rel="icon" href="img/verbena.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/editor.css">
    <link rel="stylesheet" type="text/css" href="css/agrega_reseña.css">


    </script>
  </head>
  <body>

    <?php
    include_once 'includes/aside.html';
    ?>

    <div class="fondo_reseña">

      <div class="editor_texto_reseña">

        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <form class="" action="guarda_resena.php" method="post" id="frm-test">

                <div class="form-group">
                  <textarea class="texto_del_area" id="txt-content" name="txt-content"></textarea>
                </div>
                <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Guardar">
                <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar">

              </form>

            </div>

          </div>

        </div>
      </div>


    </div>

  </body>
</html>
