<?php 
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
  $sesion_user=$_SESSION["usuario"];
  if ($sesion_user=="administrador") {
    include_once 'includes/aside_admin.html';
  }else{
    if ($sesion_user=="colaborador"){
      include_once 'includes/aside_colaborador.html';
    }else{
      if ($sesion_user=="cliente"){
        include_once 'includes/aside_cliente.html';
      }
    }
  }
}else{
  header("Location: login.php");
  exit();
}
?>
