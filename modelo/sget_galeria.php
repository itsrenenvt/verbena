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
    


}

?>
