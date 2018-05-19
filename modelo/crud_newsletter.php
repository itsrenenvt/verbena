<?php

$email = (isset ($_POST["txtsuscribe"]) ? $_POST["txtsuscribe"] : "no llega nada");

// agregaemail();

session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
    if(isset($_POST["txtope"]) && !empty($_POST["txtope"])){
      $clv_operacion = $_POST["txtope"];

      if ($clv_operacion == "e"){
      try {
        eliminasubscripcion();
      } catch (Exception $e){

      }
    }else{
      ?>
      <script type="text/javascript">
        alert('LO SENTIMOS ¡ALGO SALIO MAL!.');
        window.location="../tabla_cliente.php";
      </script>
      <?php
    }
    }
}else{
  try {
    agregaemail();
  } catch (Exception $e){

  }
}

function eliminasubscripcion(){
  include '../basedatos/conexion.php';
  if (isset($_POST["txtid"]) && !empty($_POST["txtid"])) {
    $delete_id = $_POST["txtid"];
    pg_query($conexion,"delete from newsletter where id_newsletter =". $delete_id);
    pg_close($conexion);
    ?>
    <script type="text/javascript">
    alert('LA SUBSCRIPCIÓN CON ID: <?php echo $delete_id ?> HA SIDO ELIMINADA.');
    window.location="../tabla_cliente.php";
  </script>
    <?php
  }

}

function agregaemail(){
  global $email;
  include '../basedatos/conexion.php';
  $result=pg_query($conexion, 'select max (id_newsletter) from newsletter');
  while ($dato = pg_fetch_array($result)) {
    $max_id = $dato['max'];
  }
  $autogenera_id = $max_id +1;


  $insert=pg_query($conexion,
  "insert into newsletter
  values (".$autogenera_id.",'".$email."')");

pg_close($conexion);

?>
<script type="text/javascript">
  alert('GRACIAS POR SUSCRIBIRTE.');
  // investigar como recargar la misma pagina
  window.location="../index.php";
</script>

<?php
}
?>
