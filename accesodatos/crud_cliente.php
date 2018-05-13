<?php

include_once 'persona.php';
$d_user = new persona();

$d_user->setusuario($_POST["txtusername"]);
$d_user->setcontrasena($_POST["txtpass"]);
$d_user->setnombre($_POST["txtnombre"]);
$d_user->setpaterno($_POST["txtapp"]);
$d_user->setmaterno($_POST["txtapm"]);
$d_user->setemail($_POST["txtemail"]);
$d_user->setdireccion($_POST["txtdireccion"]);
$d_user->settelefono($_POST["txttelefono"]);

session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
  if(isset($_POST["txtope"]) && !empty($_POST["txtope"])){

  }

}else{
  compruebadatos();
}

function usuarioexiste()
{

}

function compruebadatos(){
  if($pass_user= $_POST["txtpass"] != $pass_user_confirm= $_POST["txtpass_confirm"]){
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
  // $nombre_user= $_POST["txtnombre"];
  // $app_user= $_POST["txtapp"];
  // $apm_user= $_POST["txtapm"];
  // $name_user= $_POST["txtusername"];
  // $pass_user= $_POST["txtpass"];
  // $pass_user_confirm= $_POST["txtpass_confirm"];
  // $email_user= $_POST["txtemail"];
  // $telefono_user= $_POST["txttelefono"];
  // $direccion_user= $_POST["txtdireccion"];

  include_once '../basedatos/conexion.php';

  $result=pg_query($conexion, 'select max (id_usuario) from usuario');
  while ($dato = pg_fetch_array($result)) {
    $max_id = $dato['max'];
  }
  $autogenera_id = $max_id +1;

  global $d_user;
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

  // $insert=pg_query($conexion,
  // "insert into usuario
  // values (".$autogenera_id.",'"
  //          .$name_user."','"
  //          .$pass_user."','"
  //          .$nombre_user."','"
  //          .$app_user."','"
  //          .$apm_user."','"
  //          .$email_user."','"
  //          .$direccion_user."','"
  //          .$telefono_user."')");

pg_close($conexion);
?>

<script type="text/javascript">
alert('EL REGISTRO SE HA REALIZADO CON EXITO, SERA REDIRIGIDO AL LOGIN E INICIE SESIÓN CON SUS CREDENCIALES.');
window.location="../login.php";
</script>

<?php
 }

?>
