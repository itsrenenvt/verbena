<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type="text/css" href="css/administrador.css">
    <link rel="icon" href="img/verbena.ico">
    <title>Administrador</title>
  </head>
  <body>
    <?php

    // class inicio{
    //   protected $name="";
    //   function setname($pname){
    //     $this->name = $pname;
    //   }
    //
    //   function getname(){
    //     return $this->name;
    //   }
    // }
    ?>

    <?php
    // include_once 'modelo/ingreso.php';
    $nomuser=isset($_REQUEST["Usuario"]) ? $_REQUEST["Usuario"]: "NO USER";
    session_start();
    include 'modelo/verifica_sesion.php';
    // $obj = new inicio();
    // $obj->setname($nomuser);
    ?>

      <div class="fondo_ventana">

      </div>


  </body>
</html>
