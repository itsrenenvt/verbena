<?php

class galeria{
  protected $identificador="";
  protected $html="";

  function setid($pidentificador){
    $this->identificador = $pidentificador;
  }

  function getid(){
    return $this->identificador;
  }


    function sethtml($phtml){
      $this->html = $phtml;
    }

    function gethtml(){
      return $this->html;
    }

    function gethtmlformulario(){
      return $textplano = htmlentities($this->html);
    }

    function insertaimagen(){
      include 'basedatos/conexion.php';

      $result=pg_query($conexion, "select * from galeria order by id_imagen desc");
    while ($dato = pg_fetch_array($result)){
         $this->setid($dato['id_imagen']);
         $this->sethtml($dato['html_instagram']);
         ?>
         <div class="cuadroInsta">
           <img src="<?php echo $this->gethtml(); ?>" alt="" >
         </div>
         <?php
      }
      pg_close($conexion);
    }



}

?>
