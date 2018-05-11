<?php
include_once 'usuario.php';
session_start();
$sesion_user = new usuario();
if (isset($_POST["txtuser"]) && !empty($_POST["txtuser"]) &&
    isset($_POST["txtpass"]) && !empty($_POST["txtpass"])) {
  $usuario=$_POST["txtuser"];
  $contrasena=$_POST["txtpass"];
  $sesion_user->setuser($usuario);
  $sesion_user->setpass($contrasena);
  // echo "<p>Usuario: $usuario</p>";
  // echo "<p>Contraseña: $contrasena</p>";
  try {
    $sesion_user->buscaadmin();
    if ($contrasena==$sesion_user->getpass_c()) {
      header('Location: ../administrador.php');
    }else{
      // header('Location: ../login.php');
    }
    // if ($contrasena==$c_pass) {
    //   header('Location: administrador.php');
    // }else{
    //   $sesion_user->buscacolaborador();
    //
    // }
    // echo '<p> X' .$sesion_user->getuser().'</p>';
    // echo '<p>' .$sesion_user->getpass().'</p>';

  } catch (Exception $e) {

  }


}
?>
