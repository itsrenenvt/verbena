<?php

$email = (isset ($_POST["txtsuscribe"]) ? $_POST["txtsuscribe"] : "no llega nada");

// agregaemail();

session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
  $sesion ="si";
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
        window.history.back();
        // window.reload(true);
      </script>
      <?php
    }
  }else{
    verifica();
  }
}else{
  $sesion ="no";
}

if ($sesion=="no") {
  verifica();
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
    window.location="../tabla_cliente.php#newsdiv";
  </script>
    <?php
  }

}

function verifica(){
  global $email;
  include '../basedatos/conexion.php';
  $result=pg_query($conexion, "select email from newsletter where email = '". $email."'");
  while ($dato = pg_fetch_array($result)) {
    $auxemail = $dato['email'];
  }
  if (empty($auxemail)) {
    agregaemail();
  }else{
    ?>
    <script type="text/javascript">
    alert('EL E-MAIL: <?php echo $email ?> YA HA SIDO REGISTRADO, PRUEBE CON OTRO.');
    window.history.back();
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
  window.history.back();
  // window.reload(true);
</script>

<?php
}
?>
