<?php

include_once 'sget_reseña.php';
$d_reseña = new resena();
date_default_timezone_set('America/Mexico_City');

$d_reseña->settitulo(isset ($_POST["txttitulo"]) ? $_POST["txttitulo"] : "");
// $d_reseña->setautor(isset ($_POST["txtusername"]) ? $_POST["txtusername"] : "");
$d_reseña->setfechapub(date("d-m-Y"));
$d_reseña->sethorapub(date("H:i:s"));
$d_reseña->setcontenido(isset ($_POST["txtcontenido"]) ? $_POST["txtcontenido"] : "");


session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
  $sesion ="si";
  if(isset($_POST["txtope_crud"]) && !empty($_POST["txtope_crud"])){
    $clv_operacion = $_POST["txtope_crud"];
    // echo "clave_crud: ".$clv_operacion;

    if ($clv_operacion == "g") {
      try {
        registroresena();
      } catch (Exception $e){

      }
    }else{
      if ($clv_operacion == "m"){
      try {
        modificaresena();
      } catch (Exception $e){

      }
      }else{
        if ($clv_operacion == "e"){
          try {
            eliminaresena();
          } catch (Exception $e){

          }
        }
      }
    }
  }

}else{
  $sesion="no";
  try {
    ?>
    <script type="text/javascript">
      alert('LO SENTIMOS USTED, NO ESTA AUTORIZADO EN ESTE APARTADO NEL.');
      window.location="../index.php";
    </script>
    <?php
  } catch (Exception $e) {

  }

}

function capturanombre(){
  global $d_reseña;
  include 'sget_persona.php';
  $objUserName = new persona();
  $usuariologin = isset ($_POST["txtusername"]) ? $_POST["txtusername"] : "";
  $tipousuario = isset ($_POST["tipousuario"]) ? $_POST["tipousuario"] : "";
  include '../basedatos/conexion.php';
  $result=pg_query($conexion, "select nombre, ap_paterno, ap_paterno, ap_materno from " . $tipousuario. " where usuario = '". $usuariologin."'");
  while ($dato = pg_fetch_array($result)){
    $objUserName->setnombre($dato['nombre']);
    $objUserName->setpaterno($dato['ap_paterno']);
    $objUserName->setmaterno($dato['ap_materno']);
    $d_reseña->setautor($objUserName->getNombreCompleto());
  }
  pg_close($conexion);
}

function registroresena(){
  capturanombre();
  include '../basedatos/conexion.php';
  global $d_reseña;
  global $sesion;

  $result=pg_query($conexion, 'select max (id_reseña) from reseña');
  while ($dato = pg_fetch_array($result)) {
    $max_id = $dato['max'];
  }
  $autogenera_id = $max_id +1;

  $d_reseña->setid($autogenera_id);

  $insert=pg_query($conexion,
  "insert into reseña
  values (".$d_reseña->getid().",'"
           .$d_reseña->gettitulo()."','"
           .$d_reseña->getautor()."','"
           .$d_reseña->getfechapub()."','"
           .$d_reseña->gethorapub()."','"
           .$d_reseña->getcontenido()."')");

pg_close($conexion);

if ($sesion == "si") {
  ?>
  <script type="text/javascript">
    alert('EL REGISTRO SE HA REALIZADO CON EXITO.');
    window.location="../tabla_resena.php";
  </script>

  <?php
}else{

  ?>

  <script type="text/javascript">
  alert('ALGO SALIO MAL.');
  window.location="../login.php";
</script>

<?php
}

 }

function modificaresena(){
  global $d_reseña;
  include '../basedatos/conexion.php';
  if (isset($_POST["txtid_crud"]) && !empty($_POST["txtid_crud"])) {
    $modifica_id = $_POST["txtid_crud"];
    pg_query($conexion,"update reseña
                        set titulo = '".$d_reseña->gettitulo()."',
                         autor = '".$d_reseña->getautor()."',
                         fecha_pub = '".$d_reseña->getfechapub()."',
                         hora = '".$d_reseña->gethorapub()."',
                         descripcion = '".$d_reseña->getcontenido()."'

                         where id_reseña = ".$modifica_id);
    pg_close($conexion);
    ?>

    <script type="text/javascript">
    alert('LA RESEÑA CON ID: <?php echo $modifica_id ?> HA SIDO MODIFICADA.');
    window.location="../tabla_resena.php";
   </script>
    <?php
  }

}

function eliminaresena(){
  include '../basedatos/conexion.php';
  if (isset($_POST["txtid_crud"]) && !empty($_POST["txtid_crud"])) {
    $delete_id = $_POST["txtid_crud"];
    pg_query($conexion,"delete from reseña where id_reseña =". $delete_id);
    pg_close($conexion);
    ?>
    <script type="text/javascript">
    alert('LA RESEÑA CON ID: <?php echo $delete_id ?> HA SIDO ELIMINADA.');
    window.location="../tabla_resena.php";
  </script>
    <?php
  }

}

?>
