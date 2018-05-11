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
  try {
    $sesion_user->buscaadmin();
    if ($contrasena==$sesion_user->getpass_c()) {
      header('Location: ../administrador.php');
    }else{
      $sesion_user->buscacolaborador();
      if ($contrasena==$sesion_user->getpass_c()) {
        header('Location: ../administrador.php');
      }else{
        // header('Location: ../login.php');
        $sesion_user->buscacliente();
        if ($contrasena==$sesion_user->getpass_c()) {
          header('Location: ../administrador.php');
        }else{
          // header('Location: ../login.php');
          echo "USUARIO NO EXISTE";
        }
      }
    }

  } catch (Exception $e) {

  }


}
?>
