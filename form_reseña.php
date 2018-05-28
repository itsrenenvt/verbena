<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Reseñas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/editor.js" charset="utf-8"></script>
    <script src="js/resena.js" charset="utf-8"></script>

    <link rel="icon" href="img/verbena.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/editor.css">
    <link rel="stylesheet" type="text/css" href="css/agrega_reseña.css">


    </script>
  </head>
  <body>

    <?php
    session_start();
    include_once 'modelo/verifica_sesion.php';
    include 'modelo/sget_reseña.php';
    $objReseña = new resena();
    if ($sesion_user=="cliente" ) {
      header('Location: inicio.php');
    }

    ?>

    <div class="fondo_reseña">

      <div class="editor_texto_reseña">

        <div class="marcoresena">
          <!-- <div class=""> -->
            <?php

            try {
              $clv_ope=$_POST["txtope"];
              if($clv_ope == "m" || $clv_ope == "e"){
                $id_ope=$_POST["txtid"];
                $objReseña->tablaresena($id_ope);
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
              <form name="reseña" class="formulario" action="" method="post" id="frm-test">
                <div class="row-8">

                  <div class="input_box">
                    <label class="label_uno" for="txttitulo"><i class="fas fa-quote-left"></i></label>
                    <input class="input_ancho" type="text" name="txttitulo" value="<?php echo $objReseña->gettitulo(); ?>" placeholder="Titulo" <?php echo $editable ?>>
                  </div>

                  <div class="form-group">
                    <textarea class="texto_del_area" id="txt-content" name="txtcontenido" <?php echo $editable ?> > </textarea>
                  </div>
                  <script type="text/javascript">
                  $(document).ready(function() {
                    $('#txt-content').Editor('setText', ['<?php echo $objReseña->getcontenido(); ?>']);
                  });
                  </script>

                  <div class="input_btm_box">
                    <input type="hidden" name="txtope_crud" value="<?php echo $clv_ope?>">
                    <input type="hidden" name="txtusername" value="<?php echo $username ?>">
                      <input type="hidden" name="tipousuario" value="<?php echo $sesion_user ?>">
                    <input type="hidden" name="txtid_crud" value="<?php echo $objReseña->getid(); ?>">

                    <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Listo" onclick="reseña.action='modelo/crud_reseña.php';">
                    <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar" onclick="reseña.action='tabla_resena.php';">
                  </div>
                </div>

              </form>


          <!-- </div> -->

        </div>
      </div>


    </div>

  </body>
</html>
