<?php

include_once 'persona.php';
$d_user = new persona();

$d_user->setusuario($_POST["txtusername"]);
$d_user->setcontrasena($_POST["txtpass"]);
// $d_user->setconfirmcontrasena($_POST["txtpass_confirm"]);
$d_user->setnombre($_POST["txtnombre"]);
$d_user->setpaterno($_POST["txtapp"]);
$d_user->setmaterno($_POST["txtapm"]);
$d_user->setemail($_POST["txtemail"]);
$d_user->setdireccion($_POST["txtdireccion"]);
$d_user->settelefono($_POST["txttelefono"]);

session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
  $sesion ="si";
  if(isset($_POST["txtope"]) && !empty($_POST["txtope"])){
    // echo "Ewe, si hay sesión la operacion es: ". $_POST["txtope"];
    $clv_operacion = $_POST["txtope"];

    if ($clv_operacion = "g") {
      // echo "Hola, si sirvo.";
      try {
        verificausuario();
      } catch (Exception $e) {

      }

    }
  }

}else{
  $sesion="no";
  try {
    verificausuario();
  } catch (Exception $e) {

  }

}


function verificausuario(){
  include '../basedatos/conexion.php';
  global $d_user;
  global $sesion;
    $result=pg_query($conexion, "select id_usuario from usuario where usuario ='".$d_user->getusuario()."'");
    while ($dato = pg_fetch_array($result)) {
       $id_user = $dato['id_usuario'];
     }
     if (empty($id_user)) {
       if ($sesion == "si") {
         registrocliente();
       }else{
         compruebacontraseña();
       }
     }else{

       if ($sesion == "si") {
         try {
           ?>
           <script type="text/javascript">
           alert('EL USUARIO YA EXISTE, INGRESA UNO NUEVO.');
         window.location="../cliente.php";
           </script> -->
           <?php
         } catch (Exception $e) {

         }

       }else{
         ?>
         <script type="text/javascript">
         alert('EL USUARIO YA EXISTE, INGRESA UNO NUEVO.');
         window.location="../registro_cliente.php";
         </script> -->
         <?php
       }
     }
}

function compruebacontraseña(){
  global $d_user;
  $d_user->setconfirmcontrasena($_POST["txtpass_confirm"]);
  if($d_user->getcontrasena() != $d_user->getconfirmcontrasena()){
    ?>
    <script type="text/javascript">
    alert('LAS CONTRASEÑAS NO COINCIDEN.');
    window.location="../registro_cliente.php";
    </script>
    <?php
  }else{
    registrocliente();
  }
}

function registrocliente(){

  include '../basedatos/conexion.php';
  global $d_user;
  global $sesion;

  $result=pg_query($conexion, 'select max (id_usuario) from usuario');
  while ($dato = pg_fetch_array($result)) {
    $max_id = $dato['max'];
  }
  $autogenera_id = $max_id +1;

  $d_user->setid($autogenera_id);

  $insert=pg_query($conexion,
  "insert into usuario
  values (".$d_user->getid().",'"
           .$d_user->getusuario()."','"
           .$d_user->getcontrasena()."','"
           .$d_user->getnombre()."','"
           .$d_user->getpaterno()."','"
           .$d_user->getmaterno()."','"
           .$d_user->getemail()."','"
           .$d_user->getdireccion()."','"
           .$d_user->gettelefono()."')");

pg_close($conexion);

if ($sesion == "si") {
  ?>

  <script type="text/javascript">
    alert('EL REGISTRO SE HA REALIZADO CON EXITO.');
  window.location="../tabla_cliente.php";
  </script>

  <?php
}else{

  ?>

  <script type="text/javascript">
  alert('EL REGISTRO SE HA REALIZADO CON EXITO, SERA REDIRIGIDO AL INICIO SE SESIÓN E INGRESE CON SUS CREDENCIALES.');
  window.location="../login.php";
</script>

<?php
}

 }

?>
