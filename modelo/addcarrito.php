<?php
$id_obra = isset($_GET['obra']) ? $_GET['obra'] : "";

session_start();
 if (isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "") {
   $usuario = $_SESSION['usuario'];
   if ($usuario == "cliente") { $usuario="usuario"; }

   if(isset($_POST["txtope_crud"]) && !empty($_POST["txtope_crud"])){
     $clv_operacion = $_POST["txtope_crud"];
     if ($clv_operacion == "e") {
       eliminaobra();
     }else{
       if ($clv_operacion == "o"){
         ordenar();
       }
     }

   }else{
     agregacarrito();
   }


 }else{
   ?>
   <script type="text/javascript">
   alert('PARA AGREGAR ESTE PRODUCTO A SU CARRITO, DEBE INCIAR SESIÓN.');
   window.location="../tienda.php";
 </script>
   <?php
 }





function agregacarrito(){
  global $id_obra;

  include '../basedatos/conexion.php';

    $id_usuario =1002801;
    pg_query($conexion,"insert into carrito
                        values (".$id_obra.","
                                 .idcomprador().")");
    pg_close($conexion);
    ?>
    <script type="text/javascript">
    alert('ESTE PRODUCTO HA SIDO AGREGADO A SU CARRITO.');
    window.location="../tienda.php";
  </script>
    <?php

}

function idcomprador(){
  global $usuario;
  include '../basedatos/conexion.php';
  $result=pg_query($conexion, 'select id_'.$usuario.' from ' .$usuario);
  while ($dato = pg_fetch_array($result)){
    $id_usuario = $dato["id_".$usuario];
  }

  return $id_usuario;
}

function eliminaobra(){

    include '../basedatos/conexion.php';
    if (isset($_POST["txtid_crud"]) && !empty($_POST["txtid_crud"])) {
      $delete_id = $_POST["txtid_crud"];
      pg_query($conexion,"delete from carrito where id_obra =". $delete_id);
      pg_close($conexion);
      ?>
      <script type="text/javascript">
      alert('LA OBRA CON ID: <?php echo $delete_id ?> HA SIDO ELIMINADA DE SU CARRITO.');
      window.location="../carrito.php";
    </script>
      <?php
    }

}

function ordenar() {
  // global $id_obra;
  include '../basedatos/conexion.php';

  if (isset($_POST["txtid_crud"]) && !empty($_POST["txtid_crud"])){
    $obra_id = $_POST["txtid_crud"];
    pg_query($conexion,"insert into ordenes
                        values (".idorden()."," .$obra_id."," .idcomprador().",'" .date("d-m-Y")."','" .date("H:i:s")."','pendiente')");

    pg_query($conexion, "delete from carrito where id_obra = ".$obra_id);

  }pg_close($conexion);
  ?>
  <script type="text/javascript">
    alert('LA OBRA HA SIDO ORDENADA, EN BREVE RECIBIRAR UNA NOTIFICACIÓN EN TU E-MAIL.');
    window.location="../carrito.php";
  </script>

  <?php

}

function idorden(){
  include '../basedatos/conexion.php';
  $result=pg_query($conexion, 'select max (id_orden) from ordenes');
  while ($dato = pg_fetch_array($result)) {
    $max_id = $dato['max'];
  }
  // pg_close($conexion);
  $autogenera_id = $max_id +1;

  return $autogenera_id;
}



?>
