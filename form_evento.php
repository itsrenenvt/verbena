<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/evento.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Cartelera</title>
  </head>
  <body>
    <?php
    session_start();
    include_once 'modelo/verifica_sesion.php';
    include 'modelo/sget_evento.php';
    $objevento = new evento();
     ?>
    <div class="fondo_agrega_evento">
      <div class="contenedor_form_evento">
        <!-- <h3>AGREA UN EVENTO</h3> -->
        <div class="formulario">
          <?php

          try {

            $clv_ope=$_POST["txtope"];
            if($clv_ope == "m" || $clv_ope == "e"){
              $id_ope=$_POST["txtid"];
              include 'basedatos/conexion.php';
              $result=pg_query($conexion, 'select * from evento where id_evento ='.$id_ope);
              while ($dato = pg_fetch_array($result)){

                $objevento->setid($dato['id_evento']);
                $objevento->setnombre($dato['nombre']);
                $objevento->setdireccion($dato['direccion']);
                $objevento->setfecha($dato['fecha']);
                $objevento->sethrinicio($dato['hora_inicio']);
                $objevento->sethrfin($dato['hora_fin']);
                $objevento->setorganizador($dato['organizador']);
                $objevento->setclasificacion($dato['clasificacion']);
                $objevento->setcategoria($dato['categoria']);
                $objevento->setdescripcion($dato['descripcion']);
                // echo $objevento->gethrincio();
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
        <form class="" name="evento" action="" method="post">

          <div class="input_box">
            <label class="label_uno" for="txtnombreevento"><i class="fas fa-bell"></i></label>
            <input type="text" name="txtnombreevento" value="<?php echo $objevento->getnombre(); ?>" placeholder="Nombre del evento" <?php echo $editable ?>>
          </div>

          <div class="input_box">
            <label class="label_dos" for="txtdireccion"><i class="fas fa-map-marker"></i></label>
            <input type="text" name="txtdireccion" value="<?php echo $objevento->getdireccion(); ?>" placeholder="Dirección" <?php echo $editable ?>>

            <label class="label_tres" for="txtorganizador"><i class="fas fa-coffee"></i></label>
            <input type="text" name="txtorganizador" value="<?php echo $objevento->getorganizador(); ?>" placeholder="Organizador" <?php echo $editable ?>>
          </div>

          <div class="input_box">
            <label class="label_cuatro" for="txtfecha"><i class="fas fa-calendar"></i></label>
            <input type="date" name="txtfecha" value="<?php echo $objevento->getfecha(); ?>">

            <label class="label_cinco" for="txthrinicio"><i class="fas fa-hourglass-start"></i></label>
            <input type="time" name="txthrinicio" value="<?php echo $objevento->gethrinicio(); ?>" max="23:59:59" min="00:00:00" step="1" <?php echo $editable ?>>

            <label class="label_seis" for="txthrfin"><i class="fas fa-hourglass-end"></i></label>
            <input type="time" name="txthrfin" value="<?php echo $objevento->gethrfin(); ?>" max="23:59:59" min="00:00:00" step="1" <?php echo $editable ?>>
          </div>

          <div class="input_box">

            <label class="label_siete" for="txtcategoria"><i class="fas fa-folder-open"></i></label>
            <select class="categoria" name="txtcategoria" >
              <option value="<?php echo $objevento->getcategoria(); ?>"> <?php echo $objevento->getcategoria(); ?> </option>
              <option value="Cultural" <?php echo $editable ?>>Cultural</option>
              <option value="Literatura" <?php echo $editable ?>>Literatura</option>
              <option value="Artistico" <?php echo $editable ?>>Artistico</option>
              <option value="Feria" <?php echo $editable ?>>Feria</option>
              <option value="Performance" <?php echo $editable ?>>Performance</option>
            </select>

            <label class="label_ocho" for="txtclasificación"><i class="fas fa-eye"></i></label>
            <select class="clasificación" name="txtclasificación">
              <option value="<?php echo $objevento->getclasificacion(); ?>"><?php echo $objevento->getclasificacion(); ?></option>
              <option value="Niños" <?php echo $editable ?>>Niños</option>
              <option value="Adolecentes" <?php echo $editable ?>>Adolecentes</option>
              <option value="Jovenes" <?php echo $editable ?>>Jovenes</option>
              <option value="Adultos" <?php echo $editable ?>>Adultos</option>
              <option value="Público en general" <?php echo $editable ?>>Público en general</option>
            </select>
          </div>

          <div class="input_box">
            <label class="label_nueve" for="txtdescripcion"><i class="fas fa-edit"></i></label>
            <input type="text" name="txtdescripcion" value="<?php echo $objevento->getdescripcion(); ?>" placeholder="Descripción del evento" <?php echo $editable ?>>
          </div>

          <input type="hidden" name="txtope_crud" value="<?php echo $clv_ope?>">
          <input type="hidden" name="txtid_crud" value="<?php echo $objevento->getid(); ?>">

            <input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Listo" onclick="evento.action='modelo/crud_evento.php';">
            <input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Cancelar" onclick="evento.action='tabla_evento.php';">


          </form>
          </div>
      </div>
    </div>
  </body>
</html>
