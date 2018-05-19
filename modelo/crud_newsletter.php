<?php

$email = (isset ($_POST["txtsuscribe"]) ? $_POST["txtsuscribe"] : "no llega nada");

agregaemail();



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
